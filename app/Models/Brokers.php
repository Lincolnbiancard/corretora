<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brokers extends Model
{

    public $timestamps = false; 

    protected $fillable = ['id', 'name'];

}
