<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Admin\Admin::create([
            'name' => 'Admin',
            'email' => 'easytravel@admin.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
        ]);
    }
}
