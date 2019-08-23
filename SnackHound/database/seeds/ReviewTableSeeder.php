<?php

use Illuminate\Database\Seeder;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review')->insert([
            'id_truck' => 1,
            'id_user' => 4,
            'rate' => 4,
            'comment' => 'The best food in town'
        ]);
        DB::table('review')->insert([
            'id_truck' => 1,
            'id_user' => 4,
            'rate' => 4,
            'comment' => 'The best food in town'
        ]);
    }
}
