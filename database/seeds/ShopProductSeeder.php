<?php

use App\Models\ShopProduct;
use Illuminate\Database\Seeder;

class ShopProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(ShopProduct::class, 45)->create()->make();
    }
}
