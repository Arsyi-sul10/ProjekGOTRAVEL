<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class locationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            ['location_name' => 'GN. Bromo', 'location_city' => 'Malang', 'user_id' => 1, 'fasilitas' => 'free snacks, makan siang, transportasi PP, Biaya TOL, biaya tip, biaya hotel', 'kapasitas' => 20, 'start_travel' => '2020-01-01', 'end_travel' => '2020-01-07', 'meeting_point' => 'Jakarta', 'link_wa' => 'https://chat.whatsapp.com/CllAfPUOVjb2Gotyy3JkTA'],
            ['location_name' => 'GN. Gede Pangrango', 'location_city' => 'Bogor', 'user_id' => 2, 'fasilitas' => 'free snacks, makan siang, transportasi PP, Biaya TOL, biaya tip, biaya hotel', 'kapasitas' => 10, 'start_travel' => '2020-01-01', 'end_travel' => '2020-01-09', 'meeting_point' => 'Jakarta', 'link_wa' => 'https://chat.whatsapp.com/F0Zd3VlQHb83IOCsvmuGTQ'],
            ['location_name' => 'Pantai Kuta', 'location_city' => 'Kuta', 'user_id' => 1, 'fasilitas' => 'free snacks, makan siang, transportasi PP, Biaya TOL, biaya tip, biaya hotel', 'kapasitas' => 40, 'start_travel' => '2020-01-01', 'end_travel' => '2020-01-10', 'meeting_point' => 'Jakarta', 'link_wa' => 'https://chat.whatsapp.com/Hke7aA5wyC5LrBUubb3je4']
        ]);
    }
}
