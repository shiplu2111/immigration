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
            $table->float('air_ticket')->nullable();
            $table->float('translation')->nullable();
            $table->float('mofa_attest')->nullable();
            $table->float('notary_attest')->nullable();
            $table->float('transportation')->nullable();
            $table->float('photocopy')->nullable();
            $table->float('bmet_clearance')->nullable();
            $table->float('visa_cost')->nullable();
            $table->float('embassy_fee')->nullable();
            $table->float('embassy_apointment_fee')->nullable();
            $table->float('agent_commission')->nullable();
            $table->float('other_expenses')->nullable();
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

