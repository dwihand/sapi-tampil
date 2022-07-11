<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sapi extends Model
{
    //
    protected $table = 'sapi';
    
    protected $fillable = ['merksapi','keterangan'];
}
