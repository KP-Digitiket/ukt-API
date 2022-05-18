<?php

namespace Database\Seeders;

use App\Models\Midtrans;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MidtransSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Midtrans::create([
            'id_merchant' => 'G006923090',
            'client_key' => 'SB-Mid-client-bzpggSRZ5qROQZA3',
            'server_key' => 'SB-Mid-server-K2ssZK9I0FLozuLsCm2_5tcQ'
        ]);
    }
}
