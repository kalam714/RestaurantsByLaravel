<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chef;
class ChefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chefs=Chef::latest()->get();
        return view('admin.chef.index',compact('chefs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.chef.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $val=$request->validate([
            'name'=>'required',
            'details'=>'required',
            'photo'=>'required'

        ]);
        $photo=$request->file('photo')->store('public/chef');
        Chef::create([
            'name'=>$request->name,
            'details'=>$request->details,
            'photo'=>$photo

        ]);
        notify()->success('Chef Added successfully');
        return redirect('/chef');
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
        $chef=Chef::findOrfail($id);
        return view('admin.chef.edit',compact('chef'));
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
        $val=$request->validate([
            'name'=>'required',
            'details'=>'required',
            

        ]);
        $chef=Chef::findOrfail($id);
        $photo=$chef->photo;
        if($request->file('photo')){
            $photo=$request->file('photo')->store('public/chef');
            \Storage::delete($chef->photo);
        }
        $chef->name=$request->name;
        $chef->details=$request->details;
        $chef->photo=$photo;
        $chef->update();
        notify()->success("Chef Infromation Update");
        return redirect('/chef');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $chef=Chef::findOrfail($id);
        $path=$chef->photo;
        \Storage::delete($path);
        $chef->delete();
        notify()->success('Chef Removed');
        return redirect('/chef');
    }
}
