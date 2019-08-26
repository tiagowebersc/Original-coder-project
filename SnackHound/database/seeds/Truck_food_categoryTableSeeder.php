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
            'id_food_category' => 9,
            'id_truck' => 1
        ]);
        DB::table('truck_food_category')->insert([
            'id_food_category' => 5,
            'id_truck' => 1
        ]);

        DB::table('truck_food_category')->insert([
            'id_food_category' => 2,
            'id_truck' => 2
        ]);
        DB::table('truck_food_category')->insert([
            'id_food_category' => 6,
            'id_truck' => 2
        ]);
        DB::table('truck_food_category')->insert([
            'id_food_category' => 4,
            'id_truck' => 3
        ]);
        DB::table('truck_food_category')->insert([
            'id_food_category' => 6,
            'id_truck' => 3
        ]);

        DB::table('truck_food_category')->insert([
            'id_food_category' => 4,
            'id_truck' => 4
        ]);
        DB::table('truck_food_category')->insert([
            'id_food_category' => 8,
            'id_truck' => 4
        ]);

        DB::table('truck_food_category')->insert([
            'id_food_category' => 11,
            'id_truck' => 5
        ]);

        DB::table('truck_food_category')->insert([
            'id_food_category' => 1,
            'id_truck' => 6
        ]);
        DB::table('truck_food_category')->insert([
            'id_food_category' => 10,
            'id_truck' => 7
        ]);
        DB::table('truck_food_category')->insert([
            'id_food_category' => 10,
            'id_truck' => 8
        ]);
        DB::table('truck_food_category')->insert([
            'id_food_category' => 1,
            'id_truck' => 9
        ]);
        DB::table('truck_food_category')->insert([
            'id_food_category' => 4,
            'id_truck' => 10
        ]);
        DB::table('truck_food_category')->insert([
            'id_food_category' => 1,
            'id_truck' => 11
        ]);
        DB::table('truck_food_category')->insert([
            'id_food_category' => 1,
            'id_truck' => 12
        ]);
        DB::table('truck_food_category')->insert([
            'id_food_category' => 5,
            'id_truck' => 13
        ]);
        DB::table('truck_food_category')->insert([
            'id_food_category' => 1,
            'id_truck' => 14
        ]);
        DB::table('truck_food_category')->insert([
            'id_food_category' => 3,
            'id_truck' => 15
        ]);
    }
}
