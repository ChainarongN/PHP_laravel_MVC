<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class room extends Model
{
    protected $table = 'room';
    protected $primaryKey  = 'ro_id';
    protected $fillable = ['ro_name','ro_status'];
}
