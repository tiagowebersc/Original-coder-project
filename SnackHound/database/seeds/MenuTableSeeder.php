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

        // Arancino
        DB::table('menu')->insert([
            'id_menu' => 35,
            'id_truck' => 3,
            'name' => 'Arancino Bianco',
            'description' => 'Lorem ipsum',
            'price' => 4.5,
            'available' => true,
            'image' => 'bianco.jpg'
        ]);
     
        DB::table('menu')->insert([
            'id_menu' => 36,
            'id_truck' => 3,
            'name' => 'Arancino Rosso',
            'description' => 'Lorem ipsum',
            'price' => 4.5,
            'available' => true,
            'image' => 'rosso.jpg'
        ]);
     
        DB::table('menu')->insert([
            'id_menu' => 37,
            'id_truck' => 3,
            'name' => 'Arancino Verde',
            'description' => 'Lorem ipsum',
            'price' => 4.5,
            'available' => true,
            'image' => 'verde.jpg'
        ]);
     
        DB::table('menu')->insert([
            'id_menu' => 38,
            'id_truck' => 3,
            'name' => 'Arancino Gluten-Free',
            'description' => 'Lorem ipsum',
            'price' => 4.5,
            'available' => true,
            'image' => 'verde.jpg'
        ]);
     
        DB::table('menu')->insert([
            'id_menu' => 39,
            'id_truck' => 3,
            'name' => 'Mini-Arancini',
            'description' => 'Lorem ipsum',
            'price' => 6.5,
            'available' => true,
            'image' => 'arancini.jpg'
        ]);
     
        DB::table('menu')->insert([
            'id_menu' => 40,
            'id_truck' => 3,
            'name' => 'Pizza Slice of the Day',
            'description' => 'Lorem ipsum',
            'price' => 4.5,
            'available' => true,
            'image' => 'pizza.jpg'
        ]);
     
        DB::table('menu')->insert([
            'id_menu' => 41,
            'id_truck' => 3,
            'name' => 'Soup of the Day',
            'description' => 'Lorem ipsum',
            'price' => 4.5,
            'available' => true,
            'image' => 'soup.jpg'
        ]);
     
        DB::table('menu')->insert([
            'id_menu' => 42,
            'id_truck' => 3,
            'name' => 'Mixed Salad LG',
            'description' => 'Lorem ipsum',
            'price' => 7.5,
            'available' => true,
            'image' => 'salad_lg.jpg'
        ]);
     
        DB::table('menu')->insert([
            'id_menu' => 43,
            'id_truck' => 3,
            'name' => 'Mixed Salad SM',
            'description' => 'Lorem ipsum',
            'price' => 3.5,
            'available' => true,
            'image' => 'salad_sm.jpg'
        ]);
     
        DB::table('menu')->insert([
            'id_menu' => 44,
            'id_truck' => 3,
            'name' => 'Panna Cotta',
            'description' => 'Lorem ipsum',
            'price' => 4,
            'available' => true,
            'image' => 'panna_cotta.jpg'
        ]);
     
        DB::table('menu')->insert([
            'id_menu' => 45,
            'id_truck' => 3,
            'name' => 'Tiramisu',
            'description' => 'Lorem ipsum',
            'price' => 4,
            'available' => true,
            'image' => 'tiramisu.jpg'
        ]);
     
        DB::table('menu')->insert([
            'id_menu' => 46,
            'id_truck' => 3,
            'name' => 'Cannolo Siciliano',
            'description' => 'Lorem ipsum',
            'price' => 4,
            'available' => true,
            'image' => 'cannolo.jpg'
        ]);
     
        DB::table('menu')->insert([
            'id_menu' => 47,
            'id_truck' => 3,
            'name' => 'Seasonal Fruit Salad',
            'description' => 'Lorem ipsum',
            'price' => 4,
            'available' => true,
            'image' => 'fruit_salad.jpg'
        ]);
     
        DB::table('menu')->insert([
            'id_menu' => 48,
            'id_truck' => 3,
            'name' => 'Beer',
            'description' => 'Lorem ipsum',
            'price' => 3.5,
            'available' => true,
            'image' => 'beer.jpg'
        ]);
     
        DB::table('menu')->insert([
            'id_menu' => 49,
            'id_truck' => 3,
            'name' => 'Italian Soda',
            'description' => 'Lorem ipsum',
            'price' => 3.5,
            'available' => true,
            'image' => 'italiansoda.jpg'
        ]);
     
        DB::table('menu')->insert([
            'id_menu' => 50,
            'id_truck' => 3,
            'name' => 'Salad Menu',
            'description' => 'Lorem ipsum',
            'price' => 10.4,
            'available' => true,
            'image' => 'rosso.jpg'
        ]);
     
        DB::table('menu')->insert([
            'id_menu' => 51,
            'id_truck' => 3,
            'name' => 'Pizza Menu',
            'description' => 'Lorem ipsum',
            'price' => 10.4,
            'available' => true,
            'image' => 'pizza.jpg'
        ]);
     
        DB::table('menu')->insert([
            'id_menu' => 52,
            'id_truck' => 3,
            'name' => 'Arancino + Pizza or Salad Menu',
            'description' => 'Lorem ipsum',
            'price' => 12,
            'available' => true,
            'image' => 'bianco.jpg'
        ]);
     
        //BURGER & Co 
        DB::table('menu')->insert([
            'id_menu' => 53,
            'id_truck' => 4,
            'name' => 'Classic Burger',
            'description' => 'Artisan bread + ground beef + ketchup + onions + tomatoes + pickles + lettuce',
            'price' => 7,
            'available' => true,
            'image' => 'classic_burger.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 54,
            'id_truck' => 4,
            'name' => 'Classic Burger Menu',
            'description' => 'Artisan bread + ground beef + ketchup + onions + tomatoes + pickles + lettuce',
            'price' => 11.5,
            'available' => true,
            'image' => 'classic_burger.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 55,
            'id_truck' => 4,
            'name' => 'Cheeseburger',
            'description' => 'Artisan bread + ground beef  + cheddar + ketchup + tomatoes + lettuce',
            'price' => 7.5,
            'available' => true,
            'image' => 'cheeseburger.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 56,
            'id_truck' => 4,
            'name' => 'Cheeseburger Menu',
            'description' => 'Artisan bread + ground beef  + cheddar + ketchup + tomatoes + lettuce/fries + drink',
            'price' => 12,
            'available' => true,
            'image' => 'cheeseburger.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 57,
            'id_truck' => 4,
            'name' => 'Bacon + Cheese Burger',
            'description' => 'Artisan bread + ground beef + bacon + cheddar + ketchup + tomatoes + lettuce',
            'price' => 8,
            'available' => true,
            'image' => 'bacon_cheeseburger.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 58,
            'id_truck' => 4,
            'name' => 'Bacon + Cheese Burger Menu',
            'description' => 'Artisan bread + ground beef + bacon + cheddar + ketchup + tomatoes + lettuce/fries + drink',
            'price' => 12.5,
            'available' => true,
            'image' => 'bacon_cheeseburger.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 59,
            'id_truck' => 4,
            'name' => 'Veggie Burger',
            'description' => 'Artisan bread + vegetarian patty + ketchup + tomatoes + pickles + lettuce',
            'price' => 8,
            'available' => true,
            'image' => 'veggie_burger.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 60,
            'id_truck' => 4,
            'name' => 'Veggie Burger Menu',
            'description' => 'Artisan bread + vegetarian patty + ketchup + tomatoes + pickles + lettuce/fries + drink',
            'price' => 12.5,
            'available' => true,
            'image' => 'veggie_burger.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 61,
            'id_truck' => 4,
            'name' => 'Savoyard Burger',
            'description' => 'Artisan bread + ground beef + parma ham + raclette + lettuce + tomatoes + ketchup',
            'price' => 8.5,
            'available' => true,
            'image' => 'savoyard.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 62,
            'id_truck' => 4,
            'name' => 'Savoyard Burger Menu',
            'description' => 'Artisan bread + ground beef + parma ham + raclette + lettuce + tomatoes + ketchup/fries + drink',
            'price' => 13,
            'available' => true,
            'image' => 'savoyard.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 63,
            'id_truck' => 4,
            'name' => 'Chevre Burger',
            'description' => 'Artisan bread + ground beef + goat cheese + honey + lettuce + tomatoes',
            'price' => 8.5,
            'available' => true,
            'image' => 'chevre.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 64,
            'id_truck' => 4,
            'name' => 'Chevre Burger Menu',
            'description' => 'Artisan bread + ground beef + goat cheese + honey + lettuce + tomatoes/fries + drink',
            'price' => 13,
            'available' => true,
            'image' => 'chevre.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 65,
            'id_truck' => 4,
            'name' => 'Salmon Burger',
            'description' => 'Artisan bread + smoked salmon + cream cheese + ketchup + red onions + tomatoes + lettuce',
            'price' => 8.5,
            'available' => true,
            'image' => 'salmon_burger.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 66,
            'id_truck' => 4,
            'name' => 'Salmon Burger Menu',
            'description' => 'Artisan bread + smoked salmon + cream cheese + ketchup + red onions + tomatoes + lettuce/fries + drink',
            'price' => 13,
            'available' => true,
            'image' => 'salmon_burger.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 67,
            'id_truck' => 4,
            'name' => 'Fish Burger',
            'description' => 'Artisan bread + fish filet + lemon juice + tartar sauce + red onions + tomatoes + lettuce',
            'price' => 8.5,
            'available' => true,
            'image' => 'fish.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 68,
            'id_truck' => 4,
            'name' => 'Fish Burger Menu',
            'description' => 'Artisan bread + fish filet + lemon juice + tartar sauce + red onions + tomatoes + lettuce/fries + drink',
            'price' => 13,
            'available' => true,
            'image' => 'fish.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 69,
            'id_truck' => 4,
            'name' => 'Hot Salsa Burger',
            'description' => 'Artisan bread + ground beef + cheddar + hot salsa + jalapenos + tomatoes + lettuce',
            'price' => 8.5,
            'available' => true,
            'image' => 'hot_salsa.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 70,
            'id_truck' => 4,
            'name' => 'Hot Salsa Burger Menu',
            'description' => 'Artisan bread + ground beef + cheddar + hot salsa + jalapenos + tomatoes + lettuce/fries + drink',
            'price' => 13,
            'available' => true,
            'image' => 'hot_salsa.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 71,
            'id_truck' => 4,
            'name' => 'El Gringo Burger',
            'description' => 'Artisan bread + ground beef + cheddar + guacamole + onions + tomatoes + lettuce',
            'price' => 8.5,
            'available' => true,
            'image' => 'el_gringo.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 72,
            'id_truck' => 4,
            'name' => 'El Gringo Burger Menu',
            'description' => 'Artisan bread + ground beef + cheddar + guacamole + onions + tomatoes + lettuce/fries + drink',
            'price' => 13,
            'available' => true,
            'image' => 'el_gringo.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 73,
            'id_truck' => 4,
            'name' => 'Chicken Burger',
            'description' => 'Artisan bread + chicken + ketchup + red onions + tomatoes + lettuce',
            'price' => 8.5,
            'available' => true,
            'image' => 'grilled_chicken.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 74,
            'id_truck' => 4,
            'name' => 'Chicken Burger Menu',
            'description' => 'Artisan bread + chicken + ketchup + red onions + tomatoes + lettuce/fries + drink',
            'price' => 13,
            'available' => true,
            'image' => 'grilled_chicken.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 75,
            'id_truck' => 4,
            'name' => 'Chicken Nuggets',
            'description' => 'Chicken Nuggets + ketchup + red onions + tomatoes + lettuce',
            'price' => 8.5,
            'available' => true,
            'image' => 'chicken_nuggets.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 76,
            'id_truck' => 4,
            'name' => 'Chicken Nuggets Menu',
            'description' => 'Chicken Nuggets + ketchup + red onions + tomatoes + lettuce/Fries + Drink',
            'price' => 8.5,
            'available' => true,
            'image' => 'chicken_nuggets.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 77,
            'id_truck' => 4,
            'name' => 'Chicken Kebab Burger',
            'description' => 'Chicken kebab + garlic sauce + red onions + tomatoes + salad',
            'price' => 8.5,
            'available' => true,
            'image' => 'chicken_kebab.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 78,
            'id_truck' => 4,
            'name' => 'Chicken Kebab Burger Menu',
            'description' => 'Chicken kebab + garlic sauce + red onions + tomatoes + salad/Fries + Drink',
            'price' => 13,
            'available' => true,
            'image' => 'chicken_kebab.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 79,
            'id_truck' => 4,
            'name' => 'Chicken Crispy Burger',
            'description' => 'Artisan bread + crispy chicken + red onions + tomatoes + lettuce',
            'price' => 8.5,
            'available' => true,
            'image' => 'crispy_chicken.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 80,
            'id_truck' => 4,
            'name' => 'Chicken Crispy Burger Menu',
            'description' => 'Artisan bread + crispy chicken + red onions + tomatoes + lettuce/Fries + Drink',
            'price' => 13,
            'available' => true,
            'image' => 'crispy_chicken.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 81,
            'id_truck' => 4,
            'name' => 'Blue Cheese Burger',
            'description' => 'Artisan bread + ground beef + blue cheese + walnuts + tomatoes + lettuce',
            'price' => 8.5,
            'available' => true,
            'image' => 'blue_cheese.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 82,
            'id_truck' => 4,
            'name' => 'Blue Cheese Burger Menu',
            'description' => 'Artisan bread + ground beef + blue cheese + walnuts + tomatoes + lettuce/Fries + Burger',
            'price' => 13,
            'available' => true,
            'image' => 'blue_cheese.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 83,
            'id_truck' => 4,
            'name' => 'Chicken Nuggets Salad',
            'description' => 'Plate of lettuce and raw vegetables, chicken nuggets and dressing',
            'price' => 8,
            'available' => true,
            'image' => 'chicken_nuggets_salad.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 84,
            'id_truck' => 4,
            'name' => 'Grilled Chicken Salad',
            'description' => 'Plate of lettuce with raw vbegetables, marinated chicken breast and dressing',
            'price' => 8,
            'available' => true,
            'image' => 'grilled_chicken_salad.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 85,
            'id_truck' => 4,
            'name' => 'Chicken Caesar Salad',
            'description' => 'Salad plate with vegetables, chicken breast, caesar dressing',
            'price' => 8,
            'available' => true,
            'image' => 'grilled_chicken_salad.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 86,
            'id_truck' => 4,
            'name' => 'Vegetarian Salad',
            'description' => 'Plate of salad,. vegetables, veggie patty',
            'price' => 8,
            'available' => true,
            'image' => 'salad.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 87,
            'id_truck' => 4,
            'name' => 'Salmon Salad',
            'description' => 'Plate of salad with smoked salmon + vinaigrette',
            'price' => 9,
            'available' => true,
            'image' => 'salmon_salad.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 88,
            'id_truck' => 4,
            'name' => 'Fries',
            'description' => 'Side of fries',
            'price' => 3,
            'available' => true,
            'image' => 'fries.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 89,
            'id_truck' => 4,
            'name' => 'Dessert of the Day',
            'description' => 'Desserts vary by day',
            'price' => 2.5,
            'available' => true,
            'image' => 'dessert.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 90,
            'id_truck' => 4,
            'name' => 'Coke Light',
            'description' => '',
            'price' => 2.5,
            'available' => true,
            'image' => 'coke_light.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 91,
            'id_truck' => 4,
            'name' => 'Perrier',
            'description' => '',
            'price' => 2.5,
            'available' => true,
            'image' => 'perrier.jpg'
        ]);

        // Go Fish
        DB::table('menu')->insert([
            'id_menu' => 92,
            'id_truck' => 5,
            'name' => 'Cod N Chips',
            'description' => 'Beer battered cod + chips + tartar sauce',
            'price' => 11,
            'available' => true,
            'image' => 'fishnchips.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 93,
            'id_truck' => 5,
            'name' => 'Salmon N Chips',
            'description' => 'Beer battered salmon + chips + tartar sauce',
            'price' => 13,
            'available' => true,
            'image' => 'salmon.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 94,
            'id_truck' => 5,
            'name' => 'Mahi-Mahi Fish Tacos',
            'description' => 'Corn Tortillas filled with mahi-mahi, coleslaw & tartar sauce \ Served with guacamole',
            'price' => 11,
            'available' => true,
            'image' => 'fish_tacos.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 95,
            'id_truck' => 5,
            'name' => 'Lobster Roll',
            'description' => 'Roll stuffed with cooked lobster, tartar sauce & a squeeze of lemon. \ Served with chips',
            'price' => 11,
            'available' => true,
            'image' => 'lobsterrolls.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 96,
            'id_truck' => 5,
            'name' => 'Crab Cake Sandwich',
            'description' => 'Breaded crab cakes in a bun + tartar sauce + coleslaw / Served with chips',
            'price' => 17,
            'available' => true,
            'image' => 'crabcake_sandwich.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 97,
            'id_truck' => 5,
            'name' => 'Crabby Melt',
            'description' => 'Breaded crab cakes in a bun + smothered in cheese sauce + coleslaw / Served with chips',
            'price' => 12,
            'available' => true,
            'image' => 'crabby_melt.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 98,
            'id_truck' => 5,
            'name' => 'Crab Quesadilla',
            'description' => 'Tortilla filled with crab, cheese / Served with guacamole',
            'price' => 10,
            'available' => true,
            'image' => 'crab_quesadilla.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 99,
            'id_truck' => 5,
            'name' => 'Salmon Burger',
            'description' => 'Salmon burger + coleslaw + tartar sauce / Served with chips',
            'price' => 9,
            'available' => true,
            'image' => 'salmon_burger.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 100,
            'id_truck' => 5,
            'name' => 'Salmon Burger',
            'description' => 'Salmon burger + coleslaw + tartar sauce / Served with chips',
            'price' => 9,
            'available' => true,
            'image' => 'salmon_burger.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 101,
            'id_truck' => 5,
            'name' => 'Coke Light',
            'description' => '',
            'price' => 2.5,
            'available' => true,
            'image' => 'coke_light.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 102,
            'id_truck' => 5,
            'name' => 'Perrier',
            'description' => '',
            'price' => 2.5,
            'available' => true,
            'image' => 'perrier.jpg'
        ]);

        //Wok Me Up
        DB::table('menu')->insert([
            'id_menu' => 103,
            'id_truck' => 6,
            'name' => 'Chicken Kung Pao',
            'description' => 'Cashew nuts, peppers, carrots, white cabbage, onion, leeks, pineapple',
            'price' => 7.5,
            'available' => true,
            'image' => 'kungpao.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 104,
            'id_truck' => 6,
            'name' => 'Beef Hei Jia Black Pepper',
            'description' => 'Broccoli, peppers, carrots, chinese cabbage, onions, white cabbage',
            'price' => 8.5,
            'available' => true,
            'image' => 'heijia.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 105,
            'id_truck' => 6,
            'name' => 'Tofu Shuan Dong',
            'description' => 'Chinese cabbage, bamboo, chinese mushrooms, carrots, onions, white cabbage, snow peas',
            'price' => 8.5,
            'available' => true,
            'image' => 'feijao.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 106,
            'id_truck' => 6,
            'name' => 'Scampi Feijao Garlic',
            'description' => 'Bean sprouts, snow peas, green beans, cabbage, carrots, onions',
            'price' => 9.5,
            'available' => true,
            'image' => 'feijao.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 107,
            'id_truck' => 6,
            'name' => 'Chicken Red Curry',
            'description' => 'Coconut milk, carrots, bamboo, onions, peppers, garlic, cabbage',
            'price' => 7.5,
            'available' => true,
            'image' => 'redcurry.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 108,
            'id_truck' => 6,
            'name' => 'Beef Green Curry',
            'description' => 'Snow peas, carrots, green beans, white cabbage, bamboo, coconut milk',
            'price' => 8.5,
            'available' => true,
            'image' => 'greencurry.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 109,
            'id_truck' => 6,
            'name' => 'Beef Green Curry',
            'description' => 'White cabbage, carrots, onions, bamboo, peppers, broccoli, chinese mushrooms',
            'price' => 7.5,
            'available' => true,
            'image' => 'saokao.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 110,
            'id_truck' => 6,
            'name' => 'Chicken Pad Thai',
            'description' => 'Bean sprouts, leeks, onions, carrots, white cabbage, cashew nuts, eggs, green beans',
            'price' => 7.5,
            'available' => true,
            'image' => 'padthai.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 111,
            'id_truck' => 6,
            'name' => 'Tofu Lemon Soup',
            'description' => 'Lemongrass, coriander, peas, chinese mushrooms, onions, cabbage',
            'price' => 6,
            'available' => true,
            'image' => 'lemonsoup.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 112,
            'id_truck' => 6,
            'name' => 'Coke Light',
            'description' => '',
            'price' => 2.5,
            'available' => true,
            'image' => 'coke_light.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 113,
            'id_truck' => 6,
            'name' => 'Perrier',
            'description' => '',
            'price' => 2.5,
            'available' => true,
            'image' => 'perrier.jpg'
        ]);

        //Pizzaguy
        DB::table('menu')->insert([
            'id_menu' => 114,
            'id_truck' => 7,
            'name' => 'Pizzaballs Cheese N Classic',
            'description' => 'Tomato sauce, mozarella, oregano',
            'price' => 3,
            'available' => true,
            'image' => 'pizzaballs.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 115,
            'id_truck' => 7,
            'name' => 'Pizzaballs Cheese N Ham',
            'description' => 'Tomato sauce, mozarella, ham, oregano',
            'price' => 3.4,
            'available' => true,
            'image' => 'pizzaballs.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 116,
            'id_truck' => 7,
            'name' => 'Pizzaballs Cheese N Beef',
            'description' => 'Tomato sauce, ground beef, oregano, spicy oil',
            'price' => 3.4,
            'available' => true,
            'image' => 'pizzaballs.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 117,
            'id_truck' => 7,
            'name' => 'Piadina Jack White',
            'description' => 'Mozarella, oregano, spicy oil',
            'price' => 8.4,
            'available' => true,
            'image' => 'pizza.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 118,
            'id_truck' => 7,
            'name' => 'Piadina Jack Black',
            'description' => 'Mozarella, olives, garlic oil',
            'price' => 9.2,
            'available' => true,
            'image' => 'pizza1.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 119,
            'id_truck' => 7,
            'name' => 'Piadina Jack Red',
            'description' => 'Mozarella, pepperoni, spicy oil',
            'price' => 10.6,
            'available' => true,
            'image' => 'pizza2.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 120,
            'id_truck' => 7,
            'name' => 'Pizza Mick Jagger',
            'description' => 'Mozarella, mushrooms, ham, oregano',
            'price' => 12,
            'available' => true,
            'image' => 'pizza3.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 121,
            'id_truck' => 7,
            'name' => 'Pizza Madonna',
            'description' => 'Mozarella, oregano, spicy oil',
            'price' => 9.4,
            'available' => true,
            'image' => 'pizza4.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 122,
            'id_truck' => 7,
            'name' => 'Pizza Hill-Billy',
            'description' => 'Mozarella, pepperoni, oregano',
            'price' => 11.5,
            'available' => true,
            'image' => 'pizza5.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 123,
            'id_truck' => 7,
            'name' => 'Pizza Simple Man',
            'description' => 'Mozarella, ham, oregano',
            'price' => 11.4,
            'available' => true,
            'image' => 'pizza6.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 124,
            'id_truck' => 7,
            'name' => 'Pizza Jimmy Hendrix',
            'description' => 'Mozarella, mushrooms, oregano',
            'price' => 10.1,
            'available' => true,
            'image' => 'pizza7.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 125,
            'id_truck' => 7,
            'name' => 'Pizza Peggy Sue',
            'description' => 'Mozarella, corn, red bell pepper, olives, mushrooms',
            'price' => 11.9,
            'available' => true,
            'image' => 'pizza8.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 126,
            'id_truck' => 7,
            'name' => 'Pizza Slash',
            'description' => 'Mozarella, gouda, emmenthaler, gorgonzola, oregano',
            'price' => 13.9,
            'available' => true,
            'image' => 'pizza9.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 127,
            'id_truck' => 7,
            'name' => 'Pizza Elvis Presley',
            'description' => 'Mozarella, ham, ground beef, pepperoni, onions, BBQ sauce',
            'price' => 15.3,
            'available' => true,
            'image' => 'pizza10.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 128,
            'id_truck' => 7,
            'name' => 'Pizza Summer (special)',
            'description' => 'Warm bread, cold toppings! Mozarella, cherry tomatoes, olives, roquette',
            'price' => 13.5,
            'available' => true,
            'image' => 'pizza.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 129,
            'id_truck' => 7,
            'name' => 'Coke',
            'description' => '',
            'price' => 2.5,
            'available' => true,
            'image' => 'coke.jpg'
        ]);

        DB::table('menu')->insert([
            'id_menu' => 130,
            'id_truck' => 7,
            'name' => 'Perrier',
            'description' => '',
            'price' => 2.5,
            'available' => true,
            'image' => 'perrier.jpg'
        ]);
    }
}
