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
            'name' => 'Las Maracas',
            'image' => 'las-maracas.jpg',
            'price_range' => 3,
            'telephone' => '666 111 222',
            'online_order' => true,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod hic facere ipsa fuga perferendis sunt pariatur perspiciatis tempora. Amet quos vero est distinctio praesentium veritatis blanditiis aut voluptatibus ducimus voluptate.',
            'website' => 'http://www.lasmaracas.lu',
            'facebook_link' => 'http://www.facebook.com',
            'instagram_link' => 'http://www.instagram.com',
            'twitter_link' => 'http://www.twitter.com'
        ]);

        DB::table('truck')->insert([
            'id_truck' => 2,
            'id_user' => 3,
            'name' => 'The Moose',
            'image' => 'moose_is_loose.jpg',
            'price_range' => 5,
            'telephone' => '555 333 777',
            'online_order' => false,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod hic facere ipsa fuga perferendis sunt pariatur perspiciatis tempora. Amet quos vero est distinctio praesentium veritatis blanditiis aut voluptatibus ducimus voluptate.',
            'website' => 'http://www.themooseisloose.lu',
            'facebook_link' => 'http://www.facebook.com',
            'instagram_link' => 'http://www.instagram.com',
            'twitter_link' => 'http://www.twitter.com'
        ]);

        DB::table('truck')->insert([
            'id_truck' => 3,
            'id_user' => 5,
            'name' => 'Arancino',
            'image' => 'arancino.jpg',
            'price_range' => 3,
            'telephone' => '691 997 989',
            'online_order' => false,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod hic facere ipsa fuga perferendis sunt pariatur perspiciatis tempora. Amet quos vero est distinctio praesentium veritatis blanditiis aut voluptatibus ducimus voluptate.',
            'website' => 'http://www.arancino.lu/',
            'facebook_link' => 'https://fr-fr.facebook.com/arancino.lu/',
            'instagram_link' => 'https://www.instagram.com/arancino.lu/',
            'twitter_link' => 'http://www.twitter.com'
        ]);

        DB::table('truck')->insert([
            'id_truck' => 4,
            'id_user' => 6,
            'name' => 'Burger & Co.',
            'image' => 'burger_and_co.jpg',
            'price_range' => 2,
            'telephone' => '691 997 994',
            'online_order' => false,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod hic facere ipsa fuga perferendis sunt pariatur perspiciatis tempora. Amet quos vero est distinctio praesentium veritatis blanditiis aut voluptatibus ducimus voluptate.',
            'website' => 'http://www.burgerandco.lu/',
            'facebook_link' => 'https://fr-fr.facebook.com/BurgerandCo.lu/',
            'instagram_link' => 'https://www.instagram.com/',
            'twitter_link' => 'http://www.twitter.com'
        ]);

        // ! HEREEEEE

        DB::table('truck')->insert([
            'id_truck' => 5,
            'id_user' => 7,
            'name' => 'Go Fish',
            'image' => 'go_fish.jpg',
            'price_range' => 3,
            'telephone' => '691 997 982',
            'online_order' => false,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod hic facere ipsa fuga perferendis sunt pariatur perspiciatis tempora. Amet quos vero est distinctio praesentium veritatis blanditiis aut voluptatibus ducimus voluptate.',
            'website' => 'http://www.gofish.lu/',
            'facebook_link' => 'https://fr-fr.facebook.com/Fishgo.lu/',
            'instagram_link' => 'https://www.instagram.com/',
            'twitter_link' => 'http://www.twitter.com'
        ]);

        DB::table('truck')->insert([
            'id_truck' => 6,
            'id_user' => 8,
            'name' => 'Wok Me Up',
            'image' => 'wok-me-up.jpg',
            'price_range' => 2,
            'telephone' => '691 997 984',
            'online_order' => false,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod hic facere ipsa fuga perferendis sunt pariatur perspiciatis tempora. Amet quos vero est distinctio praesentium veritatis blanditiis aut voluptatibus ducimus voluptate.',
            'website' => 'http://www.wokmeup.lu/',
            'facebook_link' => 'https://fr-fr.facebook.com/wokmeup.lu/',
            'instagram_link' => 'https://www.instagram.com/',
            'twitter_link' => 'http://www.twitter.com'
        ]);

        DB::table('truck')->insert([
            'id_truck' => 7,
            'id_user' => 9,
            'name' => 'Pizzaguy',
            'image' => 'pizzaguy.jpg',
            'price_range' => 2,
            'telephone' => '691 997 986',
            'online_order' => false,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod hic facere ipsa fuga perferendis sunt pariatur perspiciatis tempora. Amet quos vero est distinctio praesentium veritatis blanditiis aut voluptatibus ducimus voluptate.',
            'website' => 'http://www.pizzaguy.lu/',
            'facebook_link' => 'https://fr-fr.facebook.com/pizzaguy.lu/',
            'instagram_link' => 'https://www.instagram.com/',
            'twitter_link' => 'http://www.twitter.com'
        ]);

        DB::table('truck')->insert([
            'id_truck' => 8,
            'id_user' => 10,
            'name' => 'Mario Delights',
            'image' => 'marios_delights.jpg',
            'price_range' => 3,
            'telephone' => '691 997 987',
            'online_order' => false,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod hic facere ipsa fuga perferendis sunt pariatur perspiciatis tempora. Amet quos vero est distinctio praesentium veritatis blanditiis aut voluptatibus ducimus voluptate.',
            'website' => 'http://www.mariosdelights.lu/',
            'facebook_link' => 'https://fr-fr.facebook.com/mariosdelights.lu/',
            'instagram_link' => 'https://www.instagram.com/',
            'twitter_link' => 'http://www.twitter.com'
        ]);

        DB::table('truck')->insert([
            'id_truck' => 9,
            'id_user' => 11,
            'name' => 'Joo',
            'image' => 'joo.jpg',
            'price_range' => 3,
            'telephone' => '691 997 988',
            'online_order' => false,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod hic facere ipsa fuga perferendis sunt pariatur perspiciatis tempora. Amet quos vero est distinctio praesentium veritatis blanditiis aut voluptatibus ducimus voluptate.',
            'website' => 'http://www.joo.lu/',
            'facebook_link' => 'https://fr-fr.facebook.com/joo.lu/',
            'instagram_link' => 'https://www.instagram.com/',
            'twitter_link' => 'http://www.twitter.com'
        ]);

        DB::table('truck')->insert([
            'id_truck' => 10,
            'id_user' => 12,
            'name' => 'Food Riders',
            'image' => 'Food-Rider.jpg',
            'price_range' => 3,
            'telephone' => '691 997 990',
            'online_order' => false,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod hic facere ipsa fuga perferendis sunt pariatur perspiciatis tempora. Amet quos vero est distinctio praesentium veritatis blanditiis aut voluptatibus ducimus voluptate.',
            'website' => 'http://www.foodriders.lu/',
            'facebook_link' => 'https://fr-fr.facebook.com/foodRiders.lu/',
            'instagram_link' => 'https://www.instagram.com/',
            'twitter_link' => 'http://www.twitter.com'
        ]);

        DB::table('truck')->insert([
            'id_truck' => 11,
            'id_user' => 13,
            'name' => 'Turbo Bao',
            'image' => 'turbo_bao.jpg',
            'price_range' => 1,
            'telephone' => '691 997 998',
            'online_order' => false,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod hic facere ipsa fuga perferendis sunt pariatur perspiciatis tempora. Amet quos vero est distinctio praesentium veritatis blanditiis aut voluptatibus ducimus voluptate.',
            'website' => 'http://www.turbobao.lu/',
            'facebook_link' => 'https://fr-fr.facebook.com/turbobao.lu/',
            'instagram_link' => 'https://www.instagram.com/',
            'twitter_link' => 'http://www.twitter.com'
        ]);

        DB::table('truck')->insert([
            'id_truck' => 12,
            'id_user' => 14,
            'name' => 'Greenmango',
            'image' => 'greenmango.jpg',
            'price_range' => 3,
            'telephone' => '691 997 991',
            'online_order' => false,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod hic facere ipsa fuga perferendis sunt pariatur perspiciatis tempora. Amet quos vero est distinctio praesentium veritatis blanditiis aut voluptatibus ducimus voluptate.',
            'website' => 'http://www.greenmango.lu/',
            'facebook_link' => 'https://fr-fr.facebook.com/greenmango.lu/',
            'instagram_link' => 'https://www.instagram.com/',
            'twitter_link' => 'http://www.twitter.com'
        ]);

        DB::table('truck')->insert([
            'id_truck' => 13,
            'id_user' => 15,
            'name' => 'The Karavan',
            'image' => 'karavan.jpg',
            'price_range' => 3,
            'telephone' => '691 997 993',
            'online_order' => false,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod hic facere ipsa fuga perferendis sunt pariatur perspiciatis tempora. Amet quos vero est distinctio praesentium veritatis blanditiis aut voluptatibus ducimus voluptate.',
            'website' => 'http://www.karavan.lu/',
            'facebook_link' => 'https://fr-fr.facebook.com/karavan.lu/',
            'instagram_link' => 'https://www.instagram.com/',
            'twitter_link' => 'http://www.twitter.com'
        ]);

        DB::table('truck')->insert([
            'id_truck' => 14,
            'id_user' => 16,
            'name' => 'FutoBuri',
            'image' => 'futo_buri.jpg',
            'price_range' => 4,
            'telephone' => '691 997 996',
            'online_order' => false,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod hic facere ipsa fuga perferendis sunt pariatur perspiciatis tempora. Amet quos vero est distinctio praesentium veritatis blanditiis aut voluptatibus ducimus voluptate.',
            'website' => 'http://www.futoburi.lu/',
            'facebook_link' => 'https://fr-fr.facebook.com/futoburi.lu/',
            'instagram_link' => 'https://www.instagram.com/',
            'twitter_link' => 'http://www.twitter.com'
        ]);

        DB::table('truck')->insert([
            'id_truck' => 15,
            'id_user' => 17,
            'name' => 'Northern BBQ',
            'image' => 'northern_bbq.jpg',
            'price_range' => 3,
            'telephone' => '691 998 000',
            'online_order' => false,
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod hic facere ipsa fuga perferendis sunt pariatur perspiciatis tempora. Amet quos vero est distinctio praesentium veritatis blanditiis aut voluptatibus ducimus voluptate.',
            'website' => 'http://www.northern.lu/',
            'facebook_link' => 'https://fr-fr.facebook.com/northern.lu/',
            'instagram_link' => 'https://www.instagram.com/',
            'twitter_link' => 'http://www.twitter.com'
        ]);
    }
}
