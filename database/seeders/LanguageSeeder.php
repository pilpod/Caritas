<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->insert([
            [
                'language_code' => 'es',
                'language_name' => 'Castellano'
            ],
            [
                'language_code' => 'cat',
                'language_name' => 'Catalán'
            ],
        ]);
    }
}
