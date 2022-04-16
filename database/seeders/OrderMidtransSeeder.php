<?php

namespace Database\Seeders;
use App\Models\OrderMidtrans;
use Illuminate\Database\Seeder;

class OrderMidtransSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\OrderMidtrans::factory(10)->create();
    }
}
