@extends('frontend.layouts.master')

@section('content')
<div id="special-offser" class="parallax pricing">
    <div class="container inner">

        <h2 class="section-title text-center">Special Offers</h2>
        <p class="lead main text-center">There is no sincerer love than the love of food!</p>
        
        <div class="row">
            @foreach($offers as $offer)
            <div class="col-lg-4 d-flex align-items-stretch">
                
                <div class="pricing-item">
                    
                    <a href="#"><img class="img-responsive img-thumbnail" src="{{Storage::url($offer->photo)}}" alt=""></a>
                    
                    <div class="pricing-item-details">
                        
                        <h3><a href="#">{{$offer->item_name}}</a></h3>
                        
                        <p>{{$offer->item_details}}</p>
                        <h4>Regular Price: {{$offer->price}}</h4>
                        <h4>Offer Price:{{round($offer->price - $offer->price * ($offer->discount/100))}}<b></h4>
                        
                        <a class="btn btn-danger" href="{{route('offer.order',[$offer->id])}}">Order now</a>
                        <div class="clearfix"></div>
                    </div>
                    <!--price tag-->
                    
                    <span class="hot-tag br-red">{{$offer->discount}}</span>
                    <div class="clearfix"></div>
                </div>
            </div>
      @endforeach
            <div class="clearfix visible-md"></div>
   
        </div>

    </div>
    <!-- /.container --> 
</div><!-- /#special-offser -->


@endsection