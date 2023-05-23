<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaintenanceRequestImage extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function maintenance_request()
        { return $this->belongsTo(User::class, 'maintenance_request_id'); }
}
