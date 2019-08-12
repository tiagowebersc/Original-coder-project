<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'first_name' => 'Admin ',
            'last_name' => 'Admin',
            'user_type' => 2,
            'email' => 'admin@snackhound.lu',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry',
            'blocked' => false
        ]);
        DB::table('user')->insert([
            'first_name' => 'Mario',
            'last_name' => 'Parmegiana',
            'user_type' => 1,
            'email' => 'marios@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry',
            'blocked' => false
        ]);
        DB::table('user')->insert([
            'first_name' => 'Maribella',
            'last_name' => 'Schwarzenegger',
            'user_type' => 1,
            'email' => 'maribella@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry',
            'blocked' => true
        ]);
        DB::table('user')->insert([
            'first_name' => 'John',
            'last_name' => 'Doe',
            'user_type' => 0,
            'email' => 'john@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry',
            'blocked' => false
        ]);
    }
}
