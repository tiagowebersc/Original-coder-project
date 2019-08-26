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
            'user_status' => 0,
            'email' => 'admin@snackhound.lu',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry'
        ]);
        DB::table('user')->insert([
            'id_user' => 2,
            'first_name' => 'Mario',
            'last_name' => 'Parmegiana',
            'user_type' => 1,
            'user_status' => 0,
            'email' => 'marios@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry'
        ]);
        DB::table('user')->insert([
            'id_user' => 3,
            'first_name' => 'Maribella',
            'last_name' => 'Schwarzenegger',
            'user_type' => 1,
            'user_status' => 0,
            'email' => 'maribella@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry'
        ]);
        DB::table('user')->insert([
            'id_user' => 4,
            'first_name' => 'John',
            'last_name' => 'Doe',
            'user_type' => 0,
            'user_status' => 0,
            'email' => 'john@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry'
        ]);
        DB::table('user')->insert([
            'id_user' => 5,
            'first_name' => 'John',
            'last_name' => 'Raviolli',
            'user_type' => 1,
            'user_status' => 0,
            'email' => 'johnr@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry'
        ]);

        DB::table('user')->insert([
            'id_user' => 6,
            'first_name' => 'John',
            'last_name' => 'Katchup',
            'user_type' => 1,
            'user_status' => 0,
            'email' => 'johnk@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry'
        ]);

        DB::table('user')->insert([
            'id_user' => 7,
            'first_name' => 'Michael',
            'last_name' => 'Doit',
            'user_type' => 1,
            'user_status' => 0,
            'email' => 'doit@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry'
        ]);

        DB::table('user')->insert([
            'id_user' => 8,
            'first_name' => 'James',
            'last_name' => 'Dont',
            'user_type' => 1,
            'user_status' => 0,
            'email' => 'jdont@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry'
        ]);

        DB::table('user')->insert([
            'id_user' => 9,
            'first_name' => 'Laurel',
            'last_name' => 'Duff',
            'user_type' => 1,
            'user_status' => 0,
            'email' => 'lauduff@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry'
        ]);

        DB::table('user')->insert([
            'id_user' => 10,
            'first_name' => 'Mario',
            'last_name' => 'Light',
            'user_type' => 1,
            'user_status' => 0,
            'email' => 'marl@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry'
        ]);

        DB::table('user')->insert([
            'id_user' => 11,
            'first_name' => 'Joe',
            'last_name' => 'Guitore',
            'user_type' => 1,
            'user_status' => 0,
            'email' => 'joegui@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry'
        ]);

        DB::table('user')->insert([
            'id_user' => 12,
            'first_name' => 'Raul',
            'last_name' => 'Bart',
            'user_type' => 1,
            'user_status' => 0,
            'email' => 'raulbartfoodtruck@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry'
        ]);

        DB::table('user')->insert([
            'id_user' => 13,
            'first_name' => 'Alkar',
            'last_name' => 'Mayo',
            'user_type' => 1,
            'user_status' => 0,
            'email' => 'abdutiger@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry'
        ]);


        DB::table('user')->insert([
            'id_user' => 14,
            'first_name' => 'Tiaguinho',
            'last_name' => 'Picanha',
            'user_type' => 1,
            'user_status' => 0,
            'email' => 'tpic@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry'
        ]);

        DB::table('user')->insert([
            'id_user' => 15,
            'first_name' => 'Diedon',
            'last_name' => 'Seriouslee',
            'user_type' => 1,
            'user_status' => 0,
            'email' => 'didilee@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry'
        ]);

        DB::table('user')->insert([
            'id_user' => 16,
            'first_name' => 'Hugo',
            'last_name' => 'Maison',
            'user_type' => 1,
            'user_status' => 0,
            'email' => 'humaison10101@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry'
        ]);

        DB::table('user')->insert([
            'id_user' => 17,
            'first_name' => 'Bobby',
            'last_name' => 'Mrica',
            'user_type' => 1,
            'user_status' => 0,
            'email' => 'bobydul12@gmail.com',
            'hash_password' => '$2y$10$X3SNX4rXgBQJBxDTtUWL9.uFOuzJm.eceNh/BVfHujZL71iQvKSry'
        ]);
    }
}
