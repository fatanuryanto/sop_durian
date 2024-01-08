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

    public function store(Request $request)
    {
        $order_id = Order::firstOrCreate(
            [
                'name'=>$request->name,
                'floor'=>$request->floor,
                'table'=>$request->table,
            ],$request->all())->id;
        return redirect("/order/".$order_id);
    }

    public function create($id)
    {
        $menus=Category::with('menu')->get();
        $order = Order::find($id);
        return $menus;
        return view('order.order',compact('menus','order'));
    }
}
