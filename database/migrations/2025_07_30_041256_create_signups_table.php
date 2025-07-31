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
        Schema::create('signups', function (Blueprint $table) {
            $table->id();
            $table->string('REGISTRATION_NO');
            $table->string('Name_BANGLA');
            $table->string('NAME');
            $table->string('FATHER_NAME');
            $table->string('MOTHER_NAME');
            $table->text('PRESENT_ADDRESS');
            $table->text('PERMANENT_ADDRESS');
            $table->string('TELEPHONE');
            $table->string('EDUCATION_QUALIFICATION');
            $table->string('PARLIAMENTARY_SEAT');
             $table->string('EMAIL');
            $table->string('FACEBOOK_ID')->nullable();
            $table->date('BIRTHDAY');
            $table->integer('AGE');
            $table->string('BLOOD_GROUP');
            $table->string('NATIONALITY');
            $table->string('NATIONAL_ID');
            $table->string('REFERENCE_ID');
            $table->string('MeMBER_TYPE');
            $table->string('MEMBER_IMG')->nullable();
            $table->string('NID_IMG')->nullable();
            $table->string('PASSWORD');
             $table->string('STATUS')->default('PENDING'); // PENDING, CHECKING, APPROVED, REJECTED
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('signups');
    }
};
