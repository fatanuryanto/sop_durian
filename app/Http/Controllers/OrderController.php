<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Category;
use App\Models\OrderDetail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function index()
    {
        $orders=Order::get();
        return view('order.index',compact('orders'));
    }


     public function create()
    {
        $categories=Category::with('menu')->get();
        $order = Order::find($_GET['order_id']);
        return view('order.dine_in',compact('categories','order'));
    }

    public function store(Request $request)
    {
        $order_id = Order::firstOrCreate(
            [
                'name'=>$request->name,
                'floor'=>$request->floor,
                'table'=>$request->table,
            ],$request->all())->id;
        return redirect("/dine_in?order_id=".$order_id);
    }
}
