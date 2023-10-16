<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(1)->create([
            'name' => 'testuser',
            'email'=> 'admin@admin.com',
            'password' => 'secret',
        ]);

        User::factory(5)->create();
    }
}
