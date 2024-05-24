<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amenity extends Model
{
    use HasFactory;
    protected $table = 'amenities';
    protected $fillable = ['name'];


    public function getAmenitiesIcon() {
    
        $amenities_list = [
            'Air conditioner' => asset('assets/amenitiesIcons/air.svg'),
            'Breakfast' => asset('assets/amenitiesIcons/breakfast.svg'),
            'Cleaning' => asset('assets/amenitiesIcons/cleaning.svg'),
            'Grocery' => asset('assets/amenitiesIcons/grocery.svg'),
            'Shop near' => asset('assets/amenitiesIcons/shop.svg'),
            '24/7 Online Support' => asset('assets/amenitiesIcons/support.svg'),
            'Smart Security' => asset('assets/amenitiesIcons/security.svg'),
            'High-speed WiFi' => asset('assets/amenitiesIcons/wifi.svg'),
            'Kitchen' => asset('assets/amenitiesIcons/kitchen.svg'),
            'Shower' => asset('assets/amenitiesIcons/shower.svg'),
            'Single Bed' => asset('assets/amenitiesIcons/singlebed.svg'),
            'Expert Team' => asset('assets/amenitiesIcons/experts.svg'),
            'Towels' => asset('assets/amenitiesIcons/towels.svg'),
            'Strong Locker' => asset('assets/amenitiesIcons/locker.svg'),
        ];
    
        return $amenities_list[$this->name];
    }
}
