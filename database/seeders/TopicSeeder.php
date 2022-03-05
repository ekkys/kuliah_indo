<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Seeder;


class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('topics')->insert([
        //     'created_at' => Carbon::now(),
        //     'name' => 'Vue Js for Front End beginner',
        //     'description' => 'Kelas pemrograman web dengan menggunakan javascript framework Vue JS 3  untuk pemula.',
        // ]);
        
        Topic::create([
            'name' => 'Laravel Fullstack beginner',
            'description' => 'Kelas pemrograman web dengan menggunakan  framework Laravel 8  untuk pemula.',
        ]);
        Topic::create([
            'name' => 'Vue Js for Front End beginner',
            'description' => 'Kelas pemrograman web dengan menggunakan javascript framework Vue JS 3  untuk pemula.',
        ]);
        Topic::create([
            'name' => 'React Native beginner',
            'description' => 'Kelas pemrograman web dengan menggunakan javascript framework React Native  untuk pemula.',
        ]);

        

        

    }
}
