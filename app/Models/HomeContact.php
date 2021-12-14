<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeContact extends Model
{
    use HasFactory;

    protected $table = 'home_contacts';

    protected $fillable = [
        'address',
        'address_title',
        'address_icon',
        'email',
        'email_address',
        'email_icon',
        'call_text',
        'number_one',
        'number_two',
        'call_icon',
    ];

    public $timestamps = false;
}
