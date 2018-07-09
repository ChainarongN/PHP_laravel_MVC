<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $table = 'ticket';
    protected $primaryKey  = 'it_id';
    protected $fillable = ['it_seat','it_price','it_status'];
}
