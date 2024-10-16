<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Group;
use Illuminate\Support\Facades\DB;
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

        User::factory()->create([
            'name' => 'Shiplu',
            'email' => 'me@shiplujs.com',
            'password' => Hash::make('123456789'),
            'email_verified_at' => now(),
            'role' => 'admin',
            'status' => 'Active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

       DB::table('groups')->insert([
           'group_name' => 'Individual',
           'group_code' => 'G-Individual',
           'status' => 'Active',
           'editable' => '0',
           'created_by' => '1',
           'created_at' => now(),
           'updated_at' => now(),
       ]);
    }
}
