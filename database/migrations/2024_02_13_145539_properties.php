<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(){
        Schema::create('properties', function (Blueprint $table) {
            $table->id(); // Auto-incremental primary key
            $table->string('prop_id');
            $table->string('name'); // A string column
            $table->string('address');
            $table->float('price');
            $table->string('city');
            $table->string('country');
            $table->integer('beds');
            $table->integer('baths');
            $table->string('year');
            $table->string('size');
            $table->string('status');
            $table->string('type');
            $table->string('features');
            $table->string('images'); // A text column (nullable)
            $table->timestamps(); // Created_at and updated_at timestamps
        });
    }
    public function down(){
        Schema::dropIfExists('properties');
    }
};
