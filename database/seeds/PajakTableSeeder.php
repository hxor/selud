<?php

use Illuminate\Database\Seeder;

class PajakTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['tanggal' => '2017-01-01', 'nilai' => 5, 'status' => false],
            ['tanggal' => '2018-01-01', 'nilai' => 10, 'status' => true],
        ];

        App\Models\Pajak::insert($data);
    }
}
