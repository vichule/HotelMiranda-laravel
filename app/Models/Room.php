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

    public static function rooms()
    {
        return self::with(['photos', 'amenity'])
        ->get();
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function photos(): BelongsToMany
    {
        return $this->belongsToMany(Photo::class, 'room_photos', 'room_id', 'photo_id');
    }

    public function amenity(): BelongsToMany
    {
        return $this->belongsToMany(Amenity::class, 'room_amenities', 'room_id', 'amenities_id');
    }

    public static function offers()
    {
        return self::with(['photos', 'amenity'])->where('offer', 1)->take(8)->get();
    }

    public static function popular()
    {
        return self::with(['photos', 'amenity'])
            ->where('price', '>', 300)
            ->take(3)
            ->get();
    }

    public static function related()
    {
        return self::with(['photos', 'amenity'])
            ->where('price', '>', 200)
            ->where('offer', 0)
            ->take(2)
            ->get();
    }



    public function discountPrice()
    {
        $finalPrice = $this->price - ($this->price * $this->discount / 100);
        return round($finalPrice);
    }

    public static function roomAvailability($check_in, $check_out)
    {
        return self::with(['photos', 'amenity'])
            ->whereNotIn('id', function ($query) use ($check_in, $check_out) {
                $query->select('room_id')
                    ->from('bookings')
                    ->where(function ($query) use ($check_in, $check_out) {
                        $query->whereBetween('check_in', [$check_in, $check_out])
                            ->orWhereBetween('check_out', [$check_in, $check_out]);
                    });
            })
            ->get();
    }
}
