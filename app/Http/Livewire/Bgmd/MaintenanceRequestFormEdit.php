<?php

namespace App\Http\Livewire\Bgmd;

use App\Models\ChargeSlip;
use App\Models\ChargeSlipItem;
use App\Models\MaintenanceRequest;
use Livewire\Component;
use Livewire\WithFileUploads;

class MaintenanceRequestFormEdit extends Component
{
    use WithFileUploads;
    public $mrf_id;
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
        $this->temp_image = null;
        $this->setFields($id);
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
        $validated['status'] = $this->status;
        $validated['author_id'] = auth()->user()->id;
        MaintenanceRequest::find($this->mrf_id)->update($validated);
        $this->notify('Maintenance request form updated, Successfully!');
        return redirect()->route('maintenance-request-forms',['user_id'=>auth()->user()->id]);
    }

    public function setFields($id)
    {
        $mrf = MaintenanceRequest::query()
            ->with('author','images','vehicle','work_orders','work_orders.work_descriptions')
            ->find($id);
        $this->mrf_id = $mrf['id'];
        $this->tn = $mrf['tn'];
        $this->priority_type = $mrf['priority_type'];
        $this->defects = $mrf['defects'];
        $this->requested_by = $mrf['requested_by'];
        $this->requested_date = $mrf['requested_date'];
        $this->received_by = $mrf['received_by'];
        $this->received_date = $mrf['received_date'];
        $this->inspected_by = $mrf['inspected_by'];
        $this->inspected_date = $mrf['inspected_date'];
        $this->comments = $mrf['comments'];
        $this->approved_by = $mrf['approved_by'];
        $this->approved_date = $mrf['approved_date'];
        $this->status = $mrf['status'];
        $this->vehicle_id = $mrf['vehicle_id'];
        $this->work_order_id = $mrf['work_order_id'];
    }

    public function render()
    {
        return view('livewire.bgmd.maintenance-request-form-edit');
    }
}
