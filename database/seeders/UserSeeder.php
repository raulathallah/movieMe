<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
        //
        User::create([
            'name' => 'admin',
            'role' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin')
        ]);

        // User::create([
        //     'name' => 'member',
        //     'role' => 'Member',
        //     'email' => 'member@gmail.com',
        //     'password' => Hash::make(['member'])
        // ]);
    }
}
