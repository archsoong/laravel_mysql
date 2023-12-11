<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
  protected $table = "Film"; // 不這樣寫會自動用 "Films" 替代 
}