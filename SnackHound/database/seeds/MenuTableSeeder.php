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
            'name' => 'Birria tacos',
            'description' => 'The dish is a spicy stew, traditionally made from goat meat or mutton, but occasionally from beef or chicken. The dish is often served at celebratory occasions, such as weddings and baptisms, and holidays, such as Christmas and Easter',
            'price' => 2.50,
            'available' => true,
            'image' => 'birria.jpg'
        ]);
        DB::table('menu')->insert([
            'id_menu' => 2,
            'id_truck' => 1,
            'name' => 'Guacamole',
            'description' => 'Guacamole is an avocado-based dip, spread, or salad',
            'price' => 6,
            'available' => true,
            'image' => 'guac.jpg'
        ]);
        DB::table('menu')->insert([
            'id_menu' => 3,
            'id_truck' => 1,
            'name' => 'Pollo',
            'description' => 'It\'s A Cheese-Covered Mystery : The Salt Arroz',
            'price' => 3.50,
            'available' => true,
            'image' => 'pollo.jpg'
        ]);
        DB::table('menu')->insert([
            'id_menu' => 4,
            'id_truck' => 1,
            'name' => 'Pastor',
            'description' => 'It is a dish developed in central Mexico that is based on shawarma spit-grilled meat brought by Lebanese immigrants to Mexico',
            'price' => 8.00,
            'available' => true,
            'image' => 'pastor.jpg'
        ]);
        DB::table('menu')->insert([
            'id_menu' => 5,
            'id_truck' => 1,
            'name' => 'Pibil',
            'description' => 'It is a cooking technique that involves wrapping pork (or another meat) in banana leaves, marinating it in sour orange and achiote',
            'price' => 5.35,
            'available' => true,
            'image' => 'pibil.jpg'
        ]);
        DB::table('menu')->insert([
            'id_menu' => 6,
            'id_truck' => 1,
            'name' => 'Quesadilla',
            'description' => 'It is a flat circle of cooked corn masa, called a tortilla, warmed to soften it enough to be folded in half, and then filled',
            'price' => 7.19,
            'available' => true,
            'image' => 'quesadilla.jpg'
        ]);
    }
}
