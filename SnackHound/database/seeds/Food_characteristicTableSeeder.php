<?php

use Illuminate\Database\Seeder;

class Food_characteristicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_characteristic')->insert([
            'id_food_characteristic' => 1,
            'name' => 'Spice',
            'image' => 'spice.png'
        ]);
        DB::table('food_characteristic')->insert([
            'id_food_characteristic' => 2,
            'name' => 'Vegan',
            'image' => 'vegan.png'
        ]);
    }
}
