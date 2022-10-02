<?php

namespace Database\Seeders;

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
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789')
        ]);
        User::create([
            'name' => 'Traiteur',
            'email' => 'admin1@gmail.com',
            'password' => Hash::make('12345678')
        ]);
        User::create([
            'name' => 'Malado',
            'email' => 'admin2@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
