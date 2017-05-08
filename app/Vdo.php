<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vdo extends Model
{
  protected $table = 'vdo';
  protected $fillable = ['path'];
  protected $visible = ['path'];
}
