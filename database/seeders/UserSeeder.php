<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        $role = Role::where('name', 'admin')->get();

        User::factory()
            ->hasAttached($role)
            ->create([
                'name' => 'Diovane',
                'email' => 'diovane.sousa@manaus.am.gov.br',
            ]);
    }
}
