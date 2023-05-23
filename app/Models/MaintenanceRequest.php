<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceRequest extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function author()
        { return $this->belongsTo(User::class, 'author_id'); }

    public function images()
        { return $this->hasMany(MaintenanceRequestImage::class); }

    public function vehicle()
        { return $this->belongsTo(Vehicle::class, 'vehicle_id'); }

    public function work_orders()
        { return $this->hasMany(WorkOrder::class); }

    public function work_orders_desc()
    {
        return $this->hasManyThrough(
            WorkDescription::class,
            WorkOrder::class, //envi
            'maintenance_request_id', // Local key on the worker table...
            'work_order_id', // Foreign key on the worker table...
            'id', // Foreign key on the worker table...
            'id' // Local key on the maintenance request table...

        );
    }
}
