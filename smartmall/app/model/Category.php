<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
      public function products(){

           return $this->hasMany('App\model\Product');

      }

      public function offers(){

           return $this->hasMany('App\model\Offer');

      }


  public function parent() {
    return $this->hasMany('App\model\Category','parent_id');
  }


  public function son() {
    return $this->hasMany('App\model\Category','son_id');
  }



        public function productson(){

             return $this->hasMany('App\model\Product', 'son_id');

        }



}
