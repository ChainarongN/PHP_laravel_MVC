<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    protected $table = 'member';
    protected $primaryKey  = 'me_id';
    protected $fillable = ['me_fname','me_lname','me_tel','me_email','me_user','me_pws'];
}
