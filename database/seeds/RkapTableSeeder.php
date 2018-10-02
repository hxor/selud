<?php

use Illuminate\Database\Seeder;

class RkapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rkap = [
            ['bumd_id' => 1, 'judul' => 'Laporan RKAP Tahun 2017', 'tanggal' => '2017-12-31', 'status' => true],
            ['bumd_id' => 1, 'judul' => 'Laporan RKAP Tahun 2018', 'tanggal' => '2018-12-31', 'status' => true],
        ];

        App\Models\Rkap::insert($rkap);

        $rkapDetail = [
            // Pendapatan Operasional 2017
            [
                'rkap_id' => 1,
                'rekening2_id' => 8,
                'rekening3_id' => 20,
                'nilai' => 1000000
            ],[
                'rkap_id' => 1,
                'rekening2_id' => 8,
                'rekening3_id' => 21,
                'nilai' => 1000000
            ],[
                'rkap_id' => 1,
                'rekening2_id' => 8,
                'rekening3_id' => 22,
                'nilai' => 1000000
            ],

            // Beban Operasional 2017
            [
                'rkap_id' => 1,
                'rekening2_id' => 9,
                'rekening3_id' => 23,
                'nilai' => 1000000
            ],[
                'rkap_id' => 1,
                'rekening2_id' => 9,
                'rekening3_id' => 24,
                'nilai' => 1000000
            ],[
                'rkap_id' => 1,
                'rekening2_id' => 9,
                'rekening3_id' => 25,
                'nilai' => 1000000
            ],[
                'rkap_id' => 1,
                'rekening2_id' => 9,
                'rekening3_id' => 26,
                'nilai' => 1000000
            ],

            // Beban Umum dan Administrasi 2017
            [
                'rkap_id' => 1,
                'rekening2_id' => 10,
                'rekening3_id' => 27,
                'nilai' => 1000000
            ],[
                'rkap_id' => 1,
                'rekening2_id' => 10,
                'rekening3_id' => 28,
                'nilai' => 1000000
            ],

            // Pendapatan/Beban Non Operasional
            [
                'rkap_id' => 1,
                'rekening2_id' => 11,
                'rekening3_id' => 29,
                'nilai' => 1000000
            ],[
                'rkap_id' => 1,
                'rekening2_id' => 11,
                'rekening3_id' => 30,
                'nilai' => 1000000
            ],// Pendapatan Operasional 2017
            [
                'rkap_id' => 1,
                'rekening2_id' => 8,
                'rekening3_id' => 20,
                'nilai' => 1000000
            ],[
                'rkap_id' => 1,
                'rekening2_id' => 8,
                'rekening3_id' => 21,
                'nilai' => 1000000
            ],[
                'rkap_id' => 1,
                'rekening2_id' => 8,
                'rekening3_id' => 22,
                'nilai' => 1000000
            ],

            // Beban Operasional 2017
            [
                'rkap_id' => 1,
                'rekening2_id' => 9,
                'rekening3_id' => 23,
                'nilai' => 1000000
            ],[
                'rkap_id' => 1,
                'rekening2_id' => 9,
                'rekening3_id' => 24,
                'nilai' => 1000000
            ],[
                'rkap_id' => 1,
                'rekening2_id' => 9,
                'rekening3_id' => 25,
                'nilai' => 1000000
            ],[
                'rkap_id' => 1,
                'rekening2_id' => 9,
                'rekening3_id' => 26,
                'nilai' => 1000000
            ],

            // Beban Umum dan Administrasi 2017
            [
                'rkap_id' => 1,
                'rekening2_id' => 10,
                'rekening3_id' => 27,
                'nilai' => 1000000
            ],[
                'rkap_id' => 1,
                'rekening2_id' => 10,
                'rekening3_id' => 28,
                'nilai' => 1000000
            ],

            // Pendapatan/Beban Non Operasional
            [
                'rkap_id' => 1,
                'rekening2_id' => 11,
                'rekening3_id' => 29,
                'nilai' => 1000000
            ],[
                'rkap_id' => 1,
                'rekening2_id' => 11,
                'rekening3_id' => 30,
                'nilai' => 1000000
            ],


            // Pendapatan Operasional 2018
            [
                'rkap_id' => 2,
                'rekening2_id' => 8,
                'rekening3_id' => 20,
                'nilai' => 1000000
            ],[
                'rkap_id' => 2,
                'rekening2_id' => 8,
                'rekening3_id' => 21,
                'nilai' => 1000000
            ],[
                'rkap_id' => 2,
                'rekening2_id' => 8,
                'rekening3_id' => 22,
                'nilai' => 1000000
            ],

            // Beban Operasional 2018
            [
                'rkap_id' => 2,
                'rekening2_id' => 9,
                'rekening3_id' => 23,
                'nilai' => 1000000
            ],[
                'rkap_id' => 2,
                'rekening2_id' => 9,
                'rekening3_id' => 24,
                'nilai' => 1000000
            ],[
                'rkap_id' => 2,
                'rekening2_id' => 9,
                'rekening3_id' => 25,
                'nilai' => 1000000
            ],[
                'rkap_id' => 2,
                'rekening2_id' => 9,
                'rekening3_id' => 26,
                'nilai' => 1000000
            ],

            // Beban Umum dan Administrasi 2018
            [
                'rkap_id' => 2,
                'rekening2_id' => 10,
                'rekening3_id' => 27,
                'nilai' => 1000000
            ],[
                'rkap_id' => 2,
                'rekening2_id' => 10,
                'rekening3_id' => 28,
                'nilai' => 1000000
            ],

            // Pendapatan/Beban Non Operasional
            [
                'rkap_id' => 2,
                'rekening2_id' => 11,
                'rekening3_id' => 29,
                'nilai' => 1000000
            ],[
                'rkap_id' => 2,
                'rekening2_id' => 11,
                'rekening3_id' => 30,
                'nilai' => 1000000
            ],
        ];


        App\Models\RkapDetail::insert($rkapDetail);

    }
}
