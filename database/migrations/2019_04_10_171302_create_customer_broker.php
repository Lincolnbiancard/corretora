<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerBroker extends Migration
{
    public function up()
    {
        Schema::create('customer_broker', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->unsignedBigInteger('broker_id')->references('id')->on('brokers')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('customer_broker');
    }
}
