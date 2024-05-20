<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'room_type',
        'room_number',
        'description',
        'price',
        'offer',
        'discount',
        'cancellation',
        'status'
    ];

    public function bookings(): HasMany{
        return $this->hasMany(Booking::class);
    }

    public function photos(): HasMany{
        return $this->hasMany(Photo::class, 'room_id');
    }
}
