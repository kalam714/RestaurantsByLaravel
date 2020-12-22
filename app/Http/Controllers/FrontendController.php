<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;
use App\Models\Offer;
use App\Models\Reservation;
use App\Models\Slider;
use App\Models\Chef;
class FrontendController extends Controller
{
    public function index(){
        $sliders=Slider::all();
        return view('frontend.index',compact('sliders'));
    }
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
    public function getOfferFood(){
        $offers=Offer::latest()->get();
      
        return view('frontend.food.offer',compact('offers'));
    }
    public function ourChefs(){
        $chefs=Chef::latest()->get();
        return view('frontend.chefs',compact('chefs'));
    }
}
