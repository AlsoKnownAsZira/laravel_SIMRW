<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class InventoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data=[
            ['nama_barang'=> 'Speaker', 'jumlah_barang'=>'2'],
            ['nama_barang'=> 'Microphone', 'jumlah_barang'=>'7'],
            ['nama_barang'=> 'Kabel olor', 'jumlah_barang'=>'5'],

        ];
        DB::table('inventori')->insert($data);
    }
}
