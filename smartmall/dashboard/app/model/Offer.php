<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{

        public function category(){

             return $this->belongsTo('App\model\Category');

        }

}
