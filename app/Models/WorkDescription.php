<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkDescription extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function work_order()
        { return $this->belongsTo(WorkOrder::class, 'work_order_id'); }
}
