<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Entry extends Model
{
    protected $guarded = [];

    public static $rules = [
        'class_name' => 'bail|required|string|min:2|max:30|unique:entries,class_name'
    ];

    public function setClassNameAttribute($value)
    {
        $this->attributes['class_name'] = lcfirst($value);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function entry()
    {
        return $this->hasMany(Student::class);
    }
}
