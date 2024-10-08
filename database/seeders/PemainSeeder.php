<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PemainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pemain')->insert([
            ['nama_pemain' => 'Marcus Rashford', 'no_punggung' => 10, 'posisi' => 'Forward'],
            ['nama_pemain' => 'Bruno Fernandes', 'no_punggung' => 8, 'posisi' => 'Midfielder'],
            ['nama_pemain' => 'Harry Maguire', 'no_punggung' => 5, 'posisi' => 'Defender'],
            ['nama_pemain' => 'David de Gea', 'no_punggung' => 1, 'posisi' => 'Goalkeeper'],
            ['nama_pemain' => 'Luke Shaw', 'no_punggung' => 23, 'posisi' => 'Defender'],
        ]);
    }
}
