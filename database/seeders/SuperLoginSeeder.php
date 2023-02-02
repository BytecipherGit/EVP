<?php

namespace Database\Seeders;
use App\Models\Superlogin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SuperLoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('superadmins')->insert([
            'name' => 'admin',
            'email' => 'jharshita259@gmail.com',
            'password' => Hash::make('1234'),
        ]);
    }
}
