<?php

namespace App\Models;

use App\Events\checkLoanStatus;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    protected $guarded = [];

    public static $rules = [
        'amount' => 'bail|required|integer',
        'member_id' => 'bail|required|numeric|exists:members,id'
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getAmountPaidAttribute()
    {
        return $this->payment()->sum('amount');
    }

    public function getBalanceAttribute()
    {
        return $this->attributes['amount'] - $this->getAmountPaidAttribute();
    }
}
