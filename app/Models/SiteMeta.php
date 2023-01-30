<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteMeta extends Model
{
    protected $guarded = [];

    public function setMeta_keyAttribute($value)
    {
        $this->attributes['meta_key'] = lcfirst($value);
    }

    public function setMeta_valueAttribute($value)
    {
        $this->attributes['meta_value'] = lcfirst($value);
    }
}
