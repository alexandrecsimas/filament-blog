<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criando um usuário admin padrão
        User::factory()->create([
            'email' => 'alexandrecsimas@gmail.com',
            'name' => 'Alexandre C',
            'password' => Hash::make('123456'),
        ]);
    }
}
