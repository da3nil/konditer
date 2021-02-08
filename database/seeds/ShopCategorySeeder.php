<?php

use App\Models\ShopCategory;
use Illuminate\Database\Seeder;

class ShopCategorySeeder extends Seeder
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
                'name' => 'Пироги',
                'description' => 'Пиро́г — кондитерское изделие из теста с начинкой, которое выпекается или жарится.',
                'img' => 'images/seeder/categories/1.png',
            ],
            [
                'name' => 'Круассаны',
                'description' => 'Круасса́н — мучное кондитерское изделие, булочка в форме полумесяца.',
                'img' => 'images/seeder/categories/2.png',
            ],
            [
                'name' => 'Пирожные',
                'description' => 'Пиро́жное — изделие небольшого размера из сладкого сдобного теста с кремовой начинкой.',
                'img' => 'images/seeder/categories/3.png',
            ],
            [
                'name' => 'Торты',
                'description' => 'Торт — десерт, состоящий из одного или нескольких коржей, пропитанных кремом.',
                'img' => 'images/seeder/categories/4.png',
            ],
            [
                'name' => 'Печенье',
                'description' => 'Пече́нье — небольшие мучные кондитерские изделия различной формы и пониженной влажности.',
                'img' => 'images/seeder/categories/5.png',
            ],
            [
                'name' => 'Кексы',
                'description' => 'Кекс — кондитерское изделие, выпекаемое из масляного бисквитного или дрожжевого теста.',
                'img' => 'images/seeder/categories/6.png',
            ],
            [
                'name' => 'Тирамису',
                'description' => 'Тирамису́ — десерт, в состав которого входят: кофе, куриные яйца, сахар и печенье савоярди.',
                'img' => 'images/seeder/categories/7.png',
            ],
            [
                'name' => 'Чизкейки',
                'description' => 'Чизке́йк — блюдо, которое содержит сыросодержащий десерт от творожной запеканки до суфле.',
                'img' => 'images/seeder/categories/8.png',
            ]
        ];

        foreach ($data as $item) {
            ShopCategory::create($item)->save();
        }

//        factory(ShopCategory::class, 20)->create()->make();
    }
}
