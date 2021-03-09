<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ['username' => 'arief', 'email' => 'arief@gmail.com', 'password' => Hash::make('asdasdasd'), 'gender' => 1, 'phone_number' => '081291615545', 'img' => '1609772231.jpg', 'address' => 'ini alamat rumah arief'],
            ['username' => 'kevin', 'email' => 'kevin@gmail.com', 'password' => Hash::make('asdasdasd'), 'gender' => 1, 'phone_number' => '081291615545', 'img' => '1609772231.jpg', 'address' => 'ini alamat rumah kevin'],
            ['username' => 'yohanes', 'email' => 'yohanes@gmail.com', 'password' => Hash::make('asdasdasd'), 'gender' => 1, 'phone_number' => '081291615545', 'img' => '1609772231.jpg', 'address' => 'ini alamat rumah yohanes'],
            ['username' => 'arsyi', 'email' => 'arsyi@gmail.com', 'password' => Hash::make('asdasdasd'), 'gender' => 1, 'phone_number' => '081291615545', 'img' => '1609772231.jpg', 'address' => 'ini alamat rumah arsyi'],
            ['username' => 'denzel', 'email' => 'denzel@gmail.com', 'password' => Hash::make('asdasdasd'), 'gender' => 1, 'phone_number' => '081291615545', 'img' => '1609772231.jpg', 'address' => 'ini alamat rumah denzel'],
            ['username' => 'valeri', 'email' => 'pola@gmail.com', 'password' => Hash::make('asdasdasd'), 'gender' => 1, 'phone_number' => '081291615545', 'img' => '1609772231.jpg', 'address' => 'ini alamat rumah pola'],
            ['username' => 'helen', 'email' => 'helen@gmail.com', 'password' => Hash::make('asdasdasd'), 'gender' => 1, 'phone_number' => '081291615545', 'img' => '1609772231.jpg', 'address' => 'ini alamat rumah helen'],
        ]);
    }
}
