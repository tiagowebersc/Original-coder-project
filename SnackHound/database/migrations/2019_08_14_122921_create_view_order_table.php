<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
           CREATE OR REPLACE VIEW view_order AS
           (
             SELECT o.*, u.first_Name, u.last_Name, u.telephone, sum(oi.quantity) as quantity, sum(oi.quantity * oi.price) as total
             FROM `order` o INNER JOIN order_item oi ON o.id_order = oi.id_order INNER JOIN user u ON o.id_user = u.id_user
             GROUP BY o.id_order
           )
        ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS view_order');
    }
}
