<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Kiboko extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public static $rules = [
        'member_id' => 'bail|required|numeric|exists:members,id',
        'kiboko_kgs' => 'bail|required|integer',
        'reason' => 'bail|required',
        'price' => 'bail|required|integer',
    ];

    /*********************************
     * RELATIONSHIPS
     **********************************/
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }

    /*********************************
     * calculations
     **********************************/
    public function getAmountAttribute()
    {
        return $this->kiboko_kgs * $this->price;
    }
}
