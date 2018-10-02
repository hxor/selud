<?php

use Illuminate\Database\Seeder;

class BumdTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['nama' => 'Perusahaan Umum Daerah Air Minum Kota Cirebon', 'alamat' => 'Kota Cirebon', 'email' => 'pdam@mail.com', 'telepon' => '0231999'],
            ['nama' => 'Perusahaan Daerah BPR Bank Cirebon', 'alamat' => 'Kota Cirebon', 'email' => 'bpr@mail.com', 'telepon' => '0231999'],
            ['nama' => 'Perusahaan Umum Daerah Pasar Berintan Kota Cirebon', 'alamat' => 'Kota Cirebon', 'email' => 'pdpb@mail.com', 'telepon' => '0231999'],
            ['nama' => 'Perusahaan Daerah Pembangunan Kota Cirebon', 'alamat' => 'Kota Cirebon', 'email' => 'pdp@mail.com', 'telepon' => '0231999'],
            ['nama' => 'Perusahaan Umum Daerah Farmasi Ciremai Kota Cirebon', 'alamat' => 'Kota Cirebon', 'email' => 'pdam@mail.com', 'telepon' => '0231999'],
        ];

        App\Models\Bumd::insert($data);
    }
}
