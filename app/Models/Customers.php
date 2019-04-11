<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    public $timestamps = false; 

    protected $fillable = ['id', 'name', 'preferencial_broker'];

    public function brokers()
    {        
        return $this->hasMany('App\Models\Brokers', 'preferencial_broker', 'id');
    }

}


