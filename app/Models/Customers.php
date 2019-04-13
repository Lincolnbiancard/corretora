<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{

    protected $fillable = ['id', 'name', 'preferencial_broker'];

    public function brokers()
    {        
        return $this->hasOne('App\Models\Brokers', 'id', 'preferencial_broker');
    }

}


