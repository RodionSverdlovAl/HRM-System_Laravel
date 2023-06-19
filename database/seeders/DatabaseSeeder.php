<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\Position;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Родион',
                'surname' => 'Свердлов',
                'email' => 'adminadmin@mail.ru',
                'phone' => '+375336211355',
                'avatar'=>'https://guruopta.ru/wp-content/uploads/2015/08/%D0%B0%D0%B4%D0%BC%D0%B8%D0%BD%D0%B8%D1%81%D1%82%D1%80%D0%B0%D1%82%D0%BE%D1%80-%D0%BE%D1%82%D0%B4%D0%B5%D0%BB%D0%B0-%D0%BF%D1%80%D0%BE%D0%B4%D0%B0%D0%B6.jpg',
                'department_id' => null,
                'position_id' => null,
                'password' => Hash::make('adminadmin111'), // password
                'role' => 'admin'
            ]
        );
    }
}
