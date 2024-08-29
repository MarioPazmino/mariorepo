<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = [
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'email_verified_at' => now(), // Actualiza esto a la fecha y hora actual
                'password' => Hash::make('12345678'), // Cambia esto a tu contraseña deseada
                'role' => 'admin',
                'littlelink_name' => 'admin',
                'littlelink_description' => 'admin page',
            ]
        ];

        User::insert($admin);
    }
}
