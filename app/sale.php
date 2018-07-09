<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sale extends Model
{
    protected $table = 'sale';
    protected $primaryKey  = 'sa_id';
    protected $fillable = ['sa_date','sa_date_clash','sa_status'];
}
