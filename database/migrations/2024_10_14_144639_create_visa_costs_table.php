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
        Schema::create('visa_costs', function (Blueprint $table) {
            $table->id();
            $table->double('total_package')->nullable();
            $table->double('first_payment')->nullable();
            $table->double('second_payment')->nullable();
            $table->double('third_payment')->nullable();

            $table->unsignedBigInteger('create_by');
            $table->unsignedBigInteger('candidate_id')->nullable();
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
        Schema::dropIfExists('visa_costs');
    }
};
