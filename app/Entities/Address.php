<?php

namespace App\Entities;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['cep','description','number','complement','city','neighborhood','state','user_id'];
    //

    public function user()
    {
        return $this->hasOne(User::class);
    }
}
