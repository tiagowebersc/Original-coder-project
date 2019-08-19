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
            'latitude' => 49.504878,
            'longitude' => 5.948136,
            'weekday' => 0,
            'start_time' => '09:00',
            'end_time' => '13:00'
        ]);

        DB::table('schedule')->insert([
            'id_truck' => 1,
            'latitude' => 49.494345,
            'longitude' => 5.985247,
            'weekday' => 1,
            'start_time' => '16:00',
            'end_time' => '24:00'
        ]);

        DB::table('schedule')->insert([
            'id_truck' => 1,
            'latitude' => 49.600256,
            'longitude' => 6.133419,
            'weekday' => 3,
            'start_time' => '17:00',
            'end_time' => '24:00'
        ]);

        DB::table('schedule')->insert([
            'id_truck' => 2,
            'latitude' => 49.746576,
            'longitude' => 6.102230,
            'weekday' => 2,
            'start_time' => '11:00',
            'end_time' => '17:00'
        ]);

        DB::table('schedule')->insert([
            'id_truck' => 2,
            'latitude' => 49.847450,
            'longitude' => 6.099213,
            'weekday' => 5,
            'start_time' => '13:00',
            'end_time' => '21:00'
        ]);

        DB::table('schedule')->insert([
            'id_truck' => 3,
            'latitude' => 49.746576,
            'longitude' => 6.102230,
            'weekday' => 2,
            'start_time' => '11:00',
            'end_time' => '17:00'
        ]);

        DB::table('schedule')->insert([
            'id_truck' => 3,
            'latitude' => 49.847450,
            'longitude' => 6.099213,
            'weekday' => 5,
            'start_time' => '13:00',
            'end_time' => '21:00'
        ]);
    }
}
