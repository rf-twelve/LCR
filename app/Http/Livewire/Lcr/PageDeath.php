<?php

namespace App\Http\Livewire\Lcr;

use App\Http\Livewire\DataTable\WithPerPagePagination;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Models\Death;
use Livewire\WithFileUploads;
use Livewire\Component;

## Manage booklets only(Amounts and payee not necessary)
class PageDeath extends Component
{
    use WithPerPagePagination, WithBulkActions, WithCachedRows, WithFileUploads;

    public $death_id;
    public $lcr_no;
    public $register_date;
    public $deceased_first_name;
    public $deceased_middle_name;
    public $deceased_last_name;
    public $sex;
    public $age;
    public $age_type;
    public $civil_status;
    public $nationality;
    public $residence;
    public $occupation;
    public $death_date_time_day;
    public $death_date_time_month;
    public $death_date_time_year;
    public $death_date_time_time;
    public $death_place;
    public $death_cause;
    public $certifying_officer_name;
    public $certifying_officer_designation;
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
        $this->death_id = null;
    }

    public function getRowsQueryProperty()
    {
        return Death::query()
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
        return view('livewire.lcr.page-death',[
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
        $data = Death::find($id);
        $this->setFields($data);
        $this->showFormModal = true;
    }

    public function saveRecord()
    {
        $valid = $this->validate([
            'lcr_no' => 'required',
            'register_date' => 'required',
            'deceased_first_name' => 'required',
            'deceased_middle_name' => 'required',
            'deceased_last_name' => 'required',
            'sex' => 'required',
            'age' => 'required',
            'age_type' => 'required',
            'civil_status' => 'required',
            'nationality' => 'required',
            'residence' => 'required',
            'occupation' => 'required',
            'death_date_time_day' => 'required',
            'death_date_time_month' => 'required',
            'death_date_time_year' => 'required',
            'death_date_time_time' => 'required',
            'death_place' => 'required',
            'death_cause' => 'required',
            'certifying_officer_name' => 'required',
            'certifying_officer_designation' => 'required',
            'remarks' => 'required',
        ]);

        $valid['encoder'] = auth()->user()->id;

        isset($this->death_id)
            ? Death::find($this->death_id)->update($valid)
            : Death::create($valid);

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
        // return to_route('registrar/enrollment-management/view-student',['user_id'=>auth()->user()->id, 'id'=> $id]);
    }

    public function toggleDeleteSingleRecordModal($id)
    {
        $this->death_id = $id;
        $this->showDeleteSingleRecordModal = true;
    }

    public function deleteSingleRecord()
    {
        Death::destroy($this->death_id);

        $this->showDeleteSingleRecordModal = false;

        $this->resetFields();

        $this->notify('You\'ve deleted record successfully.');
    }

    public function setFields($data)
    {
        $this->death_id = $data['id'];
        $this->lcr_no = $data['lcr_no'];
        $this->register_date = $data['register_date'];
        $this->deceased_first_name = $data['deceased_first_name'];
        $this->deceased_middle_name = $data['deceased_middle_name'];
        $this->deceased_last_name = $data['deceased_last_name'];
        $this->sex = $data['sex'];
        $this->age = $data['age'];
        $this->age_type = $data['age_type'];
        $this->civil_status = $data['civil_status'];
        $this->nationality = $data['nationality'];
        $this->residence = $data['residence'];
        $this->occupation = $data['occupation'];
        $this->death_date_time_day = $data['death_date_time_day'];
        $this->death_date_time_month = $data['death_date_time_month'];
        $this->death_date_time_year = $data['death_date_time_year'];
        $this->death_date_time_time = $data['death_date_time_time'];
        $this->death_place = $data['death_place'];
        $this->death_cause = $data['death_cause'];
        $this->certifying_officer_name = $data['certifying_officer_name'];
        $this->certifying_officer_designation = $data['certifying_officer_designation'];
        $this->remarks = $data['remarks'];
    }

    public function resetFields()
    {
        $this->death_id = null;
        $this->lcr_no = '';
        $this->register_date = '';
        $this->deceased_first_name = '';
        $this->deceased_middle_name = '';
        $this->deceased_last_name = '';
        $this->sex = '';
        $this->age = '';
        $this->age_type = '';
        $this->civil_status = '';
        $this->nationality = '';
        $this->residence = '';
        $this->occupation = '';
        $this->death_date_time_day = '';
        $this->death_date_time_month = '';
        $this->death_date_time_year = '';
        $this->death_date_time_time = '';
        $this->death_place = '';
        $this->death_cause = '';
        $this->certifying_officer_name = '';
        $this->certifying_officer_designation = '';
        $this->remarks = '';
    }

}
