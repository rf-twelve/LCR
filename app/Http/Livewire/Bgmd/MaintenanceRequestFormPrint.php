<?php

namespace App\Http\Livewire\Bgmd;

use App\Models\MaintenanceRequest;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;

class MaintenanceRequestFormPrint extends Component
{
    public function print($user_id,$id)
    {
        $model = MaintenanceRequest::with('author','images','vehicle','work_orders','work_orders.work_descriptions')
        ->find($id);
        $data = [
            'tn' => $model['tn'],
            'priority_type' => $model['priority_type'],
            'defects' => $model['defects'],
            'requested_by' => $model['requested_by'],
            'requested_date' => $model['requested_date'],
            'received_by' => $model['received_by'],
            'received_date' => $model['received_date'],
            'inspected_by' => $model['inspected_by'],
            'inspected_date' => $model['inspected_date'],
            'comments' => $model['comments'],
            'parts_needed' => $model['parts_needed'],
            'work_completed_on' => $model['work_completed_on'],
            'status' => $model['status'],
            'author_id' => $model['author_id'],
            'vehicle_id' => $model['vehicle_id'],
            'author' => $model->author,
            'images' => $model->images,
            'vehicle' => $model->vehicle,
            'work_orders' => $model->work_orders,

        ];

        $pdf = Pdf::loadView('pdf.maintenance-request-form', $data);

        return $pdf->stream('maintenance-request-form.pdf');
    }
    public function render()
    {
        return view('livewire.bgmd.maintenance-request-form-print');
    }
}
