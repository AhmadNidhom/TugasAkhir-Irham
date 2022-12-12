<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        DB::table('users')->insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'email_verified_at' => '2021-08-03 08:12:50',
                'password' => '$2y$10$AU1JvsdIXRrfK8VwDsWfi.A0SdeKXhpGnsglXnTRYvIkvl4LieOLy',
                'isAdmin' => true,
                'npm' => '12345678',
                'remember_token' => null,
            ],
            [
                'name' => 'Ahmad Nidhom Al Fadli',
                'email' => 'ahmad.n.fadli@gmail.com',
                'email_verified_at' => '2021-08-03 08:12:50',
                'password' => '$2y$10$AU1JvsdIXRrfK8VwDsWfi.A0SdeKXhpGnsglXnTRYvIkvl4LieOLy',
                'isAdmin' => false,
                'remember_token' => null,
            ],
            [
                'name' => 'Ahmad Nidhom Al Fadli',
                'email' => 'ahmadnidhom@gmail.com',
                'email_verified_at' => '2021-08-03 08:12:50',
                'password' => '$2y$10$AU1JvsdIXRrfK8VwDsWfi.A0SdeKXhpGnsglXnTRYvIkvl4LieOLy',
                'isAdmin' => false,
                'remember_token' => null,
            ],
        ]);
    }
}
