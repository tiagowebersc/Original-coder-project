<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            'id_about' => 1,
            'telephone' => '666 555 444',
            'address' => '15 Rue Evrard Ketten 1856 Luxembourg City',
            'email_comment' => 'comment@snackhound.lu',
            'email_contact' => 'contact@snackhound.lu',
            'facebook_link' => 'http://www.facebook.com',
            'instagram_link' => 'http://www.instagram.com',
            'twitter_link' => 'http://www.twitter.com'

        ]);
    }
}
