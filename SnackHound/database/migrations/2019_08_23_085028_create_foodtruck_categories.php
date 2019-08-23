<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFoodtruckCategories extends Migration
{
       /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
           CREATE OR REPLACE VIEW view_foodtruck_categories AS
           (
            SELECT tfc.*, t.name, t.image, t.price_range
            FROM truck_food_category tfc
            INNER JOIN truck t ON tfc.id_truck = t.id_truck
            INNER JOIN food_category fc ON fc.id_food_category = tfc.id_food_category
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
        DB::statement('DROP VIEW IF EXISTS view_foodtruck_categories');
    }
}
