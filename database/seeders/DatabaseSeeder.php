<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Role::create(['name' => 'admin']);
        Role::create(['name' => 'partner']);
        Role::create(['name' => 'employee']);

        $adminRole = Role::where('name', 'admin')->first();

        User::create([
            'name' => 'Rafi Akmal',
            'email' => 'rafiakmal@gmail.com',
            'password' => Hash::make('rafiakmal'),
            'role_id' => $adminRole->id, // Ambil ID role admin
        ]);
    }
}
