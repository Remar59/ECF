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
        Schema::create('mattresses', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('image');
            $table->string('brand');
            $table->string('slug');
            $table->text('description');
            $table->integer('price');
            $table->integer('stock');
            

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mattresses');
    }
};
