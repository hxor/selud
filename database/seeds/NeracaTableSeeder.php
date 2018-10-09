<?php

use Illuminate\Database\Seeder;

class NeracaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $neraca = [
            ['bumd_id' => 1, 'judul' => 'Laporan Neraca Bulan Januari', 'tanggal' => '2018-01-01', 'status' => true],
            ['bumd_id' => 1, 'judul' => 'Laporan Neraca Bulan Februari', 'tanggal' => '2018-02-01', 'status' => true]
        ];

        App\Models\Neraca::insert($neraca);

        $neracaDetail = [
            // Aset Lancar Januari
            [
                'neraca_id' => 1,
                'rekening2_id' => 1,
                'rekening3_id' => 1,
                'nilai' => 100000
            ],[
                'neraca_id' => 1,
                'rekening2_id' => 1,
                'rekening3_id' => 2,
                'nilai' => 100000
            ],[
                'neraca_id' => 1,
                'rekening2_id' => 1,
                'rekening3_id' => 3,
                'nilai' => 100000
            ],[
                'neraca_id' => 1,
                'rekening2_id' => 1,
                'rekening3_id' => 4,
                'nilai' => 100000
            ],[
                'neraca_id' => 1,
                'rekening2_id' => 1,
                'rekening3_id' => 5,
                'nilai' => 100000
            ],

            // Aset Tetap Januari
            [
                'neraca_id' => 1,
                'rekening2_id' => 2,
                'rekening3_id' => 6,
                'nilai' => 100000
            ],[
                'neraca_id' => 1,
                'rekening2_id' => 2,
                'rekening3_id' => 7,
                'nilai' => 100000
            ],

            // Kewajiban Jangka Pendek Januari
            [
                'neraca_id' => 1,
                'rekening2_id' => 4,
                'rekening3_id' => 8,
                'nilai' => 100000
            ],[
                'neraca_id' => 1,
                'rekening2_id' => 4,
                'rekening3_id' => 9,
                'nilai' => 100000
            ],[
                'neraca_id' => 1,
                'rekening2_id' => 4,
                'rekening3_id' => 10,
                'nilai' => 100000
            ],[
                'neraca_id' => 1,
                'rekening2_id' => 4,
                'rekening3_id' => 11,
                'nilai' => 100000
            ],[
                'neraca_id' => 1,
                'rekening2_id' => 4,
                'rekening3_id' => 12,
                'nilai' => 100000
            ],[
                'neraca_id' => 1,
                'rekening2_id' => 4,
                'rekening3_id' => 13,
                'nilai' => 100000
            ],

            // Pinjaman Jangka Panjang Januari
            [
                'neraca_id' => 1,
                'rekening2_id' => 5,
                'rekening3_id' => 14,
                'nilai' => 100000
            ],[
                'neraca_id' => 1,
                'rekening2_id' => 5,
                'rekening3_id' => 15,
                'nilai' => 100000
            ],

            // Ekuitas Januari
            [
                'neraca_id' => 1,
                'rekening2_id' => 7,
                'rekening3_id' => 16,
                'nilai' => 100000
            ],[
                'neraca_id' => 1,
                'rekening2_id' => 7,
                'rekening3_id' => 17,
                'nilai' => 100000
            ],[
                'neraca_id' => 1,
                'rekening2_id' => 7,
                'rekening3_id' => 18,
                'nilai' => 100000
            ],[
                'neraca_id' => 1,
                'rekening2_id' => 7,
                'rekening3_id' => 19,
                'nilai' => 100000
            ],


            // Aset Lancar Februari
            [
                'neraca_id' => 2,
                'rekening2_id' => 1,
                'rekening3_id' => 1,
                'nilai' => 100000
            ],[
                'neraca_id' => 2,
                'rekening2_id' => 1,
                'rekening3_id' => 2,
                'nilai' => 100000
            ],[
                'neraca_id' => 2,
                'rekening2_id' => 1,
                'rekening3_id' => 3,
                'nilai' => 100000
            ],[
                'neraca_id' => 2,
                'rekening2_id' => 1,
                'rekening3_id' => 4,
                'nilai' => 100000
            ],[
                'neraca_id' => 2,
                'rekening2_id' => 1,
                'rekening3_id' => 5,
                'nilai' => 100000
            ],

            // Aset Tetap Februari
            [
                'neraca_id' => 2,
                'rekening2_id' => 2,
                'rekening3_id' => 6,
                'nilai' => 100000
            ],[
                'neraca_id' => 2,
                'rekening2_id' => 2,
                'rekening3_id' => 7,
                'nilai' => 100000
            ],

            // Kewajiban Jangka Pendek Februari
            [
                'neraca_id' => 2,
                'rekening2_id' => 4,
                'rekening3_id' => 8,
                'nilai' => 100000
            ],[
                'neraca_id' => 2,
                'rekening2_id' => 4,
                'rekening3_id' => 9,
                'nilai' => 100000
            ],[
                'neraca_id' => 2,
                'rekening2_id' => 4,
                'rekening3_id' => 10,
                'nilai' => 100000
            ],[
                'neraca_id' => 2,
                'rekening2_id' => 4,
                'rekening3_id' => 11,
                'nilai' => 100000
            ],[
                'neraca_id' => 2,
                'rekening2_id' => 4,
                'rekening3_id' => 12,
                'nilai' => 100000
            ],[
                'neraca_id' => 2,
                'rekening2_id' => 4,
                'rekening3_id' => 13,
                'nilai' => 100000
            ],

            // Pinjaman Jangka Panjang Februari
            [
                'neraca_id' => 2,
                'rekening2_id' => 5,
                'rekening3_id' => 14,
                'nilai' => 100000
            ],[
                'neraca_id' => 2,
                'rekening2_id' => 5,
                'rekening3_id' => 15,
                'nilai' => 100000
            ],

            // Ekuitas Februari
            [
                'neraca_id' => 2,
                'rekening2_id' => 7,
                'rekening3_id' => 16,
                'nilai' => 100000
            ],[
                'neraca_id' => 2,
                'rekening2_id' => 7,
                'rekening3_id' => 17,
                'nilai' => 100000
            ],[
                'neraca_id' => 2,
                'rekening2_id' => 7,
                'rekening3_id' => 18,
                'nilai' => 100000
            ],[
                'neraca_id' => 2,
                'rekening2_id' => 7,
                'rekening3_id' => 19,
                'nilai' => 100000
            ],
        ];

        App\Models\NeracaDetail::insert($neracaDetail);
    }
}
