<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['cep','description','number','complement','city','neighborhood','state','user_id'];
    //
}
