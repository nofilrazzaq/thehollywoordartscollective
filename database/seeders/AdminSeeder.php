<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' =>'Super Admin',
            'email' => 'dvin@tsahousing.com',
            'password' => bcrypt('RTSHadmin5317!')
        ]);
    }
}
