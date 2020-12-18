<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Offer;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers=Offer::latest()->get();
        return view('admin.offer.index',compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.offer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validation=$request->validate([
            'discount'=>'required',
            'item_name'=>'required',
            'item_details'=>'required',
            'photo'=>'required',
            'price'=>'required',

        ]);
        $photo=$request->file('photo')->store('public/offer');
        Offer::create([
            'item_name'=>$request->item_name,
            'item_details'=>$request->item_details,
            'photo'=>$photo,
            'price'=>$request->price,
            'discount'=>$request->discount

        ]);
        notify()->success('Offer Item Added Successfully');
        return redirect('/offer');
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
        $offer=Offer::findOrfail($id);
        return view('admin.offer.edit',compact('offer'));
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
        $validation=$request->validate([
            'discount'=>'required',
            'item_name'=>'required',
            'item_details'=>'required',
          
            'price'=>'required',

        ]);
        $offer=Offer::findOrfail($id);
        $photo=$offer->photo;
        if($request->file('photo')){
            $photo=$request->file('photo')->store('public/offer');
            \Storage::delete($offer->photo);

        }
        $offer->item_name=$request->item_name;
        $offer->item_details=$request->item_details;
        $offer->price=$request->price;
        $offer->discount=$request->discount;
        $offer->photo=$photo;
        $offer->update();
        notify()->success('Offer Updated');
        return redirect('/offer');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $offer=Offer::findOrfail($id);
        $path=$offer->photo;
        \Storage::delete($path);
        $offer->delete();
        notify()->success('Offer deleted');
        return redirect('/offer'); 
    }
}
