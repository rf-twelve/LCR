<?php

namespace App\Http\Livewire\Bgmd;

use App\Models\ChargeSlip as ModelsChargeSlip;
use App\Models\MaintenanceRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;

class MaintenanceRequestForm extends Component
{
    // use PDF;
    public $mrf_model;
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
    public $parts_needed;
    public $approved_by;
    public $approved_date;
    public $work_completed_on;
    public $status;
    public $author_id;
    public $encoded_by;
    public $created_at;
    public $updated_at;
    public $vehicle_brand_model;
    public $work_orders;


    public function mount($id)
    {
        $this->setFields($id);
    }

    public function setFields($id)
    {
        $this->mrf_model = MaintenanceRequest::query()
            ->with('vehicle','images','author', 'work_orders')
            ->find($id);
            $this->mrf_id = $this->mrf_model['id'];
            $this->tn = $this->mrf_model['tn'];
            $this->priority_type = $this->mrf_model['priority_type'];
            $this->defects = $this->mrf_model['defects'];
            $this->requested_by = $this->mrf_model['requested_by'];
            $this->requested_date = $this->mrf_model['requested_date'];
            $this->received_by = $this->mrf_model['received_by'];
            $this->received_date = $this->mrf_model['received_date'];
            $this->inspected_by = $this->mrf_model['inspected_by'];
            $this->inspected_date = $this->mrf_model['inspected_date'];
            $this->comments = $this->mrf_model['comments'];
            $this->parts_needed = $this->mrf_model['parts_needed'];
            $this->approved_by = $this->mrf_model['approved_by'];
            $this->approved_date = $this->mrf_model['approved_date'];
            $this->work_completed_on = $this->mrf_model['work_completed_on'];
            $this->status = $this->mrf_model['status'];
            $this->author_id = $this->mrf_model->author->id;
            $this->encoded_by = $this->mrf_model->author->fullname;
            $this->created_at = $this->mrf_model['created_at'];
            $this->updated_at = $this->mrf_model['updated_at'];
            $this->vehicle_brand_model = $this->mrf_model->vehicle->brand.'/'.$this->mrf_model->vehicle->model;
            $this->work_orders = $this->mrf_model->work_orders;
        }

    public function render()
    {
        return view('livewire.bgmd.maintenance-request-form');
    }

}
