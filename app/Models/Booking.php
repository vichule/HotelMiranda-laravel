<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'order_date',
        'check_in',
        'check_out',
        'notes',
        'status',
        'discount',
        'room_id'
    ];
}
