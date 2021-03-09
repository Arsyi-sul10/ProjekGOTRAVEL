<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class grupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('groups')->insert([
            ['user_id' => 3, 'locationId' => 1],
            ['user_id' => 4, 'locationId' => 1],

            ['user_id' => 5, 'locationId' => 2],
            ['user_id' => 6, 'locationId' => 2],
            ['user_id' => 7, 'locationId' => 2],

            ['user_id' => 3, 'locationId' => 3],
            ['user_id' => 5, 'locationId' => 3],
        ]);
    }
}
