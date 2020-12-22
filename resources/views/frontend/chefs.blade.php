@extends('frontend.layouts.master')

@section('content')
    <div id="chefs" class="parallax pricing">
        <div class="container inner">

            <h2 class="section-title text-center">Our Chefs</h2>
            <p class="lead main text-center">There is no sincerer love than the love of food!</p>
            
            <div class="row text-center chefs">
                @foreach($chefs as $chef)
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper d-flex align-items-stretch">
                            <img height="auto" max-width="100%" src="{{Storage::url($chef->photo)}}">
                        </div>
                        <h2>{{$chef->name}}</h2>
                        <p>{{$chef->details}}</p>
                    </div>
                </div>
              @endforeach
              
            </div>

        </div>
        <!-- /.container --> 
    </div>
    @endsection