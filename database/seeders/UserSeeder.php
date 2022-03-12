<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin Role',
            'email' => 'admin@role.test',
            'password' => bcrypt('12345678')
        ]);
        $admin->assignRole('admin');

        $tutor = User ::create([
            'name' => 'Tutor Role',
            'email' => 'tutor@role.test',
            'password' => bcrypt('12345678')
        ]);
        $tutor->assignRole('tutor'); 

        $siswa = User ::create([
                'name' => 'Siswa Role',
                'email' => 'siswa@role.test',
                'password' => bcrypt('12345678')
            ]);
        $siswa->assignRole('siswa'); 
        
        $karyawan = User ::create([
                'name' => 'Karyawan Role',
                'email' => 'karyawan@role.test',
                'password' => bcrypt('12345678')
            ]);
        $karyawan->assignRole('karyawan'); 


    }
}
