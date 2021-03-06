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
        $this->call(UsersTableSeeder::class);
        $this->call(SlideTableSeeder::class);
        $this->call(ProductTypeTableSeeder::class);
        $this->call(ProductTableSeeder::class);
    }
}
