<?php

namespace App\Http\Livewire\Bgmd;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Http\Livewire\DataTable\WithPerPagePagination;
use App\Http\Livewire\DataTable\WithBulkActions;
use App\Http\Livewire\DataTable\WithCachedRows;
use App\Models\ChargeSlip;
use App\Models\WorkOrder;
use Illuminate\Support\Facades\Auth;

class WorkOrderSlips extends Component
{
    use WithFileUploads, WithPerPagePagination, WithBulkActions, WithCachedRows;

    public $showTableGroup = true;
    public $showFormGroup = false;
    public $showFileImage = '';
    public $showDeleteSelectedRecordModal = false;
    public $showDeleteSingleRecordModal = false;
    public $delete_single_record_id = '';
    public $showImportModal = false;
    public $showFilters = false;
    public $searchTerm = '';
    public $sortField = 'id';
    public $sortDirection = 'asc';
    public $imports = [
        'count' => 0,
        'file',
    ];
    public $filters = [
        'search' => '',
        'status' => '',
        'amount-min' => null,
        'amount-max' => null,
        'date-min' => null,
        'date-max' => null,
    ];

    protected $queryString = ['sortField','sortDirection'];


    // public function mount() { $this->editing = $this->makeTemporaryFormData(); }

    public function updatedFilters() { $this->resetPage(); }

    public function updatedShowFormGroup() { $this->showFormGroup == false ? $this->showTableGroup = true : false;}

    public function toggleShowFilters()
    {
        // $this->useCachedRows();
        $this->showFilters = ! $this->showFilters;
    }
    public function resetFilters() { $this->reset('filters'); }

    public function sortBy($field){

        if($this->sortField === $field) {
            $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
        } else {
            $this->sortDirection = 'asc';
        }
        $this->sortField = $field;
    }

    public function create()
    {
        return redirect(route('work-order-slip.create',[
            'user_id' => Auth::user()->id,
            'id' => 0
            ]));
    }

    public function deleteSelectedRecord()
    {
        $deleteCount = $this->selectedRowsQuery->count();

        $this->selectedRowsQuery->delete();

        $this->showDeleteSelectedRecordModal = false;

        $this->notify('You\'ve deleted '.$deleteCount.' records.');
    }

    public function toggleDeleteSingleRecordModal($id)
    {
        $this->delete_single_record_id = $id;
        $this->showDeleteSingleRecordModal = true;
    }

    public function deleteSingleRecord()
    {
        WorkOrder::destroy($this->delete_single_record_id);

        $this->showDeleteSingleRecordModal = false;

        $this->delete_single_record_id = '';

        $this->notify('You\'ve deleted record successfully.');
    }

    public function exportSelected()
    {
        return response()->streamDownload(function () {
            echo $this->selectedRowsQuery->toCsv();
        }, 'transactions.csv');
        dd('export');
    }

    public function getRowsQueryProperty()
    {

        return WorkOrder::query()
            ->with('work_descriptions','author','maintenance_request','vehicle')
            // ->where('author_id',auth()->user()->id)
            ->when($this->filters['search'], fn($query, $search) => $query->where($this->sortField, 'like','%'.$search.'%'))
            ->orderBy($this->sortField, $this->sortDirection);
    }

    public function getRowsProperty()
    {
        return $this->cache(function () {
            return $this->applyPagination($this->rowsQuery);
        });
    }

    public function render()
    {
        // dd($this->rows);
        return view('livewire.bgmd.work-order-slips',[
            'records' => $this->rows,
        ]);
    }
}
