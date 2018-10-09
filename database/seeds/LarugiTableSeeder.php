<?php

use Illuminate\Database\Seeder;

class LarugiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $larugi = [
            ['bumd_id' => 1, 'judul' => 'Laporan Laba/Rugi Bulan Januari 2017', 'tanggal' => '2017-01-31', 'status' => true],
            ['bumd_id' => 1, 'judul' => 'Laporan Laba/Rugi Bulan Februari 2017', 'tanggal' => '2018-02-28', 'status' => true],
            ['bumd_id' => 1, 'judul' => 'Laporan Laba/Rugi Bulan Maret 2017', 'tanggal' => '2018-03-30', 'status' => true],
        ];

        App\Models\Larugi::insert($larugi);


        $larugiDetail = [
            // Pendapatan Operasional Januari
            [
                'larugi_id' => 1,
                'rekening2_id' => 8,
                'rekening3_id' => 20,
                'nilai' => 1000000
            ],[
                'larugi_id' => 1,
                'rekening2_id' => 8,
                'rekening3_id' => 21,
                'nilai' => 1000000
            ],[
                'larugi_id' => 1,
                'rekening2_id' => 8,
                'rekening3_id' => 22,
                'nilai' => 1000000
            ],

            // Beban Operasional Januari
            [
                'larugi_id' => 1,
                'rekening2_id' => 9,
                'rekening3_id' => 23,
                'nilai' => 1000000
            ],[
                'larugi_id' => 1,
                'rekening2_id' => 9,
                'rekening3_id' => 24,
                'nilai' => 1000000
            ],[
                'larugi_id' => 1,
                'rekening2_id' => 9,
                'rekening3_id' => 25,
                'nilai' => 1000000
            ],[
                'larugi_id' => 1,
                'rekening2_id' => 9,
                'rekening3_id' => 26,
                'nilai' => 1000000
            ],

            // Beban Umum dan Administrasi Januari
            [
                'larugi_id' => 1,
                'rekening2_id' => 10,
                'rekening3_id' => 27,
                'nilai' => 1000000
            ],[
                'larugi_id' => 1,
                'rekening2_id' => 10,
                'rekening3_id' => 28,
                'nilai' => 1000000
            ],

            // Pendapatan/Beban Non Operasional Januari
            [
                'larugi_id' => 1,
                'rekening2_id' => 11,
                'rekening3_id' => 29,
                'nilai' => 1000000
            ],[
                'larugi_id' => 1,
                'rekening2_id' => 11,
                'rekening3_id' => 30,
                'nilai' => 1000000
            ],



            // Pendapatan Operasional Februari
            [
                'larugi_id' => 2,
                'rekening2_id' => 8,
                'rekening3_id' => 20,
                'nilai' => 1000000
            ],[
                'larugi_id' => 2,
                'rekening2_id' => 8,
                'rekening3_id' => 21,
                'nilai' => 1000000
            ],[
                'larugi_id' => 2,
                'rekening2_id' => 8,
                'rekening3_id' => 22,
                'nilai' => 1000000
            ],

            // Beban Operasional Februari
            [
                'larugi_id' => 2,
                'rekening2_id' => 9,
                'rekening3_id' => 23,
                'nilai' => 1000000
            ],[
                'larugi_id' => 2,
                'rekening2_id' => 9,
                'rekening3_id' => 24,
                'nilai' => 1000000
            ],[
                'larugi_id' => 2,
                'rekening2_id' => 9,
                'rekening3_id' => 25,
                'nilai' => 1000000
            ],[
                'larugi_id' => 2,
                'rekening2_id' => 9,
                'rekening3_id' => 26,
                'nilai' => 1000000
            ],

            // Beban Umum dan Administrasi Februari
            [
                'larugi_id' => 2,
                'rekening2_id' => 10,
                'rekening3_id' => 27,
                'nilai' => 1000000
            ],[
                'larugi_id' => 2,
                'rekening2_id' => 10,
                'rekening3_id' => 28,
                'nilai' => 1000000
            ],

            // Pendapatan/Beban Non Operasional Februari
            [
                'larugi_id' => 2,
                'rekening2_id' => 11,
                'rekening3_id' => 29,
                'nilai' => 1000000
            ],[
                'larugi_id' => 2,
                'rekening2_id' => 11,
                'rekening3_id' => 30,
                'nilai' => 1000000
            ],


            // Pendapatan Operasional Maret
            [
                'larugi_id' => 3,
                'rekening2_id' => 8,
                'rekening3_id' => 20,
                'nilai' => 1000000
            ],[
                'larugi_id' => 3,
                'rekening2_id' => 8,
                'rekening3_id' => 21,
                'nilai' => 1000000
            ],[
                'larugi_id' => 3,
                'rekening2_id' => 8,
                'rekening3_id' => 22,
                'nilai' => 1000000
            ],

            // Beban Operasional Maret
            [
                'larugi_id' => 3,
                'rekening2_id' => 9,
                'rekening3_id' => 23,
                'nilai' => 1000000
            ],[
                'larugi_id' => 3,
                'rekening2_id' => 9,
                'rekening3_id' => 24,
                'nilai' => 1000000
            ],[
                'larugi_id' => 3,
                'rekening2_id' => 9,
                'rekening3_id' => 25,
                'nilai' => 1000000
            ],[
                'larugi_id' => 3,
                'rekening2_id' => 9,
                'rekening3_id' => 26,
                'nilai' => 1000000
            ],

            // Beban Umum dan Administrasi Maret
            [
                'larugi_id' => 3,
                'rekening2_id' => 10,
                'rekening3_id' => 27,
                'nilai' => 1000000
            ],[
                'larugi_id' => 3,
                'rekening2_id' => 10,
                'rekening3_id' => 28,
                'nilai' => 1000000
            ],

            // Pendapatan/Beban Non Operasional Maret
            [
                'larugi_id' => 3,
                'rekening2_id' => 11,
                'rekening3_id' => 29,
                'nilai' => 1000000
            ],[
                'larugi_id' => 3,
                'rekening2_id' => 11,
                'rekening3_id' => 30,
                'nilai' => 1000000
            ],
        ];


        App\Models\LarugiDetail::insert($larugiDetail);
    }
}
