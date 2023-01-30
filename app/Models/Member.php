<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Member extends Model
{
    protected $guarded = [];

    public static $messages = [
        'image.max' => 'The :attribute size must not exceed 1MB.',
        'image.required' => 'select an :attribute for the user',
        'image.dimensions' => 'The :attribute dimensions must be minimum 250 X 250.',
    ];

    public static $rules = [
        'farmer_identification_no' => 'bail|required|string|unique:members,farmer_identification_no|max:30',
        'firstname' => 'bail|required|string|min:3|max:30',
        'lastname' => 'bail|required|string|min:3|max:30',
        'district' => 'bail|required|string|min:3|max:30',
        'county' => 'bail|required|string|min:3|max:30',
        'parish' => 'bail|required|string|min:3|max:30',
        'village' => 'bail|required|string|min:3|max:30',
        'gender' => 'bail|required|string',
        'date_of_birth' => 'bail|nullable|date',
        'age' => 'bail|nullable|numeric',
        'phone' => 'bail|nullable|string|unique:members,phone|min:10|max:10|regex:/^[0-9]{10,10}$/',
        'nin' => 'bail|nullable|string|min:14|max:14|unique:members,nin',
        'education_levels' => 'bail|required|array',
        'profession' => 'bail|nullable|string|min:3|max:30',
        'occupation' => 'bail|nullable|string|min:3|max:30',
        'acrage' => 'bail|nullable|numeric',
        'lat' => 'bail|nullable|numeric',
        'lng' => 'bail|nullable|numeric',
        'no_of_coffee_trees' => 'bail|nullable|integer|numeric',
        'coffee_type' => 'bail|required|string',
        'no_of_dependants' => 'bail|nullable|integer|numeric',
        'image' => 'image|nullable|mimes:jpeg,jpg,png|max:1024|dimensions:min_width=250,min_height=250'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFullNameAttribute()
    {
        return "{$this->firstname} {$this->lastname}";
    }

    public function getImagePathAttribute()
    {
        return asset('uploads/members/' . $this->image);
    }

    /*****************************
     * Mutators
     ******************************/
    public function setFirstNameAttribute($value)
    {
        $this->attributes['firstname'] = ucfirst($value);
    }

    public function setLastNameAttribute($value)
    {
        $this->attributes['lastname'] = ucfirst($value);
    }

    public function setDistrictAttribute($value)
    {
        $this->attributes['district'] = ucfirst($value);
    }

    public function setCountyAttribute($value)
    {
        $this->attributes['county'] = ucfirst($value);
    }

    public function setParishAttribute($value)
    {
        $this->attributes['parish'] = ucfirst($value);
    }

    public function setVillageAttribute($value)
    {
        $this->attributes['village'] = ucfirst($value);
    }

    public function setProfessionAttribute($value)
    {
        $this->attributes['profession'] = ucwords($value);
    }

    public function setOccupationAttribute($value)
    {
        $this->attributes['occupation'] = ucfirst($value);
    }

    /*****************************
     * Relationships
     ******************************/

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function educationLevel()
    {
        return $this->belongsToMany(Education::class);
    }

    public function redCherries()
    {
        return $this->hasMany(Redcherry::class);
    }
    public function kibokos()
    {
        return $this->hasMany(Kiboko::class);
    }
    public function kases()
    {
        return $this->hasMany(Kase::class);
    }
}
