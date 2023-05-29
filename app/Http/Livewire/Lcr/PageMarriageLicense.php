<?php

namespace App\Http\Livewire\Lcr;

use App\Http\Livewire\DataTable\WithPerPagePagination;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Models\MarriageLicense;
use Livewire\WithFileUploads;
use Livewire\Component;

## Manage booklets only(Amounts and payee not necessary)
class PageMarriageLicense extends Component
{
    use WithPerPagePagination, WithBulkActions, WithCachedRows, WithFileUploads;

    public $marriage_license_id;
    public $register_no;
    public $filing_date;
    public $posting_period_from;
    public $posting_period_to;
    public $husband_name;
    public $husband_birthdate;
    public $husband_nationality;
    public $husband_civil_status;
    public $husband_residence;
    public $wife_name;
    public $wife_birthdate;
    public $wife_nationality;
    public $wife_civil_status;
    public $wife_residence;
    public $marriage_license_no;
    public $marriage_license_date_issue;
    public $marriage_license_date_expiry;
    public $marriage_license_date_release;
    public $remarks;

     ## Modal initialize
     public $showDeleteSingleRecordModal = false;
     public $showFormModal = false;
     public $filters = [
         'search' => '',
         'status' => '',
         'sort-field' => 'register_no',
         'sort-direction' => 'asc',
         'status' => '',
         'amount-min' => null,
         'amount-max' => null,
         'date-min' => null,
         'date-max' => null,
     ];


    public function mount(){
        $this->marriage_license_id = null;
    }

    public function getRowsQueryProperty()
    {
        return MarriageLicense::query()
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
        return view('livewire.lcr.page-marriage-license',[
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
        $data = MarriageLicense::find($id);
        $this->setFields($data);
        $this->showFormModal = true;
    }

    public function saveRecord()
    {
        $valid = $this->validate([
            'register_no' => 'required',
            'filing_date' => 'required',
            'posting_period_from' => 'required',
            'posting_period_to' => 'required',
            'husband_name' => 'required',
            'husband_birthdate' => 'required',
            'husband_nationality' => 'required',
            'husband_civil_status' => 'required',
            'husband_residence' => 'required',
            'wife_name' => 'required',
            'wife_birthdate' => 'required',
            'wife_nationality' => 'required',
            'wife_civil_status' => 'required',
            'wife_residence' => 'required',
            'marriage_license_no' => 'required',
            'marriage_license_date_issue' => 'required',
            'marriage_license_date_expiry' => 'required',
            'marriage_license_date_release' => 'required',
            'remarks' => 'required',
        ]);

        $valid['encoder'] = auth()->user()->id;

        isset($this->marriage_license_id)
            ? MarriageLicense::find($this->marriage_license_id)->update($valid)
            : MarriageLicense::create($valid);

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
        return to_route('marriage-license/view',['user_id'=>auth()->user()->id, 'id'=> $id]);
    }

    public function toggleDeleteSingleRecordModal($id)
    {
        $this->marriage_license_id = $id;
        $this->showDeleteSingleRecordModal = true;
    }

    public function deleteSingleRecord()
    {
        MarriageLicense::destroy($this->marriage_license_id);

        $this->showDeleteSingleRecordModal = false;

        $this->resetFields();

        $this->notify('You\'ve deleted record successfully.');
    }

    public function setFields($data)
    {
        $this->marriage_license_id = $data['id'];
        $this->register_no = $data['register_no'];
        $this->filing_date = $data['filing_date'];
        $this->posting_period_from = $data['posting_period_from'];
        $this->posting_period_to = $data['posting_period_to'];
        $this->husband_name = $data['husband_name'];
        $this->husband_birthdate = $data['husband_birthdate'];
        $this->husband_nationality = $data['husband_nationality'];
        $this->husband_civil_status = $data['husband_civil_status'];
        $this->husband_residence = $data['husband_residence'];
        $this->wife_name = $data['wife_name'];
        $this->wife_birthdate = $data['wife_birthdate'];
        $this->wife_nationality = $data['wife_nationality'];
        $this->wife_civil_status = $data['wife_civil_status'];
        $this->wife_residence = $data['wife_residence'];
        $this->marriage_license_no = $data['marriage_license_no'];
        $this->marriage_license_date_issue = $data['marriage_license_date_issue'];
        $this->marriage_license_date_expiry = $data['marriage_license_date_expiry'];
        $this->marriage_license_date_release = $data['marriage_license_date_release'];
        $this->remarks = $data['remarks'];
    }

    public function resetFields()
    {
        $this->marriage_license_id = null;
        $this->register_no = '';
        $this->filing_date = '';
        $this->posting_period_from = '';
        $this->posting_period_to = '';
        $this->husband_name = '';
        $this->husband_birthdate = '';
        $this->husband_nationality = '';
        $this->husband_civil_status = '';
        $this->husband_residence = '';
        $this->wife_name = '';
        $this->wife_birthdate = '';
        $this->wife_nationality = '';
        $this->wife_civil_status = '';
        $this->wife_residence = '';
        $this->marriage_license_no = '';
        $this->marriage_license_date_issue = '';
        $this->marriage_license_date_expiry = '';
        $this->marriage_license_date_release = '';
        $this->remarks = '';
    }

}
