<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';
    protected $fillable = ['car_years', 'car_makes', 'car_models', 'asking_price', 'has_title', 'has_registration', 'condition', 'cylinders', 'transmission', 'description', 'image_1', 'image_2', 'image_3', 'image_4', 'video_link', 'available'];
}
