<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_item', function (Blueprint $table) {
            $table->bigIncrements('id_order_item');
            $table->bigInteger('id_order');
            $table->foreign('id_order')->references('id_order')->on('order');
            $table->bigInteger('id_menu');
            $table->foreign('id_menu')->references('id_menu')->on('menu');
            $table->float('price', 6, 2);
            $table->smallInteger('quantity');
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
        Schema::dropIfExists('order_item');
    }
}
