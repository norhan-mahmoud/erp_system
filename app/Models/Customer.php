<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'facebook_profile_url',
        'other_url',
        'opening_balance',
        'balance_type',
    ];

    public function addresses(): HasMany
    {
        return $this->hasMany(CustomerAddress::class);
    }
}
