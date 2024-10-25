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
            $table->string('visa_type');
            $table->string('name');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('telephone');
            $table->string('email');
            $table->string('contact_person');
            $table->string('contact_telephone');
            $table->string('contact_email');
            $table->string('job_category');
            $table->string('contract_duration');
            $table->string('salary');
            $table->string('accommodation');
            $table->string('meal');
            $table->string('uniform');
            $table->string('transportation');
            $table->string('yearly_vacation');
            $table->string('air_ticket');
            $table->string('status');
            $table->unsignedBigInteger('create_by');
            $table->foreign('create_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

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

