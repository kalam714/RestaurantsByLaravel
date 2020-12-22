@extends('frontend.layouts.master')

@section('content')


<div class="container-fluid">

<div class="jumbotron">
	
<div class="card">
	<div class="row">
		<aside class="col-sm-5 border-right">
			<section class="gallery-wrap"> 
			<div class="img-big-wrap">
			  <div> <a href="#">
			  	<img src="{{Storage::url($food->photo)}}" width="100%" height="100%"></a>
			  </div>
			</div> 
			
			</section> 
		</aside>



		<aside class="col-sm-7">
			<section class="card-body p-5">
				<h3 class="title mb-3">{{$food->name}}</h3>

<p class="price-detail-wrap"> 
	<span class="price h3 text-danger"> 
   Price  <span class="currency">BDT. {{$food->price}}</span>
	 
</p> 
  <h3>Description</h3>
  <p>{!!$food->description!!} </p>
  

<hr>
	
	
<a href="{{route('order',[$food->id])}}"> <button type="button" class="btn btn-sm btn-outline-secondary">Order Now</button></a>
</section> 
		</aside> 

	</div> 
</div> 
</div>
<hr>


</div>

@endsection