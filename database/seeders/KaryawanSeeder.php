<?php

namespace Database\Seeders;

use App\Models\Karyawan;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Karyawan::create([
            'name' => 'Ahmad',
            'gender' => 'L',
            'email' => 'ahmad@gmail.com',
            'address' => 'JL. Pahlawan No.1',
            'contact' => '0897676564',
            'jabatan_id' => '1',
            'description' => 'test text area',
        ]);
    
        Karyawan::create([
            'name' => 'Nisa',
            'gender' => 'P',
            'email' => 'nisa@gmail.com',
            'address' => 'JL. Pahlawan No.2',
            'contact' => '08976765645',
            'jabatan_id' => '2',
            'description' => 'test text area',
        ]);
    }
}
