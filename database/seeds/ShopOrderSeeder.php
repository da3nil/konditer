<?php

use App\Models\ShopOrder;
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
        factory(ShopOrder::class, 10)->create()->make();
    }
}
