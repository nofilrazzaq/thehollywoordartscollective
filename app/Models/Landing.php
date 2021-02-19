<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class Landing extends Authenticatable
{
    use HasApiTokens,HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'image_description',
        'info_section_headline_line_1',
        'info_section_headline_line_2',
        'info_section_units',
        'info_section_studios_count',
        'info_section_bedroom_1_count',
        'info_section_bedroom_2_count',
        'info_section_bedroom_3_count',
        'info_section_studios_description',
        'info_section_bedroom_1_description',
        'info_section_bedroom_2_description',
        'info_section_bedroom_3_description',
        'info_section_income_limits',
        'info_section_information_hotline',
        'info_section_tty',
        'info_section_units_description',
        'map_section_name',
        'map_section_address',
        'map_section_description',
        'interest_section_headline',
        'interest_section_disclaimer',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'created_at'  => 'date:M d, Y',
    ];
}
