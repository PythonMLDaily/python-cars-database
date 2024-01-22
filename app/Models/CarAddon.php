<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarAddon extends Model
{
    protected $fillable = [
        'car_id', 'addon_category_id', 'title',
    ];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }

    public function addonCategory(): BelongsTo
    {
        return $this->belongsTo(AddonCategory::class);
    }
}
