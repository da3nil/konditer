<?php

use App\Models\User;
use App\Models\AdminUser;
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
            'name'      =>  'Danil',
            'email'     =>  'd.prytckov@yandex.ru',
            'password'  =>  Hash::make('password')
        ];

        User::make($data)->save();

        $data = [
            'name'      =>  'Igor',
            'email'     =>  'admin@candyshop.ru',
            'password'  =>  Hash::make('password')
        ];

        User::make($data)->save();

        $data = [
            'user_id' => 1,
        ];

        AdminUser::make($data)->save();

        $data = [
            'user_id' => 2,
        ];

        AdminUser::make($data)->save();

//        factory(User::class, 15)->create()->make();
    }
}
