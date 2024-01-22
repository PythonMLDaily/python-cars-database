<?php

use App\Models\AddonCategory;
use App\Models\Car;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('car_addons', static function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Car::class)->constrained();
            $table->foreignIdFor(AddonCategory::class)->constrained();
            $table->string('title');
            $table->timestamps();
        });
    }
};
