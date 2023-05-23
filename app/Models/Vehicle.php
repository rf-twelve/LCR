<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function author()
        { return $this->belongsTo(User::class, 'author_id'); }

    public function images()
        { return $this->hasMany(VehicleImages::class); }

    public function maintenances()
        { return $this->hasMany(MaintenanceRequest::class); }

    public function getUserFullnameAttribute(){
            return User::find($this->author_id) ? (User::find($this->author_id))->fullname : '(Unknown)';
        }

    public function work_orders()
    {
        return $this->hasManyThrough(
            WorkOrder::class,
            MaintenanceRequest::class, //envi
            'vehicle_id', // Local key on the worker table...
            'maintenance_request_id', // Foreign key on the vehicle table...
            'id', // Foreign key on the worker table...
            'id' // Local key on the maintenance request table...

        );
    }

}
