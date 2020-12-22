@extends('frontend.layouts.master')

@section('content')

        
<div id="food-menu" class="light-wrapper">
    <section class="ss-style-top"></section>
    <div class="container inner">
        <h2 class="section-title text-center">Food Menu</h2>
        <p class="lead main text-center">There is no sincerer love than the love of food!</p>

        <div class="container">
            <form action="{{route('search.food')}}" method="GET">
                    <div class="form-row">
                        <div class="col-md-4">
                            <input type="text" name="search" placeholder="Search Food..." class="form-control">
            
                        </div>
                        <div class="col">
                            <button type="submit" class="btn btn-dark">Search</button>
                        </div>
                    </div>
                </form>
                <br>

     <div class="row">

            @foreach($foods as $food)
            <div class="col-lg-4 d-flex align-items-stretch">
                <div class="card mb-4 shadow-sm">
                <img src="{{Storage::url($food->photo)}}" width="335" height="300">
                  <div class="card-body">
                  <strong>{{$food->name}}</strong>
                  <p class="card-text">{!!Str::limit($food->description,50)!!}</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                          <a href="{{route('single.food',[$food->id])}}"> <button type="button" class="btn btn-sm btn-outline-secondary">View</button></a>
                      <a href="{{route('order',[$food->id])}}"> <button type="button" class="btn btn-sm btn-outline-secondary">Order Now</button></a>
                      </div>
                      <strong class="text-muted">BDT. {{$food->price}}</strong>
                    </div>
                  </div>
                </div>
              </div>
@endforeach
<br>
{{$foods->links()}}



        
          
        </div>
        
      
        
    </div>
    <!-- /.container -->
    <section class="ss-style-bottom"></section>
</div><!--/#food-menu-->
@endsection