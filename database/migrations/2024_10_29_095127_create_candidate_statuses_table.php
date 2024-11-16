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
        Schema::create('candidate_statuses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('candidate_id');
            $table->string('status_name');
            $table->string('status');
            $table->unsignedBigInteger('create_by');
            $table->foreign('create_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('candidate_id')->references('id')->on('candidates')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_statuses');
    }
};
