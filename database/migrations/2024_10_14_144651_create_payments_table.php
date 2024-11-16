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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table-> string('payment_type')->nullable();
            $table-> double('payment_amount')->nullable();
            $table-> unsignedBigInteger('group_id')->nullable();
            $table-> unsignedBigInteger('individual_id')->nullable();
            $table-> unsignedBigInteger('agent_id')->nullable();
            $table-> double('total_amount')->nullable();
            $table-> double('due_amount')->nullable();
            $table->unsignedBigInteger('create_by');
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('agent_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('create_by')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('individual_id')->references('id')->on('candidates')->onDelete('cascade')->onUpdate('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
