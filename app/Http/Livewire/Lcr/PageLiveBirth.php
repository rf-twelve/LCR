<?php

namespace App\Http\Livewire\Lcr;

use App\Http\Livewire\DataTable\WithPerPagePagination;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Models\LiveBirth;
use Livewire\WithFileUploads;
use Livewire\Component;

## Manage booklets only(Amounts and payee not necessary)
class PageLiveBirth extends Component
{
    use WithPerPagePagination, WithBulkActions, WithCachedRows, WithFileUploads;

    public $live_birth_id;
    public $lcr_no;
    public $register_date;
    public $child_first_name;
    public $child_middle_name;
    public $child_last_name;
    public $sex;
    public $birth_date;
    public $birth_date_time_day;
    public $birth_date_time_month;
    public $birth_date_time_year;
    public $birth_date_time_time;
    public $birth_place;
    public $birth_type;
    public $birth_order;
    public $mother_first_name;
    public $mother_middle_name;
    public $mother_last_name;
    public $mother_age;
    public $mother_nationality;
    public $mother_religion;
    public $father_first_name;
    public $father_middle_name;
    public $father_last_name;
    public $father_age;
    public $father_nationality;
    public $father_religion;
    public $parents_marriage_day;
    public $parents_marriage_month;
    public $parents_marriage_year;
    public $parents_marriage_place;
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
        $this->live_birth_id = null;
    }

    public function getRowsQueryProperty()
    {
        return LiveBirth::query()
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
        return view('livewire.lcr.page-live-birth',[
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
        $data = LiveBirth::find($id);
        $this->setFields($data);
        $this->showFormModal = true;
    }

    public function saveRecord()
    {
        $valid = $this->validate([
            'lcr_no' => 'required',
            'register_date' => 'required',
            'child_first_name' => 'required',
            'child_middle_name' => 'required',
            'child_last_name' => 'required',
            'sex' => 'required',
            'birth_date' => 'required',
            'birth_date_time_day' => 'nullable',
            'birth_date_time_month' => 'nullable',
            'birth_date_time_year' => 'nullable',
            'birth_date_time_time' => 'required',
            'birth_place' => 'required',
            'birth_type' => 'required',
            'birth_order' => 'required',
            'mother_first_name' => 'required',
            'mother_middle_name' => 'required',
            'mother_last_name' => 'required',
            'mother_age' => 'required',
            'mother_nationality' => 'required',
            'mother_religion' => 'required',
            'father_first_name' => 'required',
            'father_middle_name' => 'required',
            'father_last_name' => 'required',
            'father_age' => 'required',
            'father_nationality' => 'required',
            'father_religion' => 'required',
            'parents_marriage_day' => 'required',
            'parents_marriage_month' => 'required',
            'parents_marriage_year' => 'required',
            'parents_marriage_place' => 'required',
            'remarks' => 'required',
        ]);

        $valid['encoder'] = auth()->user()->id;

        isset($this->live_birth_id)
            ? LiveBirth::find($this->live_birth_id)->update($valid)
            : LiveBirth::create($valid);

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
        $this->live_birth_id = $id;
        $this->showDeleteSingleRecordModal = true;
    }

    public function deleteSingleRecord()
    {
        LiveBirth::destroy($this->live_birth_id);

        $this->showDeleteSingleRecordModal = false;

        $this->resetFields();

        $this->notify('You\'ve deleted record successfully.');
    }

    public function setFields($data)
    {
        $this->live_birth_id = $data['id'];
        $this->lcr_no = $data['lcr_no'];
        $this->register_date = $data['register_date'];
        $this->child_first_name = $data['child_first_name'];
        $this->child_middle_name = $data['child_middle_name'];
        $this->child_last_name = $data['child_last_name'];
        $this->sex = $data['sex'];
        $this->birth_date_time_day = $data['birth_date_time_day'];
        $this->birth_date = $data['birth_date'];
        $this->birth_date_time_day = $data['birth_date_time_day'];
        $this->birth_date_time_month = $data['birth_date_time_month'];
        $this->birth_date_time_year = $data['birth_date_time_year'];
        $this->birth_date_time_time = $data['birth_date_time_time'];
        $this->birth_place = $data['birth_place'];
        $this->birth_type = $data['birth_type'];
        $this->birth_order = $data['birth_order'];
        $this->mother_first_name = $data['mother_first_name'];
        $this->mother_middle_name = $data['mother_middle_name'];
        $this->mother_last_name = $data['mother_last_name'];
        $this->mother_age = $data['mother_age'];
        $this->mother_nationality = $data['mother_nationality'];
        $this->mother_religion = $data['mother_religion'];
        $this->father_first_name = $data['father_first_name'];
        $this->father_middle_name = $data['father_middle_name'];
        $this->father_last_name = $data['father_last_name'];
        $this->father_age = $data['father_age'];
        $this->father_nationality = $data['father_nationality'];
        $this->father_religion = $data['father_religion'];
        $this->parents_marriage_day = $data['parents_marriage_day'];
        $this->parents_marriage_month = $data['parents_marriage_month'];
        $this->parents_marriage_year = $data['parents_marriage_year'];
        $this->parents_marriage_place = $data['parents_marriage_place'];
        $this->remarks = $data['remarks'];
    }

    public function resetFields()
    {
        $this->live_birth_id = null;
        $this->lcr_no = '';
        $this->register_date = '';
        $this->child_first_name = '';
        $this->child_middle_name = '';
        $this->child_last_name = '';
        $this->sex = '';
        $this->birth_date = '';
        $this->birth_date_time_day = '';
        $this->birth_date_time_month = '';
        $this->birth_date_time_year = '';
        $this->birth_date_time_time = '';
        $this->birth_place = '';
        $this->birth_type = '';
        $this->birth_order = '';
        $this->mother_first_name = '';
        $this->mother_middle_name = '';
        $this->mother_last_name = '';
        $this->mother_age = '';
        $this->mother_nationality = '';
        $this->mother_religion = '';
        $this->father_first_name = '';
        $this->father_middle_name = '';
        $this->father_last_name = '';
        $this->father_age = '';
        $this->father_nationality = '';
        $this->father_religion = '';
        $this->parents_marriage_day = '';
        $this->parents_marriage_month = '';
        $this->parents_marriage_year = '';
        $this->parents_marriage_place = '';
        $this->remarks = '';
    }

}
