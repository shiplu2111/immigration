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
        Schema::create('statuses', function (Blueprint $table) {
            $table->id();
            $table->tinyText('document_received')->nullable();
            $table->tinyText('submitted_for_work_permit')->nullable();
            $table->tinyText('work_permit_received')->nullable();
            $table->tinyText('submitted_for_visa')->nullable();
            $table->tinyText('visa_received')->nullable();
            $table->tinyText('migrated')->nullable();
            $table->unsignedBigInteger('create_by');
            $table->unsignedBigInteger('candidate_id');
            $table->foreign('candidate_id')->references('id')->on('candidates')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('create_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statuses');
    }
};



