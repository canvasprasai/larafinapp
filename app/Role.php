<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Role extends Model
{
    use softDeletes;
    
    protected $dates = ['deleted_at'];
    //
}
