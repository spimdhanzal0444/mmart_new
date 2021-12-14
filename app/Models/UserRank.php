<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRank extends Model
{
    use HasFactory;

    protected $table = 'user_ranks';

    protected $fillable = [
        'user_id',
        'rank_id',
        'credit',
        'date',
        'status',
        'created_at',
        'updated_at',
    ];
}
