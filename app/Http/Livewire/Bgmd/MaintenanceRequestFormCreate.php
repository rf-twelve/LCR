<?php

namespace App\Http\Livewire\Bgmd;

use App\Models\ChargeSlip;
use App\Models\ChargeSlipItem;
use App\Models\MaintenanceRequest;
use Livewire\Component;
use Livewire\WithFileUploads;

class MaintenanceRequestFormCreate extends Component
{
    use WithFileUploads;
    public $tn;
    public $priority_type;
    public $defects;
    public $requested_by;
    public $requested_date;
    public $received_by;
    public $received_date;
    public $inspected_by;
    public $inspected_date;
    public $comments;
    public $approved_by;
    public $approved_date;
    public $status;
    public $vehicle_id;
    public $work_order_id;

    ## CHARGE SLIP VARIABLES

    public $temp_image;
    public $display_temp_images;

    public function mount($id){
        $this->tn = $id;
        $this->temp_image = null;
    }

    public function save()
    {
        $validated = $this->validate([
        'priority_type' => 'required',
        'vehicle_id' => 'required',
        'defects' => 'required',
        'requested_date' => 'required',
        'requested_by' => 'required',
        'received_date' => 'required',
        'received_by' => 'required',
        'inspected_date' => 'required',
        'inspected_by' => 'required',
        'comments' => 'required',
        ]);

        $validated['tn'] = $this->tn;
        $validated['status'] = 'pending';
        $validated['author_id'] = auth()->user()->id;
        MaintenanceRequest::create($validated);
        $this->notify('Maintenance request form added, Successfully!');
        return redirect()->route('maintenance-request-forms',['user_id'=>auth()->user()->id]);
    }

    public function render()
    {
        return view('livewire.bgmd.maintenance-request-form-create');
    }
}
