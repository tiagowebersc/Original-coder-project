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
        $this->call(ScheduleTableSeeder::class);
        $this->call(Food_categoryTableSeeder::class);
        $this->call(Truck_food_categoryTableSeeder::class);
        $this->call(Food_characteristicTableSeeder::class);
        $this->call(MenuTableSeeder::class);
        $this->call(Menu_food_characteristicTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(Order_itemTableSeeder::class);
        $this->call(AboutTableSeeder::class);
    }
}
