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
            'id_user' => 1,
            'first_name' => 'Admin ',
            'last_name' => 'Admin',
            'user_type' => 2,
            'user_type' => 0,
            'email' => 'admin@snackhound.lu',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry'
        ]);
        DB::table('user')->insert([
            'id_user' => 2,
            'first_name' => 'Mario',
            'last_name' => 'Parmegiana',
            'user_type' => 1,
            'user_type' => 0,
            'email' => 'marios@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry',
            'blocked' => false
        ]);
        DB::table('user')->insert([
            'id_user' => 3,
            'first_name' => 'Maribella',
            'last_name' => 'Schwarzenegger',
            'user_type' => 1,
            'user_type' => 0,
            'email' => 'maribella@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry',
            'blocked' => true
        ]);
        DB::table('user')->insert([
            'id_user' => 4,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'user_type' => 0,
            'user_type' => 0,
            'email' => 'john@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry',
            'blocked' => false
        ]);
    }
}
