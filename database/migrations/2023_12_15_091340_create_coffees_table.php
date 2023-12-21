<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('coffees', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->enum('category', ['Espresso', 'Americano', 'Cappuccino', 'Caffé Latte', 'Mocha Latte'])->nullable();
            $table->enum('temperature', ['Hot', 'Currently', 'Cold'])->nullable();
            $table->integer('price')->nullable();
            $table->string('image_product')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coffees');
    }
};
