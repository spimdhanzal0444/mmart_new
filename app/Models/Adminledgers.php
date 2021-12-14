<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adminledgers extends Model
{
    use HasFactory;

    protected $table = 'adminledgers';

    protected $fillable = [
        'customer_id',
        'admin_id',
        'date',
        'particulation',
        'reason',
        'credit',
        'debit',
        'created_at',
        'updated_at',
    ];
}
