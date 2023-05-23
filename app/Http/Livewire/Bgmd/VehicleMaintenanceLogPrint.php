<?php

namespace App\Http\Livewire\Bgmd;

use App\Models\Vehicle;
use Barryvdh\DomPDF\Facade\Pdf;
use Livewire\Component;

class VehicleMaintenanceLogPrint extends Component
{
    public function print($user_id,$id)
    {
        $model = Vehicle::with('author','images','maintenances.work_orders.work_descriptions')
        ->find($id);

        // dd($model->maintenances);
        $data = [
            'id' => $model['id'],
            'type' => $model['type'],
            'make' => $model['make'],
            'brand' => $model['brand'],
            'model' => $model['model'],
            'year' => $model['year'],
            'plate_no' => $model['plate_no'],
            'serial_no' => $model['serial_no'],
            'engine_no' => $model['engine_no'],
            'acquisition_date' => $model['acquisition_date'],
            'acquisition_cost' => $model['acquisition_cost'],
            'repair_date' => $model['repair_date'],
            'repair_nature' => $model['repair_nature'],
            'remarks' => $model['remarks'],
            'is_vehicle' => $model['is_vehicle'],
            'author_id' => $model['author_id'],

            'author' => $model->author,
            'images' => $model->images,
            'maintenances' => $model->maintenances,

        ];

        $pdf = Pdf::loadView('pdf.vehicle-maintenance-log', $data);

        return $pdf->stream('vehicle-maintenance-log.pdf');
    }
    public function render()
    {
        return view('livewire.bgmd.vehicle-maintenance-log-print');
    }
}
