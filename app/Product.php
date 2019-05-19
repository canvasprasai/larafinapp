<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Product extends Model
{
    use softDeletes;
    
    protected $dates = ['deleted_at'];
    //
}
