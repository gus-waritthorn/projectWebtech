<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class updatepromotion extends Model
{
    protected $table = 'promotion';
    protected $fillable = ['path'];
    protected $visible = ['path'];
}
