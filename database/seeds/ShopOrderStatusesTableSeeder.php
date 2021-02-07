<?php

use App\Models\ShopOrderStatus;
use Illuminate\Database\Seeder;

class ShopOrderStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'  => 'В ожидании',
                'class' => 'warning'
            ],
            [
                'name'  => 'Обработка',
                'class' => 'info'
            ],
            [
                'name'  => 'Отправлено',
                'class' => 'info'
            ],
            [
                'name'  => 'Доставлено',
                'class' => 'success'
            ],
        ];

        foreach ($data as $stat) {
            ShopOrderStatus::make($stat)->save();
        }
    }
}
