<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            [
                'name'=>'Admin',
                'email'=>'admin@bootcamp.com',
                'is_admin'=>'1',
                'password'=> bcrypt('12345678'),
            ],
        ];

        foreach ($user as $value) {
            User::create($value);
        }
    }
}
