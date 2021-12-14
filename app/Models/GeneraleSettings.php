<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GeneraleSettings extends Model
{
    use HasFactory;

    protected $table = 'generale_settings';

    protected $fillable = [
        'logo',
        'sitetitle',
        'metatitle',
        'metadescription',
        'metakeyword',
        'metaauthor',
        'favicon',
        'banner_normal_text',
        'banner_normal_text2',
        'banner_bold_text',
        'banner_image',
        'created_at',
        'updated_at',
    ];
}
