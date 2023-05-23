<?php

namespace App\Http\Livewire\Bgmd;

use App\Models\WorkOrder;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;

class WorkOrderSlip extends Component
{
    // use PDF;
    public $work_order_model;
    public $work_order_id;
    public $work_order_no;
    public $assigned_worker;
    public $date_started;
    public $date_finished;
    public $supervised_by;
    public $supervised_date;
    public $approved_by;
    public $approved_date;
    public $received_by;
    public $received_date;
    public $status;
    public $author_id;
    public $author_fullname;
    public $vehicle_type;
    public $vehicle_plate_engine;
    public $work_descriptions;
    public $created_at;
    public $updated_at;
    public $maintenance_request_id;

    public function mount($id)
    {
        $this->setFields($id);
    }

    public function setFields($id)
    {
        $wo = WorkOrder::query()
            ->with('work_descriptions','author','maintenance_request','vehicle')
            ->find($id);

            $this->work_order_model = $wo;
            $this->work_order_id = $id;
            $this->work_order_no = $wo['work_order_no'];
            $this->assigned_worker = $wo['assigned_worker'];
            $this->date_started = $wo['date_started'];
            $this->date_finished = $wo['date_finished'];
            $this->supervised_by = $wo['supervised_by'];
            $this->supervised_date = $wo['supervised_date'];
            $this->approved_by = $wo['approved_by'];
            $this->approved_date = $wo['approved_date'];
            $this->received_by = $wo['received_by'];
            $this->received_date = $wo['received_date'];
            $this->author_id = $wo['author_id'];
            $this->created_at = $wo['created_at'];
            $this->updated_at = $wo['updated_at'];
            $this->maintenance_request_id = $wo['maintenance_request_id'];
            $this->author_fullname = $wo->author->fullname ?? '';
            $this->vehicle_type = $wo->vehicle->brand.'/'.$wo->vehicle->model ?? '';
            $this->vehicle_plate_engine = $wo->vehicle->plate_no.'/'.$wo->vehicle->engine_no ?? '';
            $this->work_descriptions = $wo->work_descriptions ?? [];
    }

    public function render()
    {
        return view('livewire.bgmd.work-order-slip');
    }

}
