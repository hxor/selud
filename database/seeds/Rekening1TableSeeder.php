<?php

use Illuminate\Database\Seeder;

class Rekening1TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rekening1 = [
            ['kode' => '1', 'nama' => 'Aset'],
            ['kode' => '2', 'nama' => 'Kewajiban'],
            ['kode' => '3', 'nama' => 'Ekuitas'],
            ['kode' => '4', 'nama' => 'Pendapatan Operasional'],
            ['kode' => '5', 'nama' => 'Beban Operasional'],
            ['kode' => '6', 'nama' => 'Beban Umum dan Administrasi'],
            ['kode' => '7', 'nama' => 'Pendapatan/Beban Non Operasional'],
        ];

        App\Models\Rekening1::insert($rekening1);
    }
}
