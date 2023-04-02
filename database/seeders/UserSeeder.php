<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
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
        User::updateOrCreate(
            [
                'email' => 'info@abdullahiftikhar.com',
            ],
            [
                'name' => 'Super Admin',
                'role' => 'admin',
                'password' => Hash::make('AbdullahHub@7@8@6'),
                'email_verified_at' => now()
            ]
        );
    }

}
