<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointment_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')   // instead of m_id
            ->constrained('users')
                ->onDelete('cascade');
            $table->foreignId('physician_id') // instead of phy_id
            ->constrained('users')
                ->onDelete('cascade');
            $table->string('mother_detail', 255)->nullable();
            $table->string('user_account_name', 100);
            $table->date('appointment_date');      // instead of Date
            $table->time('appointment_time');      // instead of Time
            $table->string('set_by', 100);         // instead of setted_by
            $table->string('status', 50)->default('scheduled');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_details');
    }
};
