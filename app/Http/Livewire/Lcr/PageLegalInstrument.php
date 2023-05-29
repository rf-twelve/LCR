<?php

namespace App\Http\Livewire\Lcr;

use App\Http\Livewire\DataTable\WithPerPagePagination;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Models\LegalInstrument;
use Livewire\WithFileUploads;
use Livewire\Component;

## Manage booklets only(Amounts and payee not necessary)
class PageLegalInstrument extends Component
{
    use WithPerPagePagination, WithBulkActions, WithCachedRows, WithFileUploads;

    public $legal_instrument_id;
    public $lcr_no;
    public $register_date;
    public $document_type;
    public $execution_date;
    public $applicant_name;
    public $applicant_citizenship;
    public $applicant_birth_date;
    public $applicant_birth_place;
    public $cause_for_loss;
    public $affiant_name;
    public $affiant_citizenship_former;
    public $affiant_citizenship_acquired;
    public $acknowledge_parent_names;
    public $acknowledge_parent_date;
    public $acknowledge_parent_place;
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
        $this->legal_instrument_id = null;
    }

    public function getRowsQueryProperty()
    {
        return LegalInstrument::query()
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
        return view('livewire.lcr.page-legal-instrument',[
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
        $data = LegalInstrument::find($id);
        $this->setFields($data);
        $this->showFormModal = true;
    }

    public function saveRecord()
    {
        $valid = $this->validate([
            'lcr_no' => 'required',
            'register_date' => 'required',
            'document_type' => 'required',
            'execution_date' => 'required',
            'applicant_name' => 'required',
            'applicant_citizenship' => 'required',
            'applicant_birth_date' => 'required',
            'applicant_birth_place' => 'required',
            'cause_for_loss' => 'required',
            'affiant_name' => 'required',
            'affiant_citizenship_former' => 'required',
            'affiant_citizenship_acquired' => 'required',
            'acknowledge_parent_names' => 'required',
            'acknowledge_parent_date' => 'required',
            'acknowledge_parent_place' => 'required',
            'remarks' => 'nullable',
        ]);

        $valid['encoder'] = auth()->user()->id;

        isset($this->legal_instrument_id)
            ? LegalInstrument::find($this->legal_instrument_id)->update($valid)
            : LegalInstrument::create($valid);

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
        return to_route('legal-instrument/view',['user_id'=>auth()->user()->id, 'id'=> $id]);
    }

    public function toggleDeleteSingleRecordModal($id)
    {
        $this->legal_instrument_id = $id;
        $this->showDeleteSingleRecordModal = true;
    }

    public function deleteSingleRecord()
    {
        LegalInstrument::destroy($this->legal_instrument_id);

        $this->showDeleteSingleRecordModal = false;

        $this->resetFields();

        $this->notify('You\'ve deleted record successfully.');
    }

    public function setFields($data)
    {
        $this->legal_instrument_id = $data['id'];
        $this->lcr_no = $data['lcr_no'];
        $this->register_date = $data['register_date'];
        $this->document_type = $data['document_type'];
        $this->execution_date = $data['execution_date'];
        $this->applicant_name = $data['applicant_name'];
        $this->applicant_citizenship = $data['applicant_citizenship'];
        $this->applicant_birth_date = $data['applicant_birth_date'];
        $this->applicant_birth_place = $data['applicant_birth_place'];
        $this->cause_for_loss = $data['cause_for_loss'];
        $this->affiant_name = $data['affiant_name'];
        $this->affiant_citizenship_former = $data['affiant_citizenship_former'];
        $this->affiant_citizenship_acquired = $data['affiant_citizenship_acquired'];
        $this->acknowledge_parent_names = $data['acknowledge_parent_names'];
        $this->acknowledge_parent_date = $data['acknowledge_parent_date'];
        $this->acknowledge_parent_place = $data['acknowledge_parent_place'];
        $this->remarks = $data['remarks'];
    }

    public function resetFields()
    {
        $this->legal_instrument_id = null;
        $this->lcr_no = '';
        $this->register_date = '';
        $this->document_type = '';
        $this->execution_date = '';
        $this->applicant_name = '';
        $this->applicant_citizenship = '';
        $this->applicant_birth_date = '';
        $this->applicant_birth_place = '';
        $this->cause_for_loss = '';
        $this->affiant_name = '';
        $this->affiant_citizenship_former = '';
        $this->affiant_citizenship_acquired = '';
        $this->acknowledge_parent_names = '';
        $this->acknowledge_parent_date = '';
        $this->acknowledge_parent_place = '';
        $this->remarks = '';
    }

}
