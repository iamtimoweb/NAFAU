<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{

    protected $guarded = [];

    public static $messages = [
        'image.required' => 'Select an :attribute for the slider',
        'image.max' => 'The :attribute size must not exceed 2MB.',
        'image.dimensions' => 'The :attribute dimensions must be minimum 1600 X 800.',
        'title.required' => 'The slider :attribute is required',
        'txt.required' => 'The slider :attribute is required'
    ];
    public static $rules = [
        'title' => 'bail|required|min:5|max:255',
        'txt' => 'bail|required|min:5|max:500',
        'image' => 'bail|required|image|mimes:jpg,png,jpeg|max:2048|dimensions:min_width=1600,min_height=600'];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = ucwords($value);
    }

    public function setTxtAttribute($value)
    {
        $this->attributes['txt'] = ucfirst($value);
    }

    public function getImagePathAttribute()
    {
        return asset('uploads/sliders/' . $this->image);
    }

    /**
     * Get the user that owns the slider.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
