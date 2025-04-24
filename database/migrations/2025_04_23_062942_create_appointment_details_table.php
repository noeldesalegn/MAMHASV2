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
            $table->foreignId('m_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('phy_id')->constrained('users')->onDelete('cascade');
            $table->string('Mother_Detail', 30);
            $table->string('user_account_name', 35);
            $table->date('Date');
            $table->time('Time');
            $table->datetime('setted_time')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->datetime('modified_on');
            $table->string('setted_by', 500);
            $table->text('status');
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
