<?php

use Illuminate\Database\Seeder;

class ShopOrderPositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\ShopOrderPosition::class, 30)->create()->make();
    }
}
