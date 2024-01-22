<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Car extends Model
{
    protected $fillable = [
        'manufacturer',
        'model',
        'year',
        'type',
        'drivetrain',
    ];

    public function carAddons(): HasMany
    {
        return $this->hasMany(CarAddon::class, 'car_id');
    }
}
