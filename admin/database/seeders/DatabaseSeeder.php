<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use \App\Models\Movie;
use \App\Models\User;
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
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            MovieSeeder::class
        ]);
    }
}
