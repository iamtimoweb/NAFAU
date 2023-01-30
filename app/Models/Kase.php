<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Kase extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public static $rules = [
        'member_id' => 'bail|required|numeric|exists:members,id',
        'kase_kgs' => 'bail|required|integer',
        'cutting' => 'bail|required|integer',
        'price' => 'bail|required|integer',
        'reason' => 'bail|required',
        'milling_charges' => 'bail|required|integer',
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
        $get_kgs = $this->kase_kgs - $this->cutting;
        $amount = $this->price * $get_kgs;
        $total_amount = $amount - $this->milling_charges;
        return $total_amount;
    }
}
