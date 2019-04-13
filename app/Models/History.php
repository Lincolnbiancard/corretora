<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    //forçar nome da tabela
    protected $table = 'history';

    protected $fillable = ['id', 'id_share', 'id_customer', 'quantity', 'type', 'base_price']; 

    public function shares()
    {        
        return $this->hasOne('App\Models\Shares', 'id', 'id_share');
    }

    public function customers()
    {        
        return $this->hasOne('App\Models\Customers', 'id', 'id_customer');
    }

    public function type(){
        
    }
}
