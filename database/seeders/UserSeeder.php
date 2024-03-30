<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('pass123'), // Usamos Hash::make para asegurar la contraseña
        ]);

        User::create([
            'name' => 'Usuario',
            'email' => 'usuario@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('contraseña456'),
        ]);
    }
}
