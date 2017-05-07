<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regiscourse extends Model
{
    protected $table = 'regiscourse';
    protected $fillable = ['userid','courseid'];
    protected $visible = ['userid','courseid'];
}
