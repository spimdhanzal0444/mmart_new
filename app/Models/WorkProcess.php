<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkProcess extends Model
{
    use HasFactory;

    protected $table = 'work_processes';

    protected $fillable = [
        'image',
        'bg_image',
        'section_title_normal',
        'section_title_bold',
        'section_description',
        'work_item_title1',
        'work_item_desc1',
        'work_item_icon1',
        'work_item_title2',
        'work_item_desc2',
        'work_item_icon2',
        'work_item_title3',
        'work_item_desc3',
        'work_item_icon3',
        'work_item_title4',
        'work_item_desc4',
        'work_item_icon4',
        'video',
        'video_text_1',
        'video_text_2',
    ];

    public $timestamps = false;
}
