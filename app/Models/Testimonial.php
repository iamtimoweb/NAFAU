<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $guarded = [];


    public static $messages = [
        'image.max' => 'The :attribute size must not exceed 2MB.',
        'image.required' => 'select an :attribute for the testimonial',
        'image.dimensions' => 'The :attribute dimensions must be minimum 70 X 70.',
    ];
    /**
     * Validation rules for this model
     */
    public static $rules = [
        'member' => 'required|min:3:max:255',
        'testimony' => 'required',
        'image' => 'required|image|mimes:jpeg,jpg,png|max:2048|dimensions:min_width=100,min_height=100'
    ];

    /**
     * Get the user that owns the slider.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function setMemberAttribute($value)
    {
        $this->attributes['member'] = ucwords($value);
    }

    public function getImagePathAttribute()
    {
        return asset('uploads/testimonials/' . $this->image);
    }
}
