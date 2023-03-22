<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    // office_id
    // user_sent
    // date_sent
    // user_received
    // date_received
    // doc_id
    // status
    use HasFactory;
    protected $guarded = [];
    protected $casts = ['id' => 'integer'];

}
