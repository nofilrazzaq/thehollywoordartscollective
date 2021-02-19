<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LandingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('landings')->insert([
            'image_description' => 'Pictured above is the street view rendering of Hollywood Arts Collective.',
            'info_section_headline_line_1' => 'Affordable Senior (62+) Housing Community',
            'info_section_headline_line_2' => 'Opening Early 2022 in Los Angeles, California.',
            'info_section_units' => '26',
            'info_section_studios_count' => '20',
            'info_section_bedroom_1_count' => '70',
            'info_section_bedroom_2_count' => '40',
            'info_section_bedroom_3_count' => '22',
            'info_section_studios_description' => 'STUDIOS',
            'info_section_bedroom_1_description' => '1-BEDROOMS',
            'info_section_bedroom_2_description' => '2-BEDROOMS',
            'info_section_bedroom_3_description' => '3-BEDROOMS',
            'info_section_income_limits' => 'Income limits and rents are subject to change due to strict adherence to program guidelines.',
            'info_section_information_hotline' => '(888) 368-1999',
            'info_section_tty' => '1 (800) 855-7100',
            'info_section_units_description' => 'Units will be equipped with a full kitchen (range/oven, refrigerator, etc.) and tub/shower combination in the bathroom. Extensive indoor recreational amenities will be provided at the property including a computer room, fitness room, laundry facilities, and an on-site management office.',
            'map_section_name' => 'Hollywood Arts Collective',
            'map_section_address' => '1630 Schrader Blvd, Los Angeles, CA 90028',
            'map_section_description' => 'The map above shows where Hollywood Arts Collective will be located in Los Angeles.            ',
            'interest_section_headline' => 'Join our interest list for the latest news.',
            'interest_section_disclaimer' => 'Inclusion on the interest list does not provide priority in any manner for rental application or leasing.',
        ]);
    }
}
