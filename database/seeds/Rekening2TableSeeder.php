<?php

use Illuminate\Database\Seeder;

class Rekening2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['rekening1_id' => 1, 'kode' => '1.1', 'nama' => 'Aset Lancar'],
            ['rekening1_id' => 1, 'kode' => '1.2', 'nama' => 'Aset Tidak Lancar'],
            ['rekening1_id' => 1, 'kode' => '1.3', 'nama' => 'Aset Lain-lain'],
            ['rekening1_id' => 2, 'kode' => '2.1', 'nama' => 'Kewajiban Jangka Pendek'],
            ['rekening1_id' => 2, 'kode' => '2.2', 'nama' => 'Kewajiban Jangka Panjang'],
            ['rekening1_id' => 2, 'kode' => '2.3', 'nama' => 'Kewajiban Lainnya'],
            ['rekening1_id' => 3, 'kode' => '3.1', 'nama' => 'Ekuitas'],
            ['rekening1_id' => 4, 'kode' => '4.1', 'nama' => 'Pendapatan Operasional'],
            ['rekening1_id' => 5, 'kode' => '5.1', 'nama' => 'Beban Operasional'],
            ['rekening1_id' => 6, 'kode' => '5.2', 'nama' => 'Beban Umum dan Administrasi'],
            ['rekening1_id' => 7, 'kode' => '5.3', 'nama' => 'Pendapatan/Beban Non Operasional'],
        ];

        App\Models\Rekening2::insert($data);
    }
}
