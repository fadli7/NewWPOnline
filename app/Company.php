<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['name'];

    public function workingPermits()
    {
        return $this->hasMany('App\WorkingPermit');
    }
}
