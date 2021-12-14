<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    use HasFactory;

    protected $table = 'ranks';
    protected $fillable = [
        'rank_section_normal_title',
        'rank_section_bold_title',
        'rank1_circle_text',
        'rank1_item_text',
        'rank2_circle_text',
        'rank2_item_text',
        'rank3_circle_text',
        'rank3_item_text',
        'rank4_circle_text',
        'rank4_item_text',
    ];

    public $timestamps = false;

    protected $casts = [
        'rank1_item_text' => 'array',
        'rank2_item_text' => 'array',
        'rank3_item_text' => 'array',
        'rank4_item_text' => 'array',
    ];
}
