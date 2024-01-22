<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('addon_categories', static function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->timestamps();
        });
    }
};
