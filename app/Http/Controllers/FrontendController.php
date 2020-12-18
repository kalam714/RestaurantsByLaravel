<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
class FrontendController extends Controller
{
    public function getFood(Request $request){
        if($request->search){
            $foods=Food::where('name','like','%'.$request->search.'%')->orWhere('description','like','%'.$request->search.'%')
            ->orWhere('price','like','%'.$request->search.'%')->paginate(10);
            return view('frontend.food.index',compact('foods'));
        }


        $foods=Food::latest()->paginate(6);
        return view('frontend.food.index',compact('foods'));
    }
    public function singleFood($id){
        $food=Food::findOrfail($id)->first();
        return view('frontend.food.view',compact('food'));
    }
}
