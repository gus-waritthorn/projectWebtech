<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Code extends Model
{
 protected $table = 'code';
 protected $fillable = ['code','idCourse'];
 protected $visible = ['code','idCourse'];
}
