<?php

use Illuminate\Database\Seeder;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order')->insert([
            'id_order' => 1,
            'id_truck' => 1,
            'id_user' => 4,
            'status' => 0,
            'detail' => 'Heavily fried please',
            'created_at' => now()
        ]);
        DB::table('order')->insert([
            'id_order' => 2,
            'id_truck' => 1,
            'id_user' => 4,
            'status' => 1,
            'detail' => 'Heavily fried please',
            'created_at' => now()
        ]);
        DB::table('order')->insert([
            'id_order' => 3,
            'id_truck' => 1,
            'id_user' => 4,
            'status' => 2,
            'detail' => 'Heavily fried please',
            'created_at' => now()
        ]);
        DB::table('order')->insert([
            'id_order' => 4,
            'id_truck' => 1,
            'id_user' => 4,
            'status' => 3,
            'detail' => 'Heavily fried please',
            'created_at' => now()
        ]);
        DB::table('order')->insert([
            'id_order' => 5,
            'id_truck' => 1,
            'id_user' => 4,
            'status' => 4,
            'detail' => 'Heavily fried please',
            'created_at' => now()
        ]);
    }
}
