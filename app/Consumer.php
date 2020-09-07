<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumer extends Model
{
  protected $fillable = [
    'name',
    'lastname',
    'suffix',
    'company',
    'job',
    'address',
    'phone',
    'email',
  ];
}
