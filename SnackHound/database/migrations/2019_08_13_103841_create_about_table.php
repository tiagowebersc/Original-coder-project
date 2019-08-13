<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->bigIncrements('id_about');
            $table->string('telephone', 20);
            $table->string('address', 100);
            $table->string('email_comment', 50);
            $table->string('email_contact', 50);
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
        Schema::dropIfExists('about');
    }
}
