<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;


class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Thais',
                'email' => 'thais.t@gmail.com',
                'password' => bcrypt('senha12345a'),
            ]
    );
    }
}
