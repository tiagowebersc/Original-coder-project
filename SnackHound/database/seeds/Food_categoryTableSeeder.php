<?php

use Illuminate\Database\Seeder;

class Food_categoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('food_category')->insert([
            'id_food_category' => 1,
            'name' => 'Asian',
            'image' => 'icons8-chinese-fried-rice (2).svg',
            'image_hover' => 'icons8-chinese-fried-rice (1).svg'
        ]);
        DB::table('food_category')->insert([
            'id_food_category' => 2,
            'name' => 'Bakery|Desserts',
            'image' => 'icons8-cake.svg',
            'image_hover' => 'icons8-cake (2).svg'
        ]);
        DB::table('food_category')->insert([
            'id_food_category' => 3,
            'name' => 'Barbecue',
            'image' => 'icons8-grill (1).svg',
            'image_hover' => 'icons8-grill.svg'
        ]);
        DB::table('food_category')->insert([
            'id_food_category' => 4,
            'name' => 'Burgers',
            'image' => 'icons8-cheeseburger (1).svg',
            'image_hover' => 'icons8-cheeseburger.svg'
        ]);
        DB::table('food_category')->insert([
            'id_food_category' => 5,
            'name' => 'Caribbean',
            'image' => 'icons8-coconut-cocktail.svg',
            'image_hover' => 'icons8-coconut-cocktail (1).svg'
        ]);
        DB::table('food_category')->insert([
            'id_food_category' => 6,
            'name' => 'Coffee|Beverages',
            'image' => 'icons8-coffee-to-go (1).svg',
            'image_hover' => 'icons8-coffee-to-go.svg'
        ]);
        DB::table('food_category')->insert([
            'id_food_category' => 7,
            'name' => 'French',
            'image' => 'icons8-baguette (1).svg',
            'image_hover' => 'icons8-baguette.svg'
        ]);
        DB::table('food_category')->insert([
            'id_food_category' => 8,
            'name' => 'Fries',
            'image' => 'icons8-french-fries (2).svg',
            'image_hover' => 'icons8-french-fries (1).svg'
        ]);
        DB::table('food_category')->insert([
            'id_food_category' => 9,
            'name' => 'Mexican',
            'image' => 'icons8-taco (2).svg',
            'image_hover' => 'icons8-taco.svg'
        ]);
        DB::table('food_category')->insert([
            'id_food_category' => 10,
            'name' => 'Pizza|Pasta',
            'image' => 'icons8-salami-pizza (1).svg',
            'image_hover' => 'icons8-salami-pizza.svg'
        ]);
        DB::table('food_category')->insert([
            'id_food_category' => 11,
            'name' => 'Seafood',
            'image' => 'icons8-crab (2).svg',
            'image_hover' => 'icons8-crab (1).svg'
        ]);
    }
}
