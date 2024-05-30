<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    use HasFactory;
    public $timestamps = false;

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

    public function room() : BelongsTo {
        return $this->belongsTo(Room::class);
    }
}
