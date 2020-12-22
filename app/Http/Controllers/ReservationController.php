<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{

    public function reservation(){
        return view('frontend.reservation');
    }
    public function submitReservation(Request $request){
        $validate=$request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'guest'=>'required',
            'time_form'=>'required',
            'time_to'=>'required',
            'date'=>'required'

        ]);
        Reservation::create([
            'first_name'=>$request->first_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'date'=>$request->date,
            'guest'=>$request->guest,
            'time_form'=>$request->time_form,
            'time_to'=>$request->time_to
            

        ]);
        notify()->success("Your submission received!We will be confrim you very soon by phone and emaail");
        return redirect()->back();
    }

    public function getReservation(){
        $reservations=Reservation::latest()->get();
        return view('admin.reservation',compact('reservations'));

    }
    public function destroy($id){
        $reservation=Reservation::findOrfail($id);
        $reservation->delete();
        notify()->success('Reservation Deleted');
        return redirect()->back();
    }
}
