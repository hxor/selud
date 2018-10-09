<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BumdTableSeeder::class);
        $this->call(PajakTableSeeder::class);
        $this->call(Rekening1TableSeeder::class);
        $this->call(Rekening2TableSeeder::class);
        $this->call(Rekening3TableSeeder::class);
        $this->call(RkapTableSeeder::class);
        $this->call(NeracaTableSeeder::class);
        $this->call(LarugiTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
