<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->bigIncrements('id_user');
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->tinyInteger('user_type');
            $table->tinyInteger('user_status');
            $table->string('email', 100);
            $table->string('hash_password', 60);
            $table->string('remember_token', 100)->nullable();
            $table->string('telephone', 20)->nullable();
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
        Schema::dropIfExists('user');
    }
}
