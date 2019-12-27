<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password'
    ];

    public $timestamps=false;

}
