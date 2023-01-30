<?php

namespace App;

use App\Models\Credit;
use App\Models\Education;
use App\Models\Entry;
use App\Models\Faq;
use App\Models\FaqCategory;
use App\Models\Kase;
use App\Models\Kiboko;
use App\Models\Loan;
use App\Models\Member;
use App\Models\Payment;
use App\Models\Redcherry;
use App\Models\Slider;
use App\Models\Student;
use App\Models\Testimonial;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Activitylog\Traits\LogsActivity;


class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static $rules = [
        'firstname' => 'bail|required|string|min:3|max:15',
        'lastname' => 'bail|required|string|min:3|max:15',
        'email' => 'bail|required|string|email|unique:users,email|max:30',
        'password' => 'bail|required|string|min:8|max:100|confirmed',
        'password_confirmation' => 'required',
        'phone_no' => 'required|unique:users,phone_no|min:10|max:10|regex:/^[0-9]{10,10}$/',
        'image' => 'image|mimes:jpeg,jpg,png|max:1024|dimensions:min_width=250,min_height=250'
    ];

    public static $messages = [
        'image.max' => 'The :attribute size must not exceed 1MB.',
        'image.required' => 'select an :attribute for the user',
        'image.dimensions' => 'The :attribute dimensions must be minimum 250 X 250.',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    /*protected $casts = [
        'email_verified_at' => 'datetime',
    ];*/

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = Hash::needsRehash($value) ? Hash::make($value) : $value;
    }

    public function setFirstnameAttribute($value)
    {
        $this->attributes['firstname'] = ucfirst($value);
    }

    public function setLastnameAttribute($value)
    {
        $this->attributes['lastname'] = ucfirst($value);
    }

    public function setPositionAttribute($value)
    {
        $this->attributes['position'] = ucwords($value);
    }

    public function getFullNameAttribute()
    {
        return "{$this->firstname} {$this->lastname}";
    }

    public function getImagePathAttribute()
    {
        return asset('uploads/users/' . $this->image);
    }

    /*********************************
     * RELATIONSHIPS
     **********************************/

    public function categories()
    {
        return $this->hasMany(Category::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function sliders()
    {
        return $this->hasMany(Slider::class);
    }

    public function testimonials()
    {
        return $this->hasMany(Testimonial::class);
    }

    public function education()
    {
        return $this->hasMany(Education::class);
    }

    public function members()
    {
        return $this->hasMany(Member::class);
    }

    public function entry()
    {
        return $this->hasMany(Entry::class);
    }

    public function redCherries()
    {
        return $this->hasMany(Redcherry::class);
    }
    public function kiboko()
    {
        return $this->hasMany(Kiboko::class);
    }
    public function kase()
    {
        return $this->hasMany(Kase::class);
    }

}
