<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Creative extends Model
{
    use HasFactory;
    protected $table = 'creatives';
    protected $fillable = [
        'image',
        'title_normal_text',
        'title_bold_text',
        'item1_icon',
        'item1_title',
        'item1_description',
        'item2_icon',
        'item2_title',
        'item2_description',
        'item3_icon',
        'item3_title',
        'item3_description',
        'item4_icon',
        'item4_title',
        'item4_description',
        'created_at',
        'updated_at',
    ];

}
