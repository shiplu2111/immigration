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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->text('passport')->nullable();
            $table->text('passport_copy')->nullable();
            $table->text('photo')->nullable();
            $table->text('police_clearance')->nullable();
            $table->text('educational_certificate')->nullable();
            $table->text('technical_certificate')->nullable();
            $table->text('driving_licence')->nullable();
            $table->text('national_id')->nullable();
            $table->unsignedBigInteger('candidate_id');
            $table->unsignedBigInteger('create_by');
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
        Schema::dropIfExists('documents');
    }
};
