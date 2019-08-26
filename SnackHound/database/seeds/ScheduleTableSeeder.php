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
            'address' => '',
            'latitude' => 49.504878,
            'longitude' => 5.948136,
            'city' => 'Esch-sur-Alzette',
            'weekday' => 0,
            'start_time' => '09:00',
            'end_time' => '13:00'
        ]);

        DB::table('schedule')->insert([
            'id_truck' => 1,
            'address' => '',
            'latitude' => 49.494345,
            'longitude' => 5.985247,
            'city' => 'Esch-sur-Alzette',
            'weekday' => 1,
            'start_time' => '16:00',
            'end_time' => '24:00'
        ]);

        DB::table('schedule')->insert([
            'id_truck' => 1,
            'address' => '',
            'latitude' => 49.600256,
            'longitude' => 6.133419,
            'city' => 'Luxembourg',
            'weekday' => 3,
            'start_time' => '17:00',
            'end_time' => '24:00'
        ]);

        DB::table('schedule')->insert([
            'id_truck' => 2,
            'address' => '',
            'latitude' => 49.746576,
            'longitude' => 6.102230,
            'city' => 'Mersch',
            'weekday' => 2,
            'start_time' => '11:00',
            'end_time' => '17:00'
        ]);

        DB::table('schedule')->insert([
            'id_truck' => 2,
            'address' => '',
            'latitude' => 49.847450,
            'longitude' => 6.099213,
            'city' => 'Ettelbruck',
            'weekday' => 5,
            'start_time' => '13:00',
            'end_time' => '21:00'
        ]);

        DB::table('schedule')->insert([
            'id_truck' => 3,
            'address' => '',
            'latitude' => 49.746576,
            'longitude' => 6.102230,
            'city' => 'Mersch',
            'weekday' => 0,
            'start_time' => '11:00',
            'end_time' => '17:00'
        ]);

        DB::table('schedule')->insert([
            'id_truck' => 3,
            'address' => '',
            'latitude' => 49.847450,
            'longitude' => 6.099213,
            'city' => 'Ettelbruck',
            'weekday' => 1,
            'start_time' => '13:00',
            'end_time' => '21:00'
        ]);
        DB::table('schedule')->insert([
            'id_truck' => 4,
            'address' => '88 Grand-Rue, Vianden',
            'latitude' => 49.933311,
            'longitude' => 6.203290,
            'city' => 'Vianden',
            'weekday' => 4,
            'start_time' => '17:00',
            'end_time' => '23:00'
        ]);

        DB::table('schedule')->insert([
            'id_truck' => 5,
            'address' => 'A 13, 3588 Dudelange, Luxembourg',
            'latitude' => 49.500938,
            'longitude' => 6.073622,
            'city' => 'Dudelange',
            'weekday' => 1,
            'start_time' => '12:00',
            'end_time' => '18:00'
        ]);
        DB::table('schedule')->insert([
            'id_truck' => 5,
            'address' => '13 Rue d\'Emerange, 5692 Schengen, Luxembourg',
            'latitude' => 49.503609,
            'longitude' => 6.314502,
            'city' => 'Schengen',
            'weekday' => 1,
            'start_time' => '09:00',
            'end_time' => '15:30'
        ]);
        DB::table('schedule')->insert([
            'id_truck' => 6,
            'address' => 'Rue de la Chapelle, 4967 Käerjeng, Luxembourg',
            'latitude' => 49.596271,
            'longitude' => 5.888782,
            'city' => 'Käerjeng',
            'weekday' => 6,
            'start_time' => '17:00',
            'end_time' => '23:00'
        ]);
        DB::table('schedule')->insert([
            'id_truck' => 7,
            'address' => 'CR 108, 8450 Steinfort, Luxembourg',
            'latitude' => 49.674886,
            'longitude' => 5.898117,
            'city' => 'Steinfort',
            'weekday' => 2,
            'start_time' => '14:00',
            'end_time' => '23:00'
        ]);
        DB::table('schedule')->insert([
            'id_truck' => 8,
            'address' => 'Rue de la Forêt, 5370 Schuttrange, Luxembourg',
            'latitude' => 49.621536,
            'longitude' =>  6.282638,
            'city' => 'Schuttrange',
            'weekday' => 0,
            'start_time' => '12:00',
            'end_time' => '17:00'
        ]);
        DB::table('schedule')->insert([
            'id_truck' => 9,
            'address' => '6832 Berg, Luxembourg',
            'latitude' => 49.69621,
            'longitude' => 6.34581,
            'city' => 'Luxembourg',
            'weekday' => 5,
            'start_time' => '19:00',
            'end_time' => '24:00'
        ]);
        DB::table('schedule')->insert([
            'id_truck' => 10,
            'address' => 'A Laichent, 8615 Useldange, Luxembourg',
            'latitude' => 49.777865,
            'longitude' => 5.950302,
            'city' => 'Useldange',
            'weekday' => 2,
            'start_time' => '10:00',
            'end_time' => '17:00'
        ]);

        DB::table('schedule')->insert([
            'id_truck' => 11,
            'address' => 'Rue de Müllerthal, 6245 Consdorf, Luxembourg',
            'latitude' => 49.783186,
            'longitude' => 6.318344,
            'city' => 'Consdorf',
            'weekday' => 4,
            'start_time' => '10:00',
            'end_time' => '23:00'
        ]);
        DB::table('schedule')->insert([
            'id_truck' => 12,
            'address' => 'Camping KAUL, 60 Campingstrooss, 9550 Wiltz, Luxembourg',
            'latitude' => 49.974336,
            'longitude' => 5.933822,
            'city' => 'Wiltz',
            'weekday' => 4,
            'start_time' => '15:00',
            'end_time' => '19:00'
        ]);

        DB::table('schedule')->insert([
            'id_truck' => 13,
            'address' => 'Schachbrettgarten, Hauptstrooss, 9968 Clervaux, Luxembourg',
            'latitude' => 50.094302,
            'longitude' => 6.079391,
            'city' => 'Clervaux',
            'weekday' => 4,
            'start_time' => '17:00',
            'end_time' => '23:00'
        ]);


        DB::table('schedule')->insert([
            'id_truck' => 14,
            'address' => 'Op Frounerwaasser, 9632 Kiischpelt, Luxembourg',
            'latitude' => 49.965503,
            'longitude' => 5.991501,
            'city' => 'Kiischpelt',
            'weekday' => 0,
            'start_time' => '08:00',
            'end_time' => '15:30'
        ]);

        DB::table('schedule')->insert([
            'id_truck' => 15,
            'address' => 'Rue de la Gare, 5540 Remich, Luxembourg',
            'latitude' => 49.545407,
            'longitude' => 6.365591,
            'city' => 'Remich',
            'weekday' => 6,
            'start_time' => '17:00',
            'end_time' => '23:00'
        ]);
    }
}
