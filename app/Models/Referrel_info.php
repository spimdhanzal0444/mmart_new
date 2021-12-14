<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Referrel_info extends Model
{
    use HasFactory;
    protected $table = 'referrel_infos';

    protected $fillable = [
        'user_id',
        'referrel_id',
        'first_generation',
        'second_generation',
        'third_generation',
        'fourth_generation',
        'fifth_generation',
        'six_generation',
        'seven_generation',
        'eight_generation',
        'nine_generation',
        'ten_generation',
        'eleven_generation',
        'twelve_generation',
        'thirteen_generation',
        'fourteen_generation',
        'fifteen_generation',
        'sixteen_generation',
        'seventeen_generation',
        'eighteen_generation',
        'nineteen_generation',
        'twenty_generation',
        'created_at',
        'updated_at',
    ];
}
