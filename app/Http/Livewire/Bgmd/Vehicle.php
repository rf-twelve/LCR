<?php

namespace App\Http\Livewire\Bgmd;

use App\Models\Vehicle as ModelsVehicle;
use Livewire\Component;

class Vehicle extends Component
{
    public $vehicle_id;
    public $vehicle_model;
    public $type;
    public $make;
    public $brand;
    public $model;
    public $year;
    public $plate_no;
    public $serial_no;
    public $engine_no;
    public $acquisition_date;
    public $acquisition_cost;
    public $remarks;
    public $is_vehicle;
    public $author_id;
    public $author_fullname;

    public $vehicle_images;
    public $maintenance_log;

    public function mount($id)
    {
        $this->setFields($id);
    }

    public function setFields($id)
    {
        $this->vehicle_model = ModelsVehicle::query()
            ->with('images','author')
            ->find($id);
        $this->vehicle_id = $id;
        $this->type = $this->vehicle_model['type'];
        $this->make = $this->vehicle_model['make'];
        $this->brand = $this->vehicle_model['brand'];
        $this->model = $this->vehicle_model['model'];
        $this->year = $this->vehicle_model['year'];
        $this->plate_no = $this->vehicle_model['plate_no'];
        $this->serial_no = $this->vehicle_model['serial_no'];
        $this->engine_no = $this->vehicle_model['engine_no'];
        $this->acquisition_date = $this->vehicle_model['acquisition_date'];
        $this->acquisition_cost = $this->vehicle_model['acquisition_cost'];
        $this->remarks = $this->vehicle_model['remarks'];
        $this->is_vehicle = $this->vehicle_model['is_vehicle'];
        $this->author_id = $this->vehicle_model['author_id'];
        $this->author_fullname = $this->vehicle_model->author->fullname;
        $this->vehicle_images = $this->vehicle_model->images;
        $this->maintenance_log = $this->vehicle_model->maintenances;
    }

    public function render()
    {
        return view('livewire.bgmd.vehicle');
    }

}
