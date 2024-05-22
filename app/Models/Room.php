<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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

    public function photos(): BelongsToMany{
        return $this->belongsToMany(Photo::class, 'room_photos', 'room_id', 'photo_id');
    }

    public function amenity() : BelongsToMany{
        return $this->belongsToMany(Amenity::class, 'room_amenities', 'room_id', 'amenities_id');
    }

    public static function offers() {
        return self::with(['photos', 'amenity'])->where('offer', 'true')->get();
    }
}
