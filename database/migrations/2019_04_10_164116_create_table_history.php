<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableHistory extends Migration
{

    public function up()
    {
        Schema::create('history', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('id_share')->references('id')->on('shares')->onDelete('cascade');
            $table->unsignedBigInteger('id_customer')->references('id')->on('customers')->onDelete('cascade');
            $table->string('quantity');
            $table->string('type');
            $table->unsignedBigInteger('base_price')->references('base_price')->on('shares')->onDelete('cascade');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('history');
    }
}
