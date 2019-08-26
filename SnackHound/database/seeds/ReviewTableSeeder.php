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
            'id_truck' => 12,
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
            'id_truck' => 14,
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
            'id_truck' => 10,
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
            'id_truck' => 5,
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

        DB::table('review')->insert([
            'id_truck' => 15,
            'id_user' => 8,
            'rate' => 5,
            'created_at'=>"2018-08-18 18:42:13",
            'comment' => 'Delicious Ribs'
        ]);

        DB::table('review')->insert([
            'id_truck' => 5,
            'id_user' => 10,
            'rate' => 3,
            'created_at'=>"2019-12-20 12:00:32",
            'comment' => 'The fish was tasty but a little bit dry'
        ]);
        DB::table('review')->insert([
            'id_truck' => 6,
            'id_user' => 15,
            'rate' => 1,
            'created_at'=>"2019-07-05 15:02:52",
            'comment' => 'They forgot our order and told us to order a pizza, shameful!'
        ]);
        DB::table('review')->insert([
            'id_truck' => 7,
            'id_user' => 15,
            'rate' => 5,
            'created_at'=>"2019-07-01 15:30:55",
            'comment' => 'After being denied in other place, this pizza was out of heaven!'
        ]);
        DB::table('review')->insert([
            'id_truck' => 8,
            'id_user' => 6,
            'rate' => 4,
            'created_at'=>"2019-01-15 10:45:15",
            'comment' => 'It was good ;)'
        ]);
        DB::table('review')->insert([
            'id_truck' => 9,
            'id_user' => 9,
            'rate' => 3,
            'created_at'=>"2019-05-28 12:23:55",
            'comment' => 'Et kéint besser, deier an dréchen sinn'
        ]);
        DB::table('review')->insert([
            'id_truck' => 10,
            'id_user' => 13,
            'rate' => 5,
            'created_at'=>"2019-07-21 13:13:15",
            'comment' => 'BEST BURGUER IN MY WHOLE LIFE'
        ]);
        DB::table('review')->insert([
            'id_truck' => 11,
            'id_user' => 2,
            'rate' => 2,
            'created_at'=>"2019-08-18 11:43:00",
            'comment' => 'Ewww.....'
        ]);
        DB::table('review')->insert([
            'id_truck' => 12,
            'id_user' => 4,
            'rate' => 5,
            'created_at'=>"2019-02-28 18:23:55",
            'comment' => 'Maria was so nice, the meal was 4/5, costumer service 5/5.'
        ]);
        DB::table('review')->insert([
            'id_truck' => 13,
            'id_user' => 5,
            'rate' => 4,
            'created_at'=>"2019-07-07 13:23:55",
            'comment' => 'Not the first time here, cheap and good.'
        ]);
        DB::table('review')->insert([
            'id_truck' => 14,
            'id_user' => 6,
            'rate' => 4,
            'created_at'=>"2019-01-19 14:13:25",
            'comment' => 'Good good gutten!'
        ]);
        DB::table('review')->insert([
            'id_truck' => 15,
            'id_user' => 14,
            'rate' => 5,
            'created_at'=>"2019-01-10 11:48:25",
            'comment' => 'Spicy chicken wings and the true beer!!'
        ]);
    }
}
