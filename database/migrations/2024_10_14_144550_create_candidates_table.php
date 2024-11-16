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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('group_id')->nullable();
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade')->onUpdate('cascade');
            $table->date('dob');
            $table->string('country');
            $table->tinyText('gender');
            $table->integer('total_cost');
            $table->tinyText('marital_status');
            $table->string('birth_place');
            $table->string('passport_number');
            $table->date('passport_issue_date');
            $table->date('passport_expiry_date');
            $table->string('village');
            $table->string('thana');
            $table->string('district');
            $table->string('phone');
            $table->string('email')->unique();
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_relation');
            $table->string('emergency_contact_phone');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('spouse_name')->nullable();
            $table->string('status')->default('New');
            $table->unsignedBigInteger('agent_user_id')->nullable();
            $table->unsignedBigInteger('create_by');
            $table->foreign('agent_user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('create_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
