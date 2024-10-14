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
        Schema::create('expense_candidates', function (Blueprint $table) {
            $table->id();
            $table->double('air_ticket')->nullable();
            $table->double('translation')->nullable();
            $table->double('mofa_attest')->nullable();
            $table->double('notary_attest')->nullable();
            $table->double('transportation')->nullable();
            $table->double('photocopy')->nullable();
            $table->double('bmet_clearance')->nullable();
            $table->double('visa_cost')->nullable();
            $table->double('embassy_fee')->nullable();
            $table->double('embassy_apointment_fee')->nullable();
            $table->double('agent_commission')->nullable();
            $table->double('other_expenses')->nullable();
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
        Schema::dropIfExists('expense_candidates');
    }
};

