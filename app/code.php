<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class code extends Model
{
 protected $table = 'code';
 protected $fillable = ['code','idCourse'];
 protected $visible = ['code','idCourse'];
}
