<?php

namespace Database\Seeders;
        
use App\Models\Tutor;
use Illuminate\Database\Seeder;

class TutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tutor::create([
            'name' => 'Ahmad',
            'gender' => 'L',
            'email' => 'ahmad@gmail.com',
            'address' => 'JL. Pahlawan No.1',
            'contact' => '0897676564',
        ]);
    
        Tutor::create([
            'name' => 'Nisa',
            'gender' => 'P',
            'email' => 'nisa@gmail.com',
            'address' => 'JL. Pahlawan No.2',
            'contact' => '08976765645',
        ]);
    }
}
