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


        //The Moose Is Loose
        DB::table('menu')->insert([
            'id_menu' => 7,
            'id_truck' => 2,
            'name' => 'Apple Crisp Muffin',
            'description' => 'Lorem ipsum',
            'price' => 2.50,
            'available' => true,
            'image' => 'apple_muffin.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 8,
            'id_truck' => 2,
            'name' => 'Banana Nut Muffin',
            'description' => 'Lorem ipsum',
            'price' => 2.50,
            'available' => true,
            'image' => 'banana_muffin.jpg'
        ]);
        
        DB::table('menu')->insert([
            'id_menu' => 9,
            'id_truck' => 2,
            'name' => 'Crumb Cake',
            'description' => 'Lorem ipsum',
            'price' => 2.25,
            'available' => true,
            'image' => 'crumb_cake.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 10,
            'id_truck' => 2,
            'name' => 'Cinnamon Roll',
            'description' => 'Lorem ipsum',
            'price' => 3.95,
            'available' => true,
            'image' => 'cinnamon_roll.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 11,
            'id_truck' => 2,
            'name' => 'Danish',
            'description' => 'Lorem ipsum',
            'price' => 2.5,
            'available' => true,
            'image' => 'danish.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 12,
            'id_truck' => 2,
            'name' => 'Blueberry Scone',
            'description' => 'Lorem ipsum',
            'price' => 2.25,
            'available' => true,
            'image' => 'blueberry_scone.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 13,
            'id_truck' => 2,
            'name' => 'Cinnamon Scone',
            'description' => 'Lorem ipsum',
            'price' => 2.25,
            'available' => true,
            'image' => 'cinnamon_scone.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 14,
            'id_truck' => 2,
            'name' => 'Cannoli',
            'description' => 'Lorem ipsum',
            'price' => 2.5,
            'available' => true,
            'image' => 'Cannoli.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 15,
            'id_truck' => 2,
            'name' => 'German Cheesecake',
            'description' => 'Lorem ipsum',
            'price' => 4.5,
            'available' => true,
            'image' => 'german_cheesecake.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 16,
            'id_truck' => 2,
            'name' => 'Black Forest Cupcake',
            'description' => 'Lorem ipsum',
            'price' => 3.5,
            'available' => true,
            'image' => 'black_forest_cupcake.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 17,
            'id_truck' => 2,
            'name' => 'Chocolate Bavarian Cupcake',
            'description' => 'Lorem ipsum',
            'price' => 3.5,
            'available' => true,
            'image' => 'bavarian_cupcake.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 18,
            'id_truck' => 2,
            'name' => 'Banana Coconut Cake',
            'description' => 'Lorem ipsum',
            'price' => 4.75,
            'available' => true,
            'image' => 'banana_cake.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 19,
            'id_truck' => 2,
            'name' => 'Carrot Cake',
            'description' => 'Lorem ipsum',
            'price' => 5.2,
            'available' => true,
            'image' => 'carrot_cake.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 20,
            'id_truck' => 2,
            'name' => 'Chocolate Chip Brownie',
            'description' => 'Lorem ipsum',
            'price' => 2.5,
            'available' => true,
            'image' => 'brownie.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 21,
            'id_truck' => 2,
            'name' => 'Chocolate Chip Cookie',
            'description' => 'Lorem ipsum',
            'price' => 1.5,
            'available' => true,
            'image' => 'chocolate_chip.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 22,
            'id_truck' => 2,
            'name' => 'Oatmeal Raisin Cookie ',
            'description' => 'Lorem ipsum',
            'price' => 1.5,
            'available' => true,
            'image' => 'oatmeal_raisin.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 23,
            'id_truck' => 2,
            'name' => 'Snickerdoodle ',
            'description' => 'Lorem ipsum',
            'price' => 1.5,
            'available' => true,
            'image' => 'snickerdoodle.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 24,
            'id_truck' => 2,
            'name' => 'Coconut Macaroon',
            'description' => 'Lorem ipsum',
            'price' => 0.8,
            'available' => true,
            'image' => 'macaroons.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 25,
            'id_truck' => 2,
            'name' => 'Birthday Cake Pop',
            'description' => 'Lorem ipsum',
            'price' => 1,
            'available' => true,
            'image' => 'cake_pops.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 26,
            'id_truck' => 2,
            'name' => 'Espresso Solo',
            'description' => 'Lorem ipsum',
            'price' => 1.5,
            'available' => true,
            'image' => 'solo.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 27,
            'id_truck' => 2,
            'name' => 'Espresso Double',
            'description' => 'Lorem ipsum',
            'price' => 2.5,
            'available' => true,
            'image' => 'doppio.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 28,
            'id_truck' => 2,
            'name' => 'Latte Machiatto',
            'description' => 'Lorem ipsum',
            'price' => 3.5,
            'available' => true,
            'image' => 'latte_macchiatto.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 29,
            'id_truck' => 2,
            'name' => 'Cappuccino',
            'description' => 'Lorem ipsum',
            'price' => 3.5,
            'available' => true,
            'image' => 'cappuccino.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 30,
            'id_truck' => 2,
            'name' => 'Hot Chocolate',
            'description' => 'Lorem ipsum',
            'price' => 3,
            'available' => true,
            'image' => 'hot_chocolate.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 31,
            'id_truck' => 2,
            'name' => 'Filter Coffee',
            'description' => 'Lorem ipsum',
            'price' => 2.5,
            'available' => true,
            'image' => 'filter_coffee.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 32,
            'id_truck' => 2,
            'name' => 'Coke Light',
            'description' => 'Lorem ipsum',
            'price' => 1.8,
            'available' => true,
            'image' => 'coke_light.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 33,
            'id_truck' => 2,
            'name' => 'Coca-Cola',
            'description' => 'Lorem ipsum',
            'price' => 1.8,
            'available' => true,
            'image' => 'coke.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 34,
            'id_truck' => 2,
            'name' => 'Perrier',
            'description' => 'Lorem ipsum',
            'price' => 1.5,
            'available' => true,
            'image' => 'perrier.jpg'
        ]);
    }
}
