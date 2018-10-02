<?php

use Illuminate\Database\Seeder;

class Rekening3TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            // Perusahaan Umum Daerah Air Minum Kota Cirebon
            // Aset Lancar
            ['bumd_id' => 1, 'rekening2_id' => 1, 'kode' => '01', 'nama' => 'Kas dan Setara Kas'],
            ['bumd_id' => 1, 'rekening2_id' => 1, 'kode' => '02', 'nama' => 'Piutang Usaha'],
            ['bumd_id' => 1, 'rekening2_id' => 1, 'kode' => '03', 'nama' => 'Kas dan Setara Kas'],
            ['bumd_id' => 1, 'rekening2_id' => 1, 'kode' => '04', 'nama' => 'Persediaan'],
            ['bumd_id' => 1, 'rekening2_id' => 1, 'kode' => '05', 'nama' => 'Pembayaran Dimuka'],

            // Aset Tidak Lancar
            ['bumd_id' => 1, 'rekening2_id' => 2, 'kode' => '01', 'nama' => 'Aset Tetap'],
            ['bumd_id' => 1, 'rekening2_id' => 2, 'kode' => '02', 'nama' => 'Aset Dalam Penyelesaian'],

            // Kewajiban Jangka Pendek
            ['bumd_id' => 1, 'rekening2_id' => 4, 'kode' => '01', 'nama' => 'Utang Usaha'],
            ['bumd_id' => 1, 'rekening2_id' => 4, 'kode' => '02', 'nama' => 'Utang Non Usaha'],
            ['bumd_id' => 1, 'rekening2_id' => 4, 'kode' => '03', 'nama' => 'Beban Yang Masih Harus Dibayar'],
            ['bumd_id' => 1, 'rekening2_id' => 4, 'kode' => '04', 'nama' => 'Utang Pajak'],
            ['bumd_id' => 1, 'rekening2_id' => 4, 'kode' => '05', 'nama' => 'Utang Jangka Panjang Jatuh Tempo'],
            ['bumd_id' => 1, 'rekening2_id' => 4, 'kode' => '06', 'nama' => 'Kewajiban Jangka Pendek Lainnya'],

            // Kewajiban Jangka Panjang
            ['bumd_id' => 1, 'rekening2_id' => 5, 'kode' => '01', 'nama' => 'Pinjaman Luar Negeri (ADB)'],
            ['bumd_id' => 1, 'rekening2_id' => 5, 'kode' => '02', 'nama' => 'Kewajiban Imbalan Pasca Kerja'],

            // Ekuitas
            ['bumd_id' => 1, 'rekening2_id' => 7, 'kode' => '01', 'nama' => 'Modal Dasar'],
            ['bumd_id' => 1, 'rekening2_id' => 7, 'kode' => '02', 'nama' => 'Penyertaan Pemerintah Kota Cirebon'],
            ['bumd_id' => 1, 'rekening2_id' => 7, 'kode' => '03', 'nama' => 'Cadangan Umum'],
            ['bumd_id' => 1, 'rekening2_id' => 7, 'kode' => '04', 'nama' => 'Laba/Rugi'],

            // Pendapatan Operasional
            ['bumd_id' => 1, 'rekening2_id' => 8, 'kode' => '01', 'nama' => 'Pendapatan Air'],
            ['bumd_id' => 1, 'rekening2_id' => 8, 'kode' => '02', 'nama' => 'Pendapatan Non Air'],
            ['bumd_id' => 1, 'rekening2_id' => 8, 'kode' => '03', 'nama' => 'Pendapatan Air Limbah'],

            // Beban Operasional
            ['bumd_id' => 1, 'rekening2_id' => 9, 'kode' => '01', 'nama' => 'Beban Sumber Air'],
            ['bumd_id' => 1, 'rekening2_id' => 9, 'kode' => '02', 'nama' => 'Beban Pengelolaan Air'],
            ['bumd_id' => 1, 'rekening2_id' => 9, 'kode' => '03', 'nama' => 'Beban Transmisi Distribusi'],
            ['bumd_id' => 1, 'rekening2_id' => 9, 'kode' => '01', 'nama' => 'Beban Air Limbah'],

            //Beban Umum dan Administrasi
            ['bumd_id' => 1, 'rekening2_id' => 10, 'kode' => '01', 'nama' => 'Beban Umum dan Administrasi Air Bersih'],
            ['bumd_id' => 1, 'rekening2_id' => 10, 'kode' => '02', 'nama' => 'Beban Umum dan Administrasi Air Limbah'],

            // Pendapatan/Beban Non Operasional
            ['bumd_id' => 1, 'rekening2_id' => 11, 'kode' => '01', 'nama' => 'Pendapatan Lain-lain'],
            ['bumd_id' => 1, 'rekening2_id' => 10, 'kode' => '02', 'nama' => 'Biaya Lain-lain'],
        ];
    }
}
