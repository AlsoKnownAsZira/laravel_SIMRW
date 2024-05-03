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
        $currenttimestamp = now();
        $data=[
            ['nama_barang'=> 'Speaker', 'jumlah_barang'=>'2', 'created_at'=>$currenttimestamp],
           
            ['nama_barang'=> 'Microphone', 'jumlah_barang'=>'7', 'created_at'=>$currenttimestamp],
            ['nama_barang'=> 'Kabel olor', 'jumlah_barang'=>'5', 'created_at'=>$currenttimestamp],

        ];
        DB::table('inventori')->insert($data);
    }
}
