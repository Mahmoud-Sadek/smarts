<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\model\Cart;
use App\User;
use Auth;
use Illuminate\Support\Facades\Input;
use DB;


class OrederController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

      $user = User::find(Auth::user()->isadmin);
      if ( Auth::user()->isadmin == 6  ) {
        $orders = Order::where('user_id', Auth::user()->id )->get();
        return view('orders.order')->with('orders', $orders);
      }else {
        $orders = Order::all();
        return view('orders.order')->with('orders', $orders);
      }


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders     = Order::find($id);
        $carts      = Cart::where('order_id', $id)->get();
        $totalprice = Cart::where('order_id', $id)->sum('total_price');

        // $sum        = $totalprice * $totalqty ;

      return view('orders.show')->with(['orders'  => $orders,
                                        'carts' => $carts,
                                        'totalprice' => $totalprice]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $orders = Order::find($id);
      $orders -> destroy($id);
      return redirect(route('order.index'));
    }
}
