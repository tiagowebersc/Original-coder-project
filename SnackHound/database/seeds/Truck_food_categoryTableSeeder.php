<?php

use Illuminate\Database\Seeder;

class Truck_food_categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('truck_food_category')->insert([
            'id_food_category' => 1,
            'id_truck' => 1
        ]);
        DB::table('truck_food_category')->insert([
            'id_food_category' => 2,
            'id_truck' => 1
        ]);
    }
}
