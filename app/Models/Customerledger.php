<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customerledger extends Model
{
    use HasFactory;

    protected $table = 'customerledgers';

    protected $fillable = [
        'customer_id',
        'agent_id',
        'admin_id',
        'com_cus_id',
        'date',
        'particulation',
        'reason',
        'credit',
        'debit',
        'created_at',
        'updated_at',
    ];
}
