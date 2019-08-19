<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateViewOrderItem extends Migration
{
      /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
           CREATE OR REPLACE VIEW view_order_item AS
           (
            SELECT oi.*, m.name, sum(oi.quantity * oi.price) as total
            FROM `order_item` oi INNER JOIN menu m ON oi.id_menu = m.id_menu
            GROUP BY oi.id_order_item
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
        DB::statement('DROP VIEW IF EXISTS view_order_item');
    }
}
