<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@orcamentoapp.com',
            'password' => bcrypt('admin'),
        ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@orcamentoapp.com',
            'password' => bcrypt('user'),
        ]);

        $role = Role::create(['name' => 'Admin']);
        $user->assignRole($role);
    }
}
