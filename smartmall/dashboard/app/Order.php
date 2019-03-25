<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  public function user2(){

       return $this->belongsTo('App\User', 'user_id');

  }

  public function product2(){

       return $this->belongsTo('App\model\Product', 'user_id');

  }

}
