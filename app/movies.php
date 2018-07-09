<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    protected $table = 'movies';
    protected $primaryKey  = 'mo_id';
    protected $fillable = ['mo_name','mo_type','mo_actor','mo_detail','mo_cost','mo_date','mo_date_end','status','path'];
}
