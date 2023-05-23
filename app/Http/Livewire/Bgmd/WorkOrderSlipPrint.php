<?php

namespace App\Http\Livewire\Bgmd;

use App\Models\WorkOrder;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;

class WorkOrderSlipPrint extends Component
{
    public function print($user_id,$id)
    {
        $model = WorkOrder::with('work_descriptions','author','maintenance_request','vehicle')
        ->find($id);
        $data = [
            'work_order_no' => $model['work_order_no'],
            'assigned_worker' => $model['assigned_worker'],
            'date_started' => $model['date_started'],
            'date_finished' => $model['date_finished'],
            'vehicle_type' => $model->vehicle->brand.'/'.$model->vehicle->model ?? '',
            'vehicle_plate_engine' => $model->vehicle->plate_no.'/'.$model->vehicle->engine_no ?? '',
            'work_descriptions' => $model->work_descriptions ?? [],
            'supervised_by' => $model['supervised_by'],
            'supervised_date' => $model['supervised_date'],
            'approved_by' => $model['approved_by'],
            'approved_date' => $model['approved_date'],
            'received_by' => $model['received_by'],
            'received_date' => $model['received_date'],
        ];

        $pdf = Pdf::loadView('pdf.work-order-slip', $data);

        return $pdf->stream('work-order-slip.pdf');
    }
    public function render()
    {
        return view('livewire.bgmd.work-order-slip-print');
    }
}
