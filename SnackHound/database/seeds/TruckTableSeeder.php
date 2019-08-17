<?php

use Illuminate\Database\Seeder;

class TruckTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('truck')->insert([
            'id_truck' => 1,
            'id_user' => 2,
            'name' => 'La maracas',
            'image' => 'las-maracas.jpg',
            'price_range' => 3,
            'telephone' => '666 111 222',
            'online_order' => true,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod hic facere ipsa fuga perferendis sunt pariatur perspiciatis tempora. Amet quos vero est distinctio praesentium veritatis blanditiis aut voluptatibus ducimus voluptate.',
            'website' => 'http://www.lamaracas.lu',
            'facebook_link' => 'http://www.facebook.com',
            'instagram_link' => 'http://www.instagram.com',
            'twitter_link' => 'http://www.twitter.com'
        ]);

        DB::table('truck')->insert([
            'id_truck' => 2,
            'id_user' => 3,
            'name' => 'The moose is lose',
            'image' => 'moose_is_loose.jpg',
            'price_range' => 5,
            'telephone' => '555 333 777',
            'online_order' => false,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod hic facere ipsa fuga perferendis sunt pariatur perspiciatis tempora. Amet quos vero est distinctio praesentium veritatis blanditiis aut voluptatibus ducimus voluptate.',
            'website' => 'http://www.themooseislose.lu',
            'facebook_link' => 'http://www.facebook.com',
            'instagram_link' => 'http://www.instagram.com',
            'twitter_link' => 'http://www.twitter.com'
        ]);
    }
}
