<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shares extends Model
{

    protected $fillable = ['id', 'name', 'base_price', 'amount'];

}
