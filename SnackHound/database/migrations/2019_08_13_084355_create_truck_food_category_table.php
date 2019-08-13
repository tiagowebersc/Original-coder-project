<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTruckFoodCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truck_food_category', function (Blueprint $table) {
            $table->bigIncrements('id_truck_food_category');
            $table->bigInteger('id_truck');
            $table->foreign('id_truck')->references('id_truck')->on('truck');
            $table->bigInteger('id_food_category');
            $table->foreign('id_food_category')->references('id_food_category')->on('food_category');
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
        Schema::dropIfExists('truck_food_category');
    }
}
