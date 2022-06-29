<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Sapi extends Model
{
    //
    protected $table = 'sapi';
    // protected $fillable = ['Company','Product'];
    protected $fillable = ['merksapi','keterangan'];
}
