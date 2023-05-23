<?php

namespace App\Http\Livewire\Bgmd;

use App\Models\Vehicle;
use App\Models\VehicleImages;
use Livewire\Component;
use Livewire\WithFileUploads;

class VehicleEdit extends Component
{
    use WithFileUploads;
    public $uid;
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

    public $temp_images;
    public $display_temp_images;

    public function rules() { return [
        // 'editing.type' => 'required|in:'.collect(VmsPar::TYPES)->keys()->implode(','),
        'make' => 'required',
        'brand' => 'required',
        'model' => 'required',
        'year' => 'required',
        'plate_no' => 'required',
        'serial_no' => 'required',
        'engine_no' => 'required',
        'acquisition_date' => 'required',
        'acquisition_cost' => 'required',
        'remarks' => 'nullable',
    ]; }

    public function mount($id){
        $this->setFields($id);
        $this->temp_images = null;
    }

    public function removeImage($id){
        $this->display_temp_images = $this->display_temp_images->reject(function ($item) use ($id) {
            return $item->id === $id;
        });
        VehicleImages::destroy($id);
        $this->notify('Image removed, Successfully!');

    }

    public function setFields($id){
        $vehicle = Vehicle::query()
            ->with('images')
            ->find($id);
        $this->display_temp_images = $vehicle->images ?? null;
        $this->uid = $vehicle['id'];
        $this->type = $vehicle['type'];
        $this->make = $vehicle['make'];
        $this->brand = $vehicle['brand'];
        $this->model = $vehicle['model'];
        $this->year = $vehicle['year'];
        $this->plate_no = $vehicle['plate_no'];
        $this->serial_no = $vehicle['serial_no'];
        $this->engine_no = $vehicle['engine_no'];
        $this->acquisition_date = $vehicle['acquisition_date'];
        $this->acquisition_cost = $vehicle['acquisition_cost'];
        $this->remarks = $vehicle['remarks'];
        $this->is_vehicle = $vehicle['is_vehicle'];
        $this->author_id = $vehicle['author_id'];

    }

    public function save()
    {
        $validated = $this->validate();
        $validated['type'] = $validated['make'];
        $vehicle = Vehicle::find($this->uid);
        $vehicle->update($validated);
        if(isset($this->temp_images)){
            foreach($this->temp_images as $item){
                $filename = $item->store('/','images');
                $vehicle->images()->create([
                    'name'=>$filename,
                    'author_id'=>auth()->user()->id,
                ]);
            }
        }
        return redirect()->route('vehicles',['user_id'=>auth()->user()->id]);
        $this->notify('Vehicle updated, Successfully!');
    }

    public function render()
    {
        return view('livewire.bgmd.vehicle-edit');
    }
}
