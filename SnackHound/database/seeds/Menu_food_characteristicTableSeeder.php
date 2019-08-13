<?php

use Illuminate\Database\Seeder;

class Menu_food_characteristicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu_food_characteristic')->insert([
            'id_food_characteristic' => 1,
            'id_menu' => 2
        ]);
        DB::table('menu_food_characteristic')->insert([
            'id_food_characteristic' => 2,
            'id_menu' => 1
        ]);
    }
}
