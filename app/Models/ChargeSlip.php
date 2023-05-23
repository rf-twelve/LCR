<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChargeSlip extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function author()
        { return $this->belongsTo(User::class, 'author_id'); }

    public function charge_slip_items()
        { return $this->hasMany(ChargeSlipItem::class); }

    public function vehicle()
        { return $this->belongsTo(Vehicle::class, 'vehicle_id'); }
}
