<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'Admin',
            'avatar' => 'https://thuthuatnhanh.com/wp-content/uploads/2018/07/avatar-vo-mat-cham-com.jpg',
            'user_name' => 'admin',
            'password' => bcrypt('1234'),
            'status' => 1,
            'role' => 0,
        ];

        \App\Model\User::create($data);
    }
}
