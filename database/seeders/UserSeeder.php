<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //–– Generate 20 patients ––
        User::factory()
            ->count(20)
            ->state([
                'user_account_type' => 'patient',
                'password'          => Hash::make('12345'),
            ])
            ->create();

        //–– Generate 5 physicians ––
        User::factory()
            ->count(5)
            ->state([
                'user_account_type' => 'physician',
                'password'          => Hash::make('12345'),
            ])
            ->create();
    }
}
