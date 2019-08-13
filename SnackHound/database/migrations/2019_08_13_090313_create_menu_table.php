<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu', function (Blueprint $table) {
            $table->bigIncrements('id_menu');
            $table->bigInteger('id_truck');
            $table->foreign('id_truck')->references('id_truck')->on('truck');
            $table->string('name', 50);
            $table->string('description', 500);
            $table->float('price', 6, 2);
            $table->tinyInteger('available');
            $table->string('image', 100);
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
        Schema::dropIfExists('menu');
    }
}
