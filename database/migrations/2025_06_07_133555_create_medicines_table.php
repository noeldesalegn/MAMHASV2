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
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('dosage')->nullable();
            $table->unsignedBigInteger('prescribed_by'); // physician
            $table->unsignedBigInteger('prescribed_to'); // patient
            $table->timestamps();

            $table->foreign('prescribed_by')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('prescribed_to')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicines');
    }
};
