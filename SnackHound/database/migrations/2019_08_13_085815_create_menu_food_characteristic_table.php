<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuFoodCharacteristicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_food_characteristic', function (Blueprint $table) {
            $table->bigIncrements('id_menu_food_characteristic');
            $table->bigInteger('id_food_characteristic');
            $table->foreign('id_food_characteristic')->references('id_food_characteristic')->on('food_characteristic');
            $table->bigInteger('id_menu');
            $table->foreign('id_menu')->references('id_menu')->on('menu');
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
        Schema::dropIfExists('menu_food_characteristic');
    }
}
