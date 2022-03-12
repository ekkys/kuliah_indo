<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

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
            $this->call(TopicSeeder::class);
            $this->call(TutorSeeder::class);
            $this->call(JabatanSeeder::class);
            $this->call(KaryawanSeeder::class);
            $this->call(RoleSeeder::class);
            $this->call(UserSeeder::class);
            
    }
}
