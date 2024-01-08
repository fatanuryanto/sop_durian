<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Models\Order;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderDetail = OrderDetail::where('order_id',$_GET['order_id'])->with('menu')->get();
        $total=0;
        foreach($orderDetail as $od){
            $total+=$od->quantity*$od->menu->price;
        }
        $order=tap(Order::find($_GET['order_id']))->update(["total"=>$total]);
        return view('order.confirmation',compact('orderDetail','order'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        for($index = 0; $index < count($request->menu_id); $index++){
            if($request->quantity[$index]==NULL){
                continue;
            }else{
                OrderDetail::firstOrcreate(
                    ['menu_id' =>$request->menu_id[$index],
                    'quantity' =>$request->quantity[$index],
                    'order_id' =>$request->order_id]
                );
            }  
        }
        return redirect("/orderDetail/confirmation?order_id=".$request->order_id);
        
    }

    /**
     * Display the specified resource.
     */
    public function deliver($id)
    {
        OrderDetail::find($id)->update(['status'=>'Delivered']);
        return redirect()->back();
    }
    public function update(Request $request, OrderDetail $orderDetail)
    {
        Order::update();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderDetail $orderDetail)
    {
        //
    }
}
