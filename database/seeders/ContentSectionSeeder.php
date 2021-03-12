<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('content_sections')->insert([
            [
                'section_name' => 'about',
                'section_image' => null
            ],
            [
                'section_name' => 'how_to_help',
                'section_image' => null
            ],
        ]);
    }
}
