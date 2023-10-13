<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Enums\UserRole;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@email.com',
            'phone_number' => '0000000000',
            'password' => Hash::make('admin@email.com'),
            'role' => UserRole::Admin,
        ]);

        DB::table('settings')->insert([
            'site_title' => 'Blogee',
            'site_icon' => 'blogee.png',
            'about_page_content' => 'Blogee,is simple and lite blog system.',
            'created_at' => Carbon::now(),
        ]);
    }
}
