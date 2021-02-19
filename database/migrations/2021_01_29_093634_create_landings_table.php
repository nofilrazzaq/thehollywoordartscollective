<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLandingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('landings', function (Blueprint $table) {
            $table->id();
            $table->longText('image_description');
            $table->longText('info_section_headline_line_1');
            $table->longText('info_section_headline_line_2');
            $table->longText('info_section_units');
            $table->longText('info_section_studios_count');
            $table->longText('info_section_bedroom_1_count');
            $table->longText('info_section_bedroom_2_count');
            $table->longText('info_section_bedroom_3_count');
            $table->longText('info_section_studios_description');
            $table->longText('info_section_bedroom_1_description');
            $table->longText('info_section_bedroom_2_description');
            $table->longText('info_section_bedroom_3_description');
            $table->longText('info_section_income_limits');
            $table->longText('info_section_information_hotline');
            $table->longText('info_section_tty');
            $table->longText('info_section_units_description');
            $table->longText('map_section_name');
            $table->longText('map_section_address');
            $table->longText('map_section_description');
            $table->longText('interest_section_headline');
            $table->longText('interest_section_disclaimer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landings');
    }
}
