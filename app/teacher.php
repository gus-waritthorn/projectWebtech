<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
		protected $table = 'teacher';
    protected $fillable = ['path','name','description'];
    protected $visible = ['path','name', 'description'];
}
