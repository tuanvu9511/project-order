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
        Schema::create('info_custumers', function (Blueprint $table) {
            $table->id();
            $table->string('companyName')->unique()->nullable();
            $table->string('custumerName')->required();
            $table->string('phoneNumber','20');
            $table->string('idcard','13')->nullable();
            $table->string('custumerAddress','13');
            $table->string('deliveryAddress','13');
            $table->string('nameConsignee','13');
            $table->string('consigneePhone','20');
            $table->boolean('custumerType');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_custumers');
    }
};
