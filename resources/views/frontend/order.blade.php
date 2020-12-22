@extends('frontend.layouts.master')

@section('content')
    <div id="reservation" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Order Food</h2>
            <p class="lead main text-center">Cash On Delivary</p>
            <div class="row">
                <div class="col-md-6">
               
                    <form action="{{route('submit.order')}}" class="form form-table" method="post" >@csrf
                        <div class="form-group">
                            <h4>Fill the form for order food (all fields required)</h4>
                        </div>

                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="name">Name</label>
                            <input class="form-control hint" type="text" name="name" placeholder="enter your name" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="last_name1">Address</label>
                            <input class="form-control hint" type="text"  name="address" placeholder="type your address" required="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="email1">email</label>
                            <input class="form-control hint" type="email"  name="email" placeholder="Email@domain.com" required="">
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="phone1">phone</label>
                            <input class="form-control hint" type="text"  name="phone" placeholder="Phone" required="">
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="reserv_date1">Item Name</label>
                            <input class="form-control datepicker hasDatepicker hint" type="text"  name="item_name"  value="{{$food->name}} {{$food->item_name}}" readonly>
                          </div>
                          <div class="col-lg-6 col-md-6 form-group">
                            <label class="sr-only" for="numb_guests1">Price</label>
                            <input class="form-control hint" type="text" name="price" value="{{$food->price}} BDT" readonly>
                          </div>
                        </div>
                     
                       
                        <div class="row">
                          <div class="col-lg-12 col-md-12">
                            <button type="submit" class="btn btn-danger btn-lg">Order</button>
                          </div>
                        </div>
                      </form>
                </div><!-- col-md-6 -->
                <div class="col-md-5 col-md-offset-1">
                    
                    <img src="{{Storage::url($food->photo)}}"><br>

                    <h1 class="text-info">Price :{{$food->price}}</h1>
                    <h4>{{$food->name}} {{$food->item_name}}</h4>
                    <p>{{$food->description}} {{$food->item_details}}</p>

                </div><!-- col-md-6 -->
            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div>
    @endsection