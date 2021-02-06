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
                'class' => 'label-warning'
            ],
            [
                'name'  => 'Обработка',
                'class' => 'label-info'
            ],
            [
                'name'  => 'Отправлено',
                'class' => 'label-info'
            ],
            [
                'name'  => 'Доставлено',
                'class' => 'label-success'
            ],
        ];

        foreach ($data as $stat) {
            ShopOrderStatus::make($stat)->save();
        }
    }
}
