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
            ['bumd_id' => 1, 'rekening2_id' => 1, 'kode' => '03', 'nama' => 'Piutang Lain-lain'],
            ['bumd_id' => 1, 'rekening2_id' => 1, 'kode' => '04', 'nama' => 'Persediaan'],
            ['bumd_id' => 1, 'rekening2_id' => 1, 'kode' => '05', 'nama' => 'Pembayaran Dimuka'],

            // Aset Tidak Lancar
            ['bumd_id' => 1, 'rekening2_id' => 2, 'kode' => '01', 'nama' => 'Aset Tetap'],
            ['bumd_id' => 1, 'rekening2_id' => 2, 'kode' => '02', 'nama' => 'Aset Dalam Penyelesaian'],

            // Kewajiban Jangka Pendek
            ['bumd_id' => 1, 'rekening2_id' => 4, 'kode' => '01', 'nama' => 'Hutang Usaha'],
            ['bumd_id' => 1, 'rekening2_id' => 4, 'kode' => '02', 'nama' => 'Hutang Non Usaha'],
            ['bumd_id' => 1, 'rekening2_id' => 4, 'kode' => '03', 'nama' => 'Beban Yang Masih Harus Dibayar'],
            ['bumd_id' => 1, 'rekening2_id' => 4, 'kode' => '04', 'nama' => 'Hutang Pajak'],
            ['bumd_id' => 1, 'rekening2_id' => 4, 'kode' => '05', 'nama' => 'Hutang Jangka Panjang Jatuh Tempo'],
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
            ['bumd_id' => 1, 'rekening2_id' => 9, 'kode' => '04', 'nama' => 'Beban Air Limbah'],

            //Beban Umum dan Administrasi
            ['bumd_id' => 1, 'rekening2_id' => 10, 'kode' => '01', 'nama' => 'Beban Umum dan Administrasi Air Bersih'],
            ['bumd_id' => 1, 'rekening2_id' => 10, 'kode' => '02', 'nama' => 'Beban Umum dan Administrasi Air Limbah'],

            // Pendapatan/Beban Non Operasional
            ['bumd_id' => 1, 'rekening2_id' => 11, 'kode' => '01', 'nama' => 'Pendapatan Lain-lain'],
            ['bumd_id' => 1, 'rekening2_id' => 11, 'kode' => '02', 'nama' => 'Biaya Lain-lain'],



            // PERUSAHAAN DAERAH BPR BANK CIREBON
            // Aset Lancar
            ['bumd_id' => 2, 'rekening2_id' => 1, 'kode' => '01', 'nama' => 'Kas'],
            ['bumd_id' => 2, 'rekening2_id' => 1, 'kode' => '02', 'nama' => 'Pendapatan Bunga Yang Akan Diterima'],
            ['bumd_id' => 2, 'rekening2_id' => 1, 'kode' => '03', 'nama' => 'Pendapatan Bank Lain'],
            ['bumd_id' => 2, 'rekening2_id' => 1, 'kode' => '04', 'nama' => 'Penyisihan Kerugian PBL'],
            ['bumd_id' => 2, 'rekening2_id' => 1, 'kode' => '05', 'nama' => 'Kredit Yang Diberikan'],
            ['bumd_id' => 2, 'rekening2_id' => 1, 'kode' => '06', 'nama' => 'Penyisihan Kerugian KYD'],

            // Aset Tidak Lancar
            ['bumd_id' => 2, 'rekening2_id' => 2, 'kode' => '01', 'nama' => 'Harga Perolehan'],
            ['bumd_id' => 2, 'rekening2_id' => 2, 'kode' => '02', 'nama' => 'Akumulasi Penyusutan'],
            ['bumd_id' => 2, 'rekening2_id' => 2, 'kode' => '03', 'nama' => 'Aset Tidak Berwujud'],
            ['bumd_id' => 2, 'rekening2_id' => 2, 'kode' => '04', 'nama' => 'Aset Lain-lain'],

            // Kewajiban Jangka Pendek
            ['bumd_id' => 2, 'rekening2_id' => 4, 'kode' => '01', 'nama' => 'Kewajiban Segera'],
            ['bumd_id' => 2, 'rekening2_id' => 4, 'kode' => '02', 'nama' => 'Hutang Bunga'],
            ['bumd_id' => 2, 'rekening2_id' => 4, 'kode' => '03', 'nama' => 'Hutang Pajak'],

            // Kewajiban Jangka Panjang
            ['bumd_id' => 2, 'rekening2_id' => 5, 'kode' => '01', 'nama' => 'Simpanan'],
            ['bumd_id' => 2, 'rekening2_id' => 5, 'kode' => '02', 'nama' => 'Kewajiban Imbalan Kerja'],

            // Ekuitas
            ['bumd_id' => 2, 'rekening2_id' => 7, 'kode' => '01', 'nama' => 'Modal Disetor'],
            ['bumd_id' => 2, 'rekening2_id' => 7, 'kode' => '02', 'nama' => 'Cadangan Umum'],
            ['bumd_id' => 2, 'rekening2_id' => 7, 'kode' => '03', 'nama' => 'Cadangan Tujuan'],
            ['bumd_id' => 2, 'rekening2_id' => 7, 'kode' => '04', 'nama' => 'Belum Ditentukan Tujuannya'],

            // Pendapatan Operasional
            ['bumd_id' => 2, 'rekening2_id' => 8, 'kode' => '01', 'nama' => 'Pendapatan Bunga'],
            ['bumd_id' => 2, 'rekening2_id' => 8, 'kode' => '02', 'nama' => 'Pendapatan Operasional Lainnya'],

            // Beban Operasional
            ['bumd_id' => 2, 'rekening2_id' => 9, 'kode' => '01', 'nama' => 'Beban Penyisihan Kerugian'],
            ['bumd_id' => 2, 'rekening2_id' => 9, 'kode' => '02', 'nama' => 'Beban Pemasaran'],
            ['bumd_id' => 2, 'rekening2_id' => 9, 'kode' => '03', 'nama' => 'Beban Operasional Lainnya'],

            //Beban Umum dan Administrasi
            ['bumd_id' => 2, 'rekening2_id' => 10, 'kode' => '01', 'nama' => 'Beban Umum dan Administrasi'],

            // Pendapatan/Beban Non Operasional
            ['bumd_id' => 2, 'rekening2_id' => 11, 'kode' => '01', 'nama' => 'Beban Non Operasional'],



            // PERUSAHAAN UMUM DAERAH PASAR BERINTAN KOTA CIREBON
            // Aset Lancar
            ['bumd_id' => 3, 'rekening2_id' => 1, 'kode' => '01', 'nama' => 'Kas dan Setara Kas'],
            ['bumd_id' => 3, 'rekening2_id' => 1, 'kode' => '02', 'nama' => 'Piutang Usaha'],
            ['bumd_id' => 3, 'rekening2_id' => 1, 'kode' => '03', 'nama' => 'Penyisihan Piutang Usaha'],
            ['bumd_id' => 3, 'rekening2_id' => 1, 'kode' => '04', 'nama' => 'Piutang Lain-lain'],
            ['bumd_id' => 3, 'rekening2_id' => 1, 'kode' => '05', 'nama' => 'Pendapatan Yang Masih Harus Diterima'],
            ['bumd_id' => 3, 'rekening2_id' => 1, 'kode' => '06', 'nama' => 'Persediaan'],
            ['bumd_id' => 3, 'rekening2_id' => 1, 'kode' => '07', 'nama' => 'Biaya Dibayar Dimuka'],
            ['bumd_id' => 3, 'rekening2_id' => 1, 'kode' => '08', 'nama' => 'Uang Muka'],

            // Aset Tidak Lancar
            ['bumd_id' => 3, 'rekening2_id' => 2, 'kode' => '01', 'nama' => 'Tanah'],
            ['bumd_id' => 3, 'rekening2_id' => 2, 'kode' => '02', 'nama' => 'Gedung Kantor, Sarana dan Prasarana'],
            ['bumd_id' => 3, 'rekening2_id' => 2, 'kode' => '03', 'nama' => 'Akm Peny. Gedung Kantor, Sarana dan Prasarana'],
            ['bumd_id' => 3, 'rekening2_id' => 2, 'kode' => '04', 'nama' => 'Kendaraan Bermotor'],
            ['bumd_id' => 3, 'rekening2_id' => 2, 'kode' => '05', 'nama' => 'Akm Peny. Kendaraan Bermotor'],
            ['bumd_id' => 3, 'rekening2_id' => 2, 'kode' => '06', 'nama' => 'Inventaris Kantor'],
            ['bumd_id' => 3, 'rekening2_id' => 2, 'kode' => '07', 'nama' => 'Akm Peny. Inventaris Kantor'],
            ['bumd_id' => 3, 'rekening2_id' => 2, 'kode' => '02', 'nama' => 'Tanah dan Gedung - Modal Donasi'],

            // Aset Lain-lain
            ['bumd_id' => 3, 'rekening2_id' => 3, 'kode' => '01', 'nama' => 'Saham di Perusahaan Lain'],
            ['bumd_id' => 3, 'rekening2_id' => 3, 'kode' => '02', 'nama' => 'Piutan Ragu-ragu'],
            ['bumd_id' => 3, 'rekening2_id' => 3, 'kode' => '03', 'nama' => 'Kios Yang Belum Dihuni'],

            // Kewajiban Jangka Pendek
            ['bumd_id' => 3, 'rekening2_id' => 4, 'kode' => '01', 'nama' => 'Hutang Usaha'],
            ['bumd_id' => 3, 'rekening2_id' => 4, 'kode' => '02', 'nama' => 'Hutang Non Usaha'],
            ['bumd_id' => 3, 'rekening2_id' => 4, 'kode' => '03', 'nama' => 'Beban Yang Masih Harus Dibayar'],
            ['bumd_id' => 3, 'rekening2_id' => 4, 'kode' => '04', 'nama' => 'Hutang Pajak'],
            ['bumd_id' => 3, 'rekening2_id' => 4, 'kode' => '05', 'nama' => 'Hutang Jangka Panjang Jatuh Tempo'],
            ['bumd_id' => 3, 'rekening2_id' => 4, 'kode' => '06', 'nama' => 'Kewajiban Jangka Pendek Lainnya'],

            // Kewajiban Lainnya
            ['bumd_id' => 3, 'rekening2_id' => 6, 'kode' => '01', 'nama' => 'Pendapatan Yang Ditangguhkan'],
            ['bumd_id' => 3, 'rekening2_id' => 6, 'kode' => '02', 'nama' => 'Dana Sosial Pendidikan'],
            ['bumd_id' => 3, 'rekening2_id' => 6, 'kode' => '01', 'nama' => 'Jasa Produksi'],

            // Ekuitas
            ['bumd_id' => 3, 'rekening2_id' => 7, 'kode' => '01', 'nama' => 'Modal Dasar'],
            ['bumd_id' => 3, 'rekening2_id' => 7, 'kode' => '02', 'nama' => 'Modal Penyertaan'],
            ['bumd_id' => 3, 'rekening2_id' => 7, 'kode' => '03', 'nama' => 'Modal Hadiah'],
            ['bumd_id' => 3, 'rekening2_id' => 7, 'kode' => '04', 'nama' => 'Modal Donasi'],
            ['bumd_id' => 3, 'rekening2_id' => 7, 'kode' => '05', 'nama' => 'Cadangan'],
            ['bumd_id' => 3, 'rekening2_id' => 7, 'kode' => '06', 'nama' => 'Saldo Laba Setelah Cadangan'],

            // Pendapatan Operasional
            ['bumd_id' => 3, 'rekening2_id' => 8, 'kode' => '01', 'nama' => 'Pendapatan Retribusi'],
            ['bumd_id' => 3, 'rekening2_id' => 8, 'kode' => '02', 'nama' => 'Pendapatan Administrasi'],
            ['bumd_id' => 3, 'rekening2_id' => 8, 'kode' => '03', 'nama' => 'Pendapatan Sewa'],
            ['bumd_id' => 3, 'rekening2_id' => 8, 'kode' => '04', 'nama' => 'Pendapatan Operasional Lainnya'],

            // Beban Operasional
            ['bumd_id' => 3, 'rekening2_id' => 9, 'kode' => '01', 'nama' => 'Beban Operasional Kantor'],
            ['bumd_id' => 3, 'rekening2_id' => 9, 'kode' => '02', 'nama' => 'Beban Operasional Pasar'],

            // Pendapatan/Beban Non Operasional
            ['bumd_id' => 3, 'rekening2_id' => 11, 'kode' => '01', 'nama' => 'Pendapatan Lain-lain'],
            ['bumd_id' => 3, 'rekening2_id' => 11, 'kode' => '02', 'nama' => 'Biaya Lain-lain'],




            // PERUSAHAAN DAERAH PEMBANGUNAN KOTA CIREBON
            // Aset Lancar
            ['bumd_id' => 4, 'rekening2_id' => 1, 'kode' => '01', 'nama' => 'Kas dan Setara Kas'],
            ['bumd_id' => 4, 'rekening2_id' => 1, 'kode' => '02', 'nama' => 'Deposito Berjangka'],
            ['bumd_id' => 4, 'rekening2_id' => 1, 'kode' => '03', 'nama' => 'Piutang'],
            ['bumd_id' => 4, 'rekening2_id' => 1, 'kode' => '04', 'nama' => 'Cadangan Penghapusan Piutang'],
            ['bumd_id' => 4, 'rekening2_id' => 1, 'kode' => '05', 'nama' => 'Piutang Lainnya'],
            ['bumd_id' => 4, 'rekening2_id' => 1, 'kode' => '06', 'nama' => 'Persediaan Tanah'],

            // Aset Tidak Lancar
            ['bumd_id' => 4, 'rekening2_id' => 2, 'kode' => '01', 'nama' => 'Bangunan'],
            ['bumd_id' => 4, 'rekening2_id' => 2, 'kode' => '02', 'nama' => 'Inventaris'],
            ['bumd_id' => 4, 'rekening2_id' => 2, 'kode' => '03', 'nama' => 'Kendaraan'],
            ['bumd_id' => 4, 'rekening2_id' => 2, 'kode' => '04', 'nama' => 'Akumulasi Penyusutan'],

            // Aset Lain-lain
            ['bumd_id' => 4, 'rekening2_id' => 3, 'kode' => '01', 'nama' => 'Uang Muka Setoran Laba'],
            ['bumd_id' => 4, 'rekening2_id' => 3, 'kode' => '02', 'nama' => 'Uang Muka Pembelian Tanah'],
            ['bumd_id' => 4, 'rekening2_id' => 3, 'kode' => '03', 'nama' => 'Aktiva Lain-lain'],

            // Kewajiban Jangka Pendek
            ['bumd_id' => 4, 'rekening2_id' => 4, 'kode' => '01', 'nama' => 'Biaya Yang Masih Harus Dibayar'],
            ['bumd_id' => 4, 'rekening2_id' => 4, 'kode' => '02', 'nama' => 'Hutang Pajak Bumi dan Bangunan'],
            ['bumd_id' => 4, 'rekening2_id' => 4, 'kode' => '03', 'nama' => 'Hutang Jasa Produksi'],
            ['bumd_id' => 4, 'rekening2_id' => 4, 'kode' => '04', 'nama' => 'Hutang Jangka Pendek Lainnya'],

            // Kewajiban Lainnya
            ['bumd_id' => 4, 'rekening2_id' => 6, 'kode' => '01', 'nama' => 'Pendapatan Dimuka'],
            ['bumd_id' => 4, 'rekening2_id' => 6, 'kode' => '02', 'nama' => 'Dana Kesejahteraan'],

            // Ekuitas
            ['bumd_id' => 4, 'rekening2_id' => 7, 'kode' => '01', 'nama' => 'Modal'],
            ['bumd_id' => 4, 'rekening2_id' => 7, 'kode' => '02', 'nama' => 'Cadangan Tujuan'],
            ['bumd_id' => 4, 'rekening2_id' => 7, 'kode' => '03', 'nama' => 'Cadangan Umum'],
            ['bumd_id' => 4, 'rekening2_id' => 7, 'kode' => '04', 'nama' => 'Dana Selisih Tanah'],
            ['bumd_id' => 4, 'rekening2_id' => 7, 'kode' => '05', 'nama' => 'Laba (Rugi) Tahun Berjalan'],
            ['bumd_id' => 4, 'rekening2_id' => 7, 'kode' => '06', 'nama' => 'Saldo Laba Setelah Cadangan'],

            // Pendapatan Operasional
            ['bumd_id' => 4, 'rekening2_id' => 8, 'kode' => '01', 'nama' => 'Sewa Rumah Susun'],
            ['bumd_id' => 4, 'rekening2_id' => 8, 'kode' => '02', 'nama' => 'Sewa Tanah'],
            ['bumd_id' => 4, 'rekening2_id' => 8, 'kode' => '03', 'nama' => 'Jasa Administrasi'],
            ['bumd_id' => 4, 'rekening2_id' => 8, 'kode' => '04', 'nama' => 'Operasional Lainnya'],
            ['bumd_id' => 4, 'rekening2_id' => 8, 'kode' => '05', 'nama' => 'Jasa-jasa Lainnya'],

            // Beban Operasional
            ['bumd_id' => 4, 'rekening2_id' => 9, 'kode' => '01', 'nama' => 'Biaya Pertanahan'],
            ['bumd_id' => 4, 'rekening2_id' => 9, 'kode' => '02', 'nama' => 'Biaya Jasa Konstruksi'],

            // Beban Umum dan Administrasi
            ['bumd_id' => 4, 'rekening2_id' => 10, 'kode' => '01', 'nama' => 'Beban Umum dan Administrasi'],
            ['bumd_id' => 4, 'rekening2_id' => 10, 'kode' => '02', 'nama' => 'Biaya Tenaga Kerja'],

            // Pendapatan/Beban Non Operasional
            ['bumd_id' => 4, 'rekening2_id' => 11, 'kode' => '01', 'nama' => 'Pendapatan Non Operasional'],
            ['bumd_id' => 4, 'rekening2_id' => 11, 'kode' => '02', 'nama' => 'Biaya Non Operasional'],




            // PERUSAHAAN UMUM DAERAH FARMASI CIREMAI KOTA CIREBON
            // Aset Lancar
            ['bumd_id' => 5, 'rekening2_id' => 1, 'kode' => '01', 'nama' => 'Kas dan Setara Kas'],
            ['bumd_id' => 5, 'rekening2_id' => 1, 'kode' => '02', 'nama' => 'Piutang Usaha'],
            ['bumd_id' => 5, 'rekening2_id' => 1, 'kode' => '03', 'nama' => 'Cad. Penghapusan Piutang'],
            ['bumd_id' => 5, 'rekening2_id' => 1, 'kode' => '04', 'nama' => 'Pajak Dibayar Dimuka'],
            ['bumd_id' => 5, 'rekening2_id' => 1, 'kode' => '05', 'nama' => 'Persediaan Obat dan Alkes'],

            // Aset Tidak Lancar
            ['bumd_id' => 5, 'rekening2_id' => 2, 'kode' => '01', 'nama' => 'Gedung/Bangunan'],
            ['bumd_id' => 5, 'rekening2_id' => 2, 'kode' => '02', 'nama' => 'Kendaraan'],
            ['bumd_id' => 5, 'rekening2_id' => 2, 'kode' => '03', 'nama' => 'Inventaris Kantor'],
            ['bumd_id' => 5, 'rekening2_id' => 2, 'kode' => '04', 'nama' => 'Peralatan'],
            ['bumd_id' => 5, 'rekening2_id' => 2, 'kode' => '05', 'nama' => 'Akumulasi Penyusutan'],

            // Kewajiban Jangka Pendek
            ['bumd_id' => 5, 'rekening2_id' => 4, 'kode' => '01', 'nama' => 'Hutang Dagang Usaha'],
            ['bumd_id' => 5, 'rekening2_id' => 4, 'kode' => '02', 'nama' => 'Hutang ke Pihak Ketiga'],
            ['bumd_id' => 5, 'rekening2_id' => 4, 'kode' => '03', 'nama' => 'Hutang Pajak'],
            ['bumd_id' => 5, 'rekening2_id' => 4, 'kode' => '04', 'nama' => 'Hutang Honor'],
            ['bumd_id' => 5, 'rekening2_id' => 4, 'kode' => '05', 'nama' => 'Hutang Kewajiban Setor Pemkot'],
            ['bumd_id' => 5, 'rekening2_id' => 4, 'kode' => '06', 'nama' => 'Hutang Jasa Produksi'],
            ['bumd_id' => 5, 'rekening2_id' => 4, 'kode' => '07', 'nama' => 'Hutang Dana Sosial'],

            // Ekuitas
            ['bumd_id' => 5, 'rekening2_id' => 7, 'kode' => '01', 'nama' => 'Modal'],
            ['bumd_id' => 5, 'rekening2_id' => 7, 'kode' => '02', 'nama' => 'Cadangan Tujuan'],
            ['bumd_id' => 5, 'rekening2_id' => 7, 'kode' => '03', 'nama' => 'Cadangan Umum'],
            ['bumd_id' => 5, 'rekening2_id' => 7, 'kode' => '04', 'nama' => 'Rugi Laba Tahun Berjalan'],
            ['bumd_id' => 5, 'rekening2_id' => 7, 'kode' => '05', 'nama' => 'Akumulasi Kerugian'],
            ['bumd_id' => 5, 'rekening2_id' => 7, 'kode' => '06', 'nama' => 'Saldo Laba Setelah Cadangan'],

            // Pendapatan Operasional
            ['bumd_id' => 5, 'rekening2_id' => 8, 'kode' => '01', 'nama' => 'Pendapatan Usaha'],
            ['bumd_id' => 5, 'rekening2_id' => 8, 'kode' => '02', 'nama' => 'Potongan Pendapatan Usaha'],

            // Beban Operasional
            ['bumd_id' => 5, 'rekening2_id' => 9, 'kode' => '01', 'nama' => 'Harga Pokok Penjualan'],
            ['bumd_id' => 5, 'rekening2_id' => 9, 'kode' => '02', 'nama' => 'Biaya Penjualan'],

            // Beban Umum dan Administrasi
            ['bumd_id' => 5, 'rekening2_id' => 10, 'kode' => '01', 'nama' => 'Beban Umum dan Administrasi'],

            // Pendapatan/Beban Non Operasional
            ['bumd_id' => 5, 'rekening2_id' => 11, 'kode' => '01', 'nama' => 'Pendapatan Non Operasional'],
            ['bumd_id' => 5, 'rekening2_id' => 11, 'kode' => '02', 'nama' => 'Biaya Non Operasional'],
        ];


        App\Models\Rekening3::insert($data);
    }
}
