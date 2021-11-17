<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create(["email" => 'admin@email.com'])->role()->attach(1);
        User::factory()->create(["email" => 'user@email.com'])->role()->attach(2);
    }
}
