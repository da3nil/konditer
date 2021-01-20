<?php

use Illuminate\Database\Seeder;

class ShopOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\ShopOrder::class, 3);
    }
}
