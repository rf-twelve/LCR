<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkOrder extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function author()
        { return $this->belongsTo(User::class, 'author_id'); }

    public function maintenance_request()
        { return $this->belongsTo(MaintenanceRequest::class, 'maintenance_request_id'); }

    public function work_descriptions()
        { return $this->hasMany(WorkDescription::class); }

    public function vehicle()
    {
        return $this->hasOneThrough(
            Vehicle::class,
            MaintenanceRequest::class, //envi
            'id', // Local key on the worker table...
            'id', // Foreign key on the vehicle table...
            'maintenance_request_id', // Foreign key on the worker table...
            'vehicle_id' // Local key on the maintenance request table...

        );
    }
}
