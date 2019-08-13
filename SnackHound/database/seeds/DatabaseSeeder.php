<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(TruckTableSeeder::class);
        $this->call(FavoriteTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
    }
}
