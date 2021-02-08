<?php

use App\Models\BlogPost;
use Illuminate\Database\Seeder;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        factory(BlogPost::class, 10)->create()->make();

        $post = [
            'name'  =>  'Сайт открылся!',
            'content' => 'Игорь, попробуй удалить эту запись и создать нормальные новости.',
        ];

        BlogPost::create($post)->save();
    }
}
