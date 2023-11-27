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
        Schema::create('mattress_size', function (Blueprint $table) {
            $table->foreignId('mattress_id')->constrained()->cascadeOnDelete();
            $table->foreignId('size_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mattress_size');
        $table->foreignId('mattress_id')->constrained()->cascadeOnDelete();
        $table->foreignId('size_id')->constrained()->cascadeOnDelete();
    }
};
