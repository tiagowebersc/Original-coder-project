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
             SELECT o.*, sum(oi.quantity) as quantity, sum(quantity * price) as total
             FROM `order` o INNER JOIN order_item oi ON o.id_order = oi.id_order
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
