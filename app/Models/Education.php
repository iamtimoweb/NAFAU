<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $guarded = [];


    public static $rules = [
        'education_level' => 'bail|required|string|min:3|max:30|unique:education,education_level'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function members()
    {
        return $this->belongsToMany(Member::class);
    }

    public function setEducationLevelAttribute($value)
    {
        $this->attributes['education_level'] = ucfirst($value);
    }
}
