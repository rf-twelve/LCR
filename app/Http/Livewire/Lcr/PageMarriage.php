<?php

namespace App\Http\Livewire\Lcr;

use App\Http\Livewire\DataTable\WithPerPagePagination;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Models\FileImage;
use App\Models\Marriage;
use Livewire\WithFileUploads;
use Livewire\Component;

## Manage booklets only(Amounts and payee not necessary)
class PageMarriage extends Component
{
    use WithPerPagePagination, WithBulkActions, WithCachedRows, WithFileUploads;

    public $marriage_id;
    public $register_date;
    public $register_no;
    public $husband_name;
    public $husband_age;
    public $husband_nationality;
    public $husband_status;
    public $husband_residence;
    public $husband_fathers_name;
    public $husband_fathers_nationality;
    public $husband_mothers_name;
    public $husband_mothers_nationality;
    public $wife_name;
    public $wife_age;
    public $wife_nationality;
    public $wife_status;
    public $wife_residence;
    public $wife_fathers_name;
    public $wife_fathers_nationality;
    public $wife_mothers_name;
    public $wife_mothers_nationality;
    public $marriage_place;
    public $marriage_date;
    public $remarks;
    public $exist_image;
    public $temp_image;

     ## Modal initialize
     public $showDeleteSingleRecordModal = false;
     public $showFormModal = false;
     public $filters = [
         'search' => '',
         'status' => '',
         'sort-field' => 'register_date',
         'sort-direction' => 'asc',
         'status' => '',
         'amount-min' => null,
         'amount-max' => null,
         'date-min' => null,
         'date-max' => null,
     ];

    public function mount(){
        $this->marriage_id = null;
        $this->exist_image = null;
        $this->temp_image = null;

    }

    public function getRowsQueryProperty()
    {
        return Marriage::query()
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
        return view('livewire.lcr.page-marriage',[
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
        $data = Marriage::with('file_images')->find($id);
        $this->setFields($data);
        $this->showFormModal = true;
    }

    public function saveRecord()
    {
        $valid = $this->validate([
            'register_date' => 'required',
            'register_no' => 'required',
            'husband_name' => 'required',
            'husband_age' => 'required',
            'husband_nationality' => 'required',
            'husband_status' => 'required',
            'husband_residence' => 'required',
            'husband_fathers_name' => 'required',
            'husband_fathers_nationality' => 'required',
            'husband_mothers_name' => 'required',
            'husband_mothers_nationality' => 'required',
            'wife_name' => 'required',
            'wife_age' => 'required',
            'wife_nationality' => 'required',
            'wife_status' => 'required',
            'wife_residence' => 'required',
            'wife_fathers_name' => 'required',
            'wife_fathers_nationality' => 'required',
            'wife_mothers_name' => 'required',
            'wife_mothers_nationality' => 'required',
            'marriage_place' => 'required',
            'marriage_date' => 'required',
            'remarks' => 'nullable',
        ]);

        $valid['encoder'] = auth()->user()->id;

        isset($this->marriage_id)
            ? Marriage::find($this->marriage_id)->update($valid)
            : Marriage::create($valid);

        if (isset($this->marriage_id)) {
            $model = Marriage::find($this->marriage_id);
            $model->update($valid);
        } else {
            $model = Marriage::create($valid);
        }

        if (isset($this->temp_image)) {
            foreach ($this->temp_image as $key => $value) {
                $filename = $value->store('/','images');
                $model->file_images()->create([
                    'name' => $filename,
                    'type' => 'marriage',
                ]);
            }
        }

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
        return to_route('marriage/view',['user_id'=>auth()->user()->id, 'id'=> $id]);
    }

    public function toggleDeleteSingleRecordModal($id)
    {
        $this->marriage_id = $id;
        $this->showDeleteSingleRecordModal = true;
    }

    public function deleteSingleRecord()
    {
        Marriage::destroy($this->marriage_id);

        $this->showDeleteSingleRecordModal = false;

        $this->resetFields();

        $this->notify('You\'ve deleted record successfully.');
    }

    public function removeImage($id,$key)
    {
        FileImage::destroy($id);

        $this->exist_image->forget($key);

        $this->notify('You\'ve removed image successfully.');
    }

    public function setFields($data)
    {
        $this->marriage_id = $data['id'];
        $this->register_date = $data['register_date'];
        $this->register_no = $data['register_no'];
        $this->husband_name = $data['husband_name'];
        $this->husband_age = $data['husband_age'];
        $this->husband_nationality = $data['husband_nationality'];
        $this->husband_status = $data['husband_status'];
        $this->husband_residence = $data['husband_residence'];
        $this->husband_fathers_name = $data['husband_fathers_name'];
        $this->husband_fathers_nationality = $data['husband_fathers_nationality'];
        $this->husband_mothers_name = $data['husband_mothers_name'];
        $this->husband_mothers_nationality = $data['husband_mothers_nationality'];
        $this->wife_name = $data['wife_name'];
        $this->wife_age = $data['wife_age'];
        $this->wife_nationality = $data['wife_nationality'];
        $this->wife_status = $data['wife_status'];
        $this->wife_residence = $data['wife_residence'];
        $this->wife_fathers_name = $data['wife_fathers_name'];
        $this->wife_fathers_nationality = $data['wife_fathers_nationality'];
        $this->wife_mothers_name = $data['wife_mothers_name'];
        $this->wife_mothers_nationality = $data['wife_mothers_nationality'];
        $this->marriage_place = $data['marriage_place'];
        $this->marriage_date = $data['marriage_date'];
        $this->remarks = $data['remarks'];
        $this->exist_image = $data->file_images->where('type','marriage');
        $this->temp_image = null;
    }

    public function resetFields()
    {
        $this->marriage_id = null;
        $this->register_date = '';
        $this->register_no = '';
        $this->husband_name = '';
        $this->husband_age = '';
        $this->husband_nationality = '';
        $this->husband_status = '';
        $this->husband_residence = '';
        $this->husband_fathers_name = '';
        $this->husband_fathers_nationality = '';
        $this->husband_mothers_name = '';
        $this->husband_mothers_nationality = '';
        $this->wife_name = '';
        $this->wife_age = '';
        $this->wife_nationality = '';
        $this->wife_status = '';
        $this->wife_residence = '';
        $this->wife_fathers_name = '';
        $this->wife_fathers_nationality = '';
        $this->wife_mothers_name = '';
        $this->wife_mothers_nationality = '';
        $this->marriage_place = '';
        $this->marriage_date = '';
        $this->remarks = '';
        $this->exist_image = null;
        $this->temp_image = null;
    }

}
