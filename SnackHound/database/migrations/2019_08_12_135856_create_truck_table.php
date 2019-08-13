<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTruckTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('truck', function (Blueprint $table) {
            $table->bigIncrements('id_truck');
            $table->foreign('id_user')->references('id_user')->on('user');
            $table->string('name', 60);
            $table->string('image', 100);
            $table->smallInteger('price_range');
            $table->string('telephone', 20);
            $table->boolean('online_order');
            $table->string('name', 500);
            $table->string('facebook_link', 45)->nullable();
            $table->string('instagram_link', 45)->nullable();
            $table->string('twitter_link', 45)->nullable();
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
        Schema::dropIfExists('truck');
    }
}
