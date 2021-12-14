<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'referral_id',
        'referral_code',
        'name',
        'username',
        'phone',
        'balance',
        'insu_bal',
        'purchase_point',
        'purchase_point',
        'referred_by',
        'provider_id',
        'user_type',
        'email',
        'verification_code',
        'new_email_verificiation_code',
        'password',
        'avatar',
        'avatar_original',
        'address',
        'country',
        'city',
        'postal_code',
        'management',
        'banned',
        'cus_payment_status',
        'customer_package_id',
        'activation_date',
        'remaining_uploads',
        'bonus_count',
        'agent_status',
        'last_bonus',
        'team_a',
        'team_b',
        'team_c',
        'tr_income',
        'tg_income',
        'created_at',
        'updated_at',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
