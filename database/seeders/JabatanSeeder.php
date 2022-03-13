<?php

namespace Database\Seeders;

use App\Models\Jabatan;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jabatan::create([
            'name' => 'Admin',
            'description' => 'Memiliki akses untuk mengelola seluruh sistem kuliah indo',
        ]);
        Jabatan::create([
            'name' => 'Student',
            'description' => 'Memiliki akses untuk mengikuti kelas',
        ]);
        Jabatan::create([
            'name' => 'Teacher',
            'description' => 'Memiliki akses untuk mengajar di kelas',
        ]);


    }
}
