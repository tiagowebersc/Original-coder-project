<?php

use Illuminate\Database\Seeder;

class Order_itemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_item')->insert([
            'id_order' => 1,
            'id_menu' => 1,
            'price' => 2.50,
            'quantity' => 1
        ]);
        DB::table('order_item')->insert([
            'id_order' => 1,
            'id_menu' => 3,
            'price' => 3.50,
            'quantity' => 2
        ]);
        DB::table('order_item')->insert([
            'id_order' => 2,
            'id_menu' => 1,
            'price' => 2.50,
            'quantity' => 1
        ]);
        DB::table('order_item')->insert([
            'id_order' => 3,
            'id_menu' => 3,
            'price' => 3.50,
            'quantity' => 2
        ]);
        DB::table('order_item')->insert([
            'id_order' => 4,
            'id_menu' => 2,
            'price' => 6,
            'quantity' => 2
        ]);
        DB::table('order_item')->insert([
            'id_order' => 4,
            'id_menu' => 3,
            'price' => 3.50,
            'quantity' => 2
        ]);
        DB::table('order_item')->insert([
            'id_order' => 5,
            'id_menu' => 2,
            'price' => 6,
            'quantity' => 5
        ]);
    }
}
