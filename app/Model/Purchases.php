<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Purchases extends Model
{

    protected $table = 'purchases';

    protected $fillable = ['mobile_number', 'product_id'];

}