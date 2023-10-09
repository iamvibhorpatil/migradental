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
        Schema::create('patient_forms', function (Blueprint $table) {
            $table->id();
            $table->string('patient_number');
            $table->string('family_card_number');
            $table->string('patient_name');
            $table->string('dob');
            $table->string('age');
            $table->string('mobile_no');
            $table->string('email_id');
            $table->string('aadhar_no');
            $table->string('address');
            $table->string('profession');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            $table->string('guardian_name');
            $table->string('guardian_no');
            $table->string('guardian_city');
            $table->string('referred_by');
            $table->string('referred_name');
            $table->string('time');
            $table->string('appointment_sunday');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_forms');
    }
};
