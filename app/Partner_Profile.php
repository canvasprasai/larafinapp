<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Partner_Profile extends Model
{
    use softDeletes;
    
    protected $dates = ['deleted_at'];
    //
}
