<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'   => 'Bushra Khalid',
            'email'      => 'bushrakhalid786@gmail.com',
            'password'   => bcrypt('master1234'),
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
