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

       // Here we have the review made by user stored in the database and showed on the page

       // Las Maracas
        DB::table('review')->insert([
            'id_truck' => 1,
            'id_user' => 4,
            'rate' => 4,
            'created_at'=>"2019-07-14 15:53:55",
            'comment' => 'The best food in town'
        ]);

        DB::table('review')->insert([
            'id_truck' => 1,
            'id_user' => 3,
            'rate' => 2,
            'created_at'=>"2019-07-08 13:45:05",
            'comment' => 'The food was cold... :('
        ]);

        DB::table('review')->insert([
            'id_truck' => 1,
            'id_user' => 2,
            'rate' => 5,
            'created_at'=>"2019-07-03 18:23:32",
            'comment' => 'I LOOOOOVE mexican food !'
        ]);

        DB::table('review')->insert([
            'id_truck' => 1,
            'id_user' => 1,
            'rate' => 5,
            'created_at'=>"2019-05-13 18:44:02",
            'comment' => 'I suggest the chicken its so tasty and the Guacamole is Homemade'
        ]);

        DB::table('review')->insert([
            'id_truck' => 1,
            'id_user' => 5,
            'rate' => 4,
            'created_at'=>"2019-04-13 18:23:55",
            'comment' => 'The food truck made a mistake on my order but they offer me some discount'
        ]);

        DB::table('review')->insert([
            'id_truck' => 1,
            'id_user' => 6,
            'rate' => 5,
            'created_at'=>"2019-03-28 10:32:55",
            'comment' => 'Lovely staff and tasty food'
        ]);

        //The Moose is Loose
        DB::table('review')->insert([
            'id_truck' => 2,
            'id_user' => 4,
            'rate' => 5,
            'created_at'=>"2019-10-10 15:55:31",
            'comment' => 'I drool before i eat there'
        ]);

        DB::table('review')->insert([
            'id_truck' => 2,
            'id_user' => 3,
            'rate' => 5,
            'created_at'=>"2019-10-09 18:23:55",
            'comment' => 'Fresh ingredients fresh idea thank you for the lovely pastry'
        ]);

        DB::table('review')->insert([
            'id_truck' => 2,
            'id_user' => 2,
            'rate' => 4,
            'created_at'=>"2019-02-28 18:23:55",
            'comment' => 'really tasty but not a lot of choice'
        ]);

        DB::table('review')->insert([
            'id_truck' => 2,
            'id_user' => 1,
            'rate' => 5,
            'created_at'=>"2019-02-28 18:23:55",
            'comment' => 'hommemade and lovely staff'
        ]);

        DB::table('review')->insert([
            'id_truck' => 2,
            'id_user' => 5,
            'rate' => 4,
            'created_at'=>"2019-02-28 18:23:55",
            'comment' => 'The food truck made a mistake on my order but they offer me some discount'
        ]);

        DB::table('review')->insert([
            'id_truck' => 2,
            'id_user' => 6,
            'rate' => 5,
            'created_at'=>"2019-02-28 18:23:55",
            'comment' => 'smell good taste good I LOVE THE CHEESECAKE'
        ]);

        //Arancino
        DB::table('review')->insert([
            'id_truck' => 3,
            'id_user' => 3,
            'rate' => 1,
            'created_at'=>"2019-02-28 18:23:55",
            'comment' => 'It was cold and it look like it was made 2 days ago'
        ]);

        DB::table('review')->insert([
            'id_truck' => 3,
            'id_user' => 3,
            'rate' => 1,
            'created_at'=>"2019-02-28 18:23:55",
            'comment' => 'the staff forgot my order...'
        ]);

        DB::table('review')->insert([
            'id_truck' => 3,
            'id_user' => 2,
            'rate' => 3,
            'created_at'=>"2019-02-28 18:23:55",
            'comment' => 'some good recipe but the staff look so lazy'
        ]);

        DB::table('review')->insert([
            'id_truck' => 3,
            'id_user' => 1,
            'rate' => 5,
            'created_at'=>"2019-02-28 18:23:55",
            'comment' => 'the Tiramisu will BLOW your mind'
        ]);

        DB::table('review')->insert([
            'id_truck' => 3,
            'id_user' => 5,
            'rate' => 3,
            'created_at'=>"2019-02-28 18:23:55",
            'comment' => 'Ive tasted better pizza...'
        ]);

        DB::table('review')->insert([
            'id_truck' => 3,
            'id_user' => 6,
            'rate' => 5,
            'created_at'=>"2019-02-28 18:23:55",
            'comment' => 'I confirm for the Chessecake AWESOME !'
        ]);

        //Burger & Co.
        DB::table('review')->insert([
            'id_truck' => 4,
            'id_user' => 1,
            'rate' => 1,
            'created_at'=>"2019-02-28 18:23:55",
            'comment' => 'They forgot my order and they dont even propose me to make another order'
        ]);

        DB::table('review')->insert([
            'id_truck' => 4,
            'id_user' => 2,
            'rate' => 4,
            'created_at'=>"2019-02-28 18:23:55",
            'comment' => 'We have to wait a lot but the Fish burger is so tasty'
        ]);

        DB::table('review')->insert([
            'id_truck' => 4,
            'id_user' => 3,
            'rate' => 4,
            'created_at'=>"2019-02-28 18:23:55",
            'comment' => 'you have to wait for your turn but the fries with the special sauce is so GOOD'
        ]);

        DB::table('review')->insert([
            'id_truck' => 4,
            'id_user' => 4,
            'rate' => 3,
            'created_at'=>"2019-02-28 18:23:55",
            'comment' => 'it seems they dont have a fridge that has enough place to put a lot of drinks ...'
        ]);

        DB::table('review')->insert([
            'id_truck' => 4,
            'id_user' => 5,
            'rate' => 4,
            'created_at'=>"2019-02-28 18:23:55",
            'comment' => 'chicken nugget and kebab is not homemade'
        ]);

        DB::table('review')->insert([
            'id_truck' => 4,
            'id_user' => 6,
            'rate' => 5,
            'created_at'=>"2019-02-28 18:23:55",
            'comment' => 'Savoyard for the cheese amator'
        ]);
    }
}
