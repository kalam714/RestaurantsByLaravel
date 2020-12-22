<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Order;
use App\Models\Offer;
class OrderController extends Controller
{
    public function order($id){
        $food=Food::findOrfail($id);
        return view('frontend.order',compact('food'));
    }
    public function offerOrder($id){
        $food=Offer::findOrfail($id);
     
     return view('frontend.order',compact('food'));
        
    }
    public function OrderSubmit(Request $request){
        Order::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'item_name'=>$request->item_name,
            'price'=>$request->price,
        ]);
        notify()->success("Your Oreder is submitted.Our delivary Boy Contact You soon");
        return redirect()->back();

    }
    //admin
    public function getOrder(){
        $orders=Order::latest()->get();
        return view('admin.order',compact('orders'));
    }
    public function destroy($id){
        $order=Order::findOrfail($id);
        $order->delete();
        notify()->success("Order deleted");
        return redirect()->back();    
    }
}
