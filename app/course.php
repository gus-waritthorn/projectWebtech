<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //
     protected $table = 'course';
    protected $fillable = ['name','numday','price','level','path'];
    protected $visible = ['name','numday','price','level','path'];
}
