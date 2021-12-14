<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $table = 'packages';

    protected $fillable = [
        'package_name',
        'package_type',
        'amount',
        'referrel_income',
        'bonus',
        'insurance',
        'increative_gift',
        'validity',
        'must_ref',
        'must_days',
        'wlimit',
        'tlimit',
        'wmin',
        'tmin',
        'package_banner',
        'g_income_first ',
        'g_income_second',
        'g_income_third',
        'g_income_fourth',
        'g_income_fifth',
        'g_income_six',
        'g_income_seven',
        'g_income_eight',
        'g_income_nine',
        'g_income_ten',
        'g_income_eleven',
        'g_income_twelve',
        'g_income_thirteen',
        'g_income_fourteen',
        'g_income_fifteen',
        'g_income_sixteen',
        'g_income_seventeen',
        'g_income_eighteen',
        'g_income_nineteen',
        'g_income_twenty',
        'status',
        'created_at',
        'updated_at',
    ];
}
