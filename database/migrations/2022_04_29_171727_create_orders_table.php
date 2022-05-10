<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable()->default(1);
            $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            $table->time('time');
            $table->string('location');
            $table->unsignedInteger('price')->default(0);
            $table->string('plate_num');
            $table->unsignedBigInteger('professional_id')->nullable()->default(1);
            $table->foreign('professional_id')->references('id')->on('users')->onDelete('set null');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
