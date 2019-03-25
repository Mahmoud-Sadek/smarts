<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        public function category(){

             return $this->belongsTo('App\model\Category');

        }

        public function offer(){

             return $this->belongsTo('App\model\Offer');

        }


        public function reviews(){

             return $this->hasMany('App\model\Review', 'product_id');

        }



        // public function reviewss(){
        //
        //      return $this->belongsTo('App\model\Review', 'product_id');
        //
        // }
}
