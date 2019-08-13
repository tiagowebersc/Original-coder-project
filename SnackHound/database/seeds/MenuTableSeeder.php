<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert([
            'id_menu' => 1,
            'id_truck' => 1,
            'name' => 'Hausfriten',
            'description' => 'Fried potetoes',
            'price' => 2.50,
            'available' => true,
            'image' => 'hausfriten.png'
        ]);
        DB::table('menu')->insert([
            'id_menu' => 2,
            'id_truck' => 1,
            'name' => 'Chili Cheese Fries',
            'description' => 'Fried potetoes with chili and cheese',
            'price' => 6,
            'available' => true,
            'image' => 'chili_cheese_fries.png'
        ]);
        DB::table('menu')->insert([
            'id_menu' => 3,
            'id_truck' => 1,
            'name' => 'Red Bull',
            'description' => 'Energetic drink',
            'price' => 2.5,
            'available' => true,
            'image' => 'red_bull.png'
        ]);
    }
}
