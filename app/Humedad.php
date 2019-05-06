<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Humedad extends Model
{
    protected $table = 'humedad';
    protected $fillable = ['humedad', 'fecha'];
}
