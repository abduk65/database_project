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
        Schema::create('company_infos', function (Blueprint $table) {
            $table->id();
            $table->string('prefix');
            $table->string('person_name');
            $table->string('job_title');
            $table->string('email');
            $table->string('website');
            $table->string('company_name');
            $table->string('phone_number');
            $table->string('fax_number');
            $table->string('address');
            $table->string('postcode');
            $table->string('mobile_number');
            $table->foreignId('city_id');
            $table->foreignId('business_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_infos');
    }
};
