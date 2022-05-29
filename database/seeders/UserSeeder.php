<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // administrator
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('12345'),
            'created_at' => Carbon::now(),
            'update_at' => Carbon::now(),
        ]);
        $admin->assignRole('admin');

        // normalUser
        $user = User::create([
            'name' => 'User',
            'email' => 'user@example.com',
            'password' => bcrypt('12345'),
            'created_at' => Carbon::now(),
            'update_at' => Carbon::now(),
        ]);
        $user->assignRole('user');

    }
}
