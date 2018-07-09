<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cycledetail extends Model
{
    protected $table = 'cycledetail';
    protected $primaryKey  = 'cd_id';
    protected $fillable = ['cy_id','ro_id','mo_id','cy_date'];
}
