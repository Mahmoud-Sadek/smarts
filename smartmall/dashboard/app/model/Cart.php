<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{

          public function products(){

               return $this->belongsTo('App\model\Product','product_id');

          }

}
