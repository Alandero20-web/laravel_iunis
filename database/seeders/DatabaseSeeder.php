<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Add the first user
         */
        DB::table('users')->insert([
            'name'     => 'Angel Landero Duran',
            'email'    => 'itic17.angel.landero@iunis.edu.mx',
            'password' => bcrypt('123456'),
            'current_team_id' => 1
        ]);
        DB::table('teams')->insert([
            'user_id' => 1,
            'name'    => 'Tienda deportiva',
            'personal_team' => 1
        ]);

    }
}
