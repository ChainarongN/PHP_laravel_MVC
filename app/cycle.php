<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cycle extends Model
{
    protected $table = 'cycle';
    protected $primaryKey  = 'cy_id';
    protected $fillable = ['cy_time'];
}
