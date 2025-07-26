<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Ana Silva',
                'email' => 'ana@email.com',
                'password' => Hash::make('senha123'),
                'status' => 'ativado',
            ],
            [
                'name' => 'Bruno Souza',
                'email' => 'bruno@email.com',
                'password' => Hash::make('senha123'),
                'status' => 'desativado',
            ],
            [
                'name' => 'Carlos Lima',
                'email' => 'carlos@email.com',
                'password' => Hash::make('senha123'),
                'status' => 'ativado',
            ],
            [
                'name' => 'Daniela Rocha',
                'email' => 'daniela@email.com',
                'password' => Hash::make('senha123'),
                'status' => 'ativado',
            ],
            [
                'name' => 'Eduardo Mendes',
                'email' => 'eduardo@email.com',
                'password' => Hash::make('senha123'),
                'status' => 'desativado',
            ],
            [
                'name' => 'Francisco Lemos',
                'email' => 'francisco@email.com',
                'password' => Hash::make('senha123'),
                'status' => 'desativado',
            ],
        ];

        foreach($users as $user)
        {
            User::create($user);
        }
    }
}
