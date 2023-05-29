<?php

namespace App\Http\Livewire\Lcr;

use App\Http\Livewire\DataTable\WithPerPagePagination;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Models\CourtDecreeOrder;
use Livewire\WithFileUploads;
use Livewire\Component;

## Manage booklets only(Amounts and payee not necessary)
class PageCourtDecreeOrder extends Component
{
    use WithPerPagePagination, WithBulkActions, WithCachedRows, WithFileUploads;

    public $court_decree_order_id;
    public $lcr_no;
    public $register_date;
    public $document_type;
    public $subject_name;
    public $subject_citizenship;
    public $petitioner_name;
    public $petitioner_citizenship;
    public $court_name;
    public $special_proceeding_no;
    public $date_issued;
    public $judge_name;
    public $remarks;

     ## Modal initialize
     public $showDeleteSingleRecordModal = false;
     public $showFormModal = false;
     public $filters = [
         'search' => '',
         'status' => '',
         'sort-field' => 'lcr_no',
         'sort-direction' => 'asc',
         'status' => '',
         'amount-min' => null,
         'amount-max' => null,
         'date-min' => null,
         'date-max' => null,
     ];

    public function mount(){
        $this->court_decree_order_id = null;
    }

    public function getRowsQueryProperty()
    {
        return CourtDecreeOrder::query()
            ->when($this->filters['search'], fn($query, $search) => $query->where($this->filters['sort-field'], 'like','%'.$search.'%'))
            ->orderBy($this->filters['sort-field'], $this->filters['sort-direction']);
    }

    public function getRowsProperty()
    {
        return $this->cache(function () {
            return $this->applyPagination($this->rowsQuery);
        });
    }

    public function render()
    {
        return view('livewire.lcr.page-court-decree-order',[
            'records' => $this->rows
        ]);
    }

    public function sortBy($field){

        if($this->filters['sort-field'] === $field) {
            $this->filters['sort-by'] = $this->filters['sort-by'] === 'asc' ? 'desc' : 'asc';
        } else {
            $this->filters['sort-by'] = 'asc';
        }
        $this->filters['sort-field'] = $field;
    }

    public function toggleCreateRecordModal()
    {
        $this->resetFields();
        $this->showFormModal = true;
    }

    public function toggleEditRecordModal($id)
    {
        $data = CourtDecreeOrder::find($id);
        $this->setFields($data);
        $this->showFormModal = true;
    }

    public function saveRecord()
    {
        $valid = $this->validate([
            'lcr_no' => 'required',
            'register_date' => 'required',
            'document_type' => 'required',
            'subject_name' => 'required',
            'subject_citizenship' => 'required',
            'petitioner_name' => 'required',
            'petitioner_citizenship' => 'required',
            'court_name' => 'required',
            'special_proceeding_no' => 'required',
            'date_issued' => 'required',
            'judge_name' => 'required',
            'remarks' => 'nullable',
        ]);

        $valid['encoder'] = auth()->user()->id;

        isset($this->court_decree_order_id)
            ? CourtDecreeOrder::find($this->court_decree_order_id)->update($valid)
            : CourtDecreeOrder::create($valid);

        $this->notify('You\'ve save record successfully.');
        $this->resetFields();
        $this->showFormModal = false;
    }

    public function closeRecord()
    {
        $this->showFormModal = false;
        $this->resetFields();

    }

    public function toggleView($id)
    {
        return to_route('court-decree-order/view',['user_id'=>auth()->user()->id, 'id'=> $id]);
    }

    public function toggleDeleteSingleRecordModal($id)
    {
        $this->court_decree_order_id = $id;
        $this->showDeleteSingleRecordModal = true;
    }

    public function deleteSingleRecord()
    {
        CourtDecreeOrder::destroy($this->court_decree_order_id);

        $this->showDeleteSingleRecordModal = false;

        $this->resetFields();

        $this->notify('You\'ve deleted record successfully.');
    }

    public function setFields($data)
    {
        $this->court_decree_order_id = $data['id'];
        $this->lcr_no = $data['lcr_no'];
        $this->register_date = $data['register_date'];
        $this->document_type = $data['document_type'];
        $this->subject_name = $data['subject_name'];
        $this->subject_citizenship = $data['subject_citizenship'];
        $this->petitioner_name = $data['petitioner_name'];
        $this->petitioner_citizenship = $data['petitioner_citizenship'];
        $this->court_name = $data['court_name'];
        $this->special_proceeding_no = $data['special_proceeding_no'];
        $this->date_issued = $data['date_issued'];
        $this->judge_name = $data['judge_name'];
        $this->remarks = $data['remarks'];
    }

    public function resetFields()
    {
        $this->court_decree_order_id = null;
        $this->lcr_no = '';
        $this->register_date = '';
        $this->document_type = '';
        $this->subject_name = '';
        $this->subject_citizenship = '';
        $this->petitioner_name = '';
        $this->petitioner_citizenship = '';
        $this->court_name = '';
        $this->special_proceeding_no = '';
        $this->date_issued = '';
        $this->judge_name = '';
        $this->remarks = '';
    }

}
