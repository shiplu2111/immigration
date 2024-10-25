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
        Schema::create('transections', function (Blueprint $table) {
            $table->id();
            $table->string('transection_name')->nullable();
            $table->string('transection_description')->nullable();
            $table->string('transection_type')->nullable();
            $table->string('transection_source')->nullable();
            $table->double('transection_amount')->nullable();
            $table->double('tansection_tax')->nullable();
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
        Schema::dropIfExists('transections');
    }
};
