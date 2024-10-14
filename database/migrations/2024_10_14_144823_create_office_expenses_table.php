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
        Schema::create('office_expenses', function (Blueprint $table) {
            $table->id();
            $table->double('rent')->nullable();
            $table->double('service_charge')->nullable();
            $table->double('electricity_bill')->nullable();
            $table->double('gas_bill')->nullable();
            $table->double('gasoline_bill')->nullable();
            $table->double('stationary_bill')->nullable();
            $table->double('food_bill')->nullable();
            $table->double('non_food_bill')->nullable();
            $table->double('cleaning_bill')->nullable();
            $table->double('transport_bill')->nullable();
            $table->double('salary')->nullable();
            $table->double('bonus')->nullable();
            $table->double('special_allowance')->nullable();
            $table->double('others')->nullable();
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
        Schema::dropIfExists('office_expenses');
    }
};


