<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods=Food::latest()->get();
        return view('admin.food.index',compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=$request->validate([
            'name'=>'required',
            'description'=>'required'

        ]);
        $photo=$request->file('photo')->store('public/food');
        Food::create([

            'name'=>$request->name,
            'price'=>$request->price,
            'description'=>$request->description,
            'photo'=>$photo,

        ]);
        notify()->success('Food Added  Successfully!');
        return redirect('/food');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food=Food::findOrfail($id);
        return view('admin.food.edit',compact('food'));
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
        $validate=$request->validate([
            'name'=>'required',
            'description'=>'required'

        ]);
        $food=Food::find($id);
        $photo=$food->photo;
        if($request->file('photo')){
         $photo=$request->file('photo')->store('public/food');
         \Storage::delete($food->photo);
        
 
        }
        $food->name=$request->name;
        $food->description=$request->description;
        $food->photo=$photo;
        $food->price=$request->price;
        $food->update();
        notify()->success('food Update Successfully!');
        return redirect('/food');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food=Food::find($id);
        $path=$food->photo;
        $food->delete();
        \Storage::delete($path);
        notify()->success('Food Deleted Successfully!');
        return redirect('/food');

    }
}
