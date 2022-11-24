<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companies')->insert([
            'firstnama' => 'Vindra Arya ',
            'lastnama' => 'Yulian',
            'email' => 'vindra@gmail.com',
            'nohp' => '083104788904',
        ]);
    }
}
