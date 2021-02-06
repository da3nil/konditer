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
         $this->call(ShopOrderStatusesTableSeeder::class);
         $this->call(ShopCategorySeeder::class);
         $this->call(ShopProductSeeder::class);
         $this->call(ShopOrderSeeder::class);
         $this->call(ShopOrderPositionSeeder::class);
         $this->call(BlogPostSeeder::class);
    }
}
