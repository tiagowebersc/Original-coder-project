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
            'name' => 'Mexican',
            'image' => 'mexican.png'
        ]);
        DB::table('food_category')->insert([
            'id_food_category' => 2,
            'name' => 'Chinese',
            'image' => 'chinese.png'
        ]);
    }
}
