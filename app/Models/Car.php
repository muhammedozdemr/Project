<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $primaryKey = 'car_id';

    protected $fillable = [
        'client_id',
        'licence_number',
        'chassis_number',
        'year',
        'model',
        'manufacturer',
        'registration_date'
    ];

    public function client()
    {
        return $this->hasOne('App\Models\Client','client_id','client_id');
    }
}
