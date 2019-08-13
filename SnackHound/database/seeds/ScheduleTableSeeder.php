<?php

use Illuminate\Database\Seeder;

class ScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedule')->insert([
            'id_truck' => 1,
            'coordinate' =>  DB::raw("(GeomFromText('POINT(49.504878 5.948136)'))"),
            'weekday' => 0,
            'start_time' => '09:00',
            'end_time' => '13:00'
        ]);
        DB::table('schedule')->insert([
            'id_truck' => 1,
            'coordinate' =>  DB::raw("(GeomFromText('POINT(49.494345 5.985247)'))"),
            'weekday' => 1,
            'start_time' => '16:00',
            'end_time' => '24:00'
        ]);
        DB::table('schedule')->insert([
            'id_truck' => 1,
            'coordinate' =>  DB::raw("(GeomFromText('POINT(49.600256 6.133419)'))"),
            'weekday' => 3,
            'start_time' => '17:00',
            'end_time' => '03:00'
        ]);
    }
}
