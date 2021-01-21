<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name'      =>  'admin',
            'email'     =>  'd.prytckov@yandex.ru',
            'password'  =>  Hash::make('password')
        ];

        User::make($data)->save();

        factory(User::class, 5)->create()->make();
    }
}
