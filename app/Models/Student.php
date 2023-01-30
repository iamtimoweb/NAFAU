<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    protected $guarded = [];

    public static $messages = [
        'image.max' => 'The :attribute size must not exceed 1MB.',
        'image.required' => 'select an :attribute for the user',
        'image.dimensions' => 'The :attribute dimensions must be minimum 250 X 250.',
    ];

    public static $rules = [
        'surname' => 'bail|required|string|min:3|max:30',
        'other_names' => 'bail|required|string|min:3|max:30',
        'date_of_birth' => 'bail|nullable|date',
        'age' => 'bail|nullable|numeric',
        'student_id_no' => 'bail|nullable|string|max:10|unique:students,student_id_no',
        'nationality' => 'bail|nullable|string|min:3|max:30',
        'religion' => 'bail|nullable|string|min:3|max:30',
        'location' => 'bail|nullable|string|min:3|max:30',
        'date_of_entry' => 'bail|nullable|date',
        'relationship_with_student' => 'bail|required|string',
        'image' => 'bail|nullable|image|mimes:jpeg,jpg,png|max:1024|dimensions:min_width=250,min_height=250',
        'member_id' => 'bail|required|numeric|exists:members,id',
        'entry_id' => 'bail|required|numeric|exists:entries,id'
    ];

    public function setSurnameAttribute($value)
    {
        $this->attributes['surname'] = ucfirst($value);
    }

    public function setOtherNamesAttribute($value)
    {
        $this->attributes['other_names'] = ucwords($value);
    }

    public function setNationalityAttribute($value)
    {
        $this->attributes['nationality'] = ucfirst($value);
    }

    public function setReligionAttribute($value)
    {
        $this->attributes['religion'] = ucfirst($value);
    }

    public function setLocationAttribute($value)
    {
        $this->attributes['location'] = ucfirst($value);
    }

    public function getImagePathAttribute()
    {
        return asset('uploads/students/' . $this->image);
    }
    public function getFullNameAttribute()
    {
        return "{$this->surname} {$this->other_names}";
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
    public function entry()
    {
        return $this->belongsTo(Entry::class);
    }
}
