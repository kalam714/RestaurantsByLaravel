
@extends('frontend.layouts.master')

@section('content')
<main>
	<div class="container-fluid">
		<div class="carousel slide" id="main-carousel" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="1"></li>
				<li data-target="#main-carousel" data-slide-to="2"></li>
				<li data-target="#main-carousel" data-slide-to="3"></li>
			</ol><!-- /.carousel-indicators -->
			@if(count($sliders)>0)
                @foreach($sliders as  $slider)
			<div class="carousel-inner">
                
				<div class="carousel-item active">
					<img class="d-block img-fluid" width="100%" src="{{Storage::url($slider->photo)}}" alt="">
					<div class="carousel-caption d-none d-md-block">
						<h1>Mountain</h1>
					</div>
				</div>
               
			
			</div><!-- /.carousel-inner -->
            @endforeach
            @endif
			<a href="#main-carousel" class="carousel-control-prev" data-slide="prev">
				<span class="carousel-control-prev-icon"></span>
				<span class="sr-only" aria-hidden="true">Prev</span>
			</a>
			<a href="#main-carousel" class="carousel-control-next" data-slide="next">
				<span class="carousel-control-next-icon"></span>
				<span class="sr-only" aria-hidden="true">Next</span>
			</a>
		</div><!-- /.carousel -->
	</div><!-- /.container -->















    <!-- /#header -->

    <div id="story" class="light-wrapper">
        <section class="ss-style-top"></section>
        <div class="container inner">
            <h2 class="section-title text-center">Our Story</h2>
            <p class="lead main text-center">We're cooking delecious foods since 1879</p>
            <div class="row text-center story">
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa fa-anchor"></i> </div>
                        <h3>EST. 1879</h3>
                        <p>Vivamus sagittis lacuson augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum ultricies vehicula.</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa  fa-cutlery"></i> </div>
                        <h3>Cooking Traditions</h3>
                        <p>Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient monte nascetur ultricies vehicula. </p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="col-wrapper">
                        <div class="icon-wrapper"> <i class="fa fa-coffee"></i> </div>
                        <h3>Food Quality</h3>
                        <p>Curabitur blandit matti tempus porttitor. Donec id elit non mi porta ut gravida at eget metus. Consectetur adipiscing elit ultricies vehicula.</p>
                    </div>
                </div>
            </div>
            <!-- /.services --> 
        </div>
        <!-- /.container -->
        <section class="ss-style-bottom"></section>
    </div><!-- #story -->


    <div id="facts" class="parallax parallax2 facts">
        <div class="container inner">
            <div class="row text-center services-3">
                <div class="col-sm-3">
                    <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-beer"></i> </div>
                    <h4>796518</h4>
                    <p>Mug of Beer Sold</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-play-circle-o"></i> </div>
                    <h4>39472</h4>
                    <p>Movies Watched</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-truck"></i> </div>
                    <h4>2188764</h4>
                    <p>Pizza Deleverd</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="col-wrapper">
                    <div class="icon-border bm10"> <i class="fa fa-users"></i> </div>
                    <h4>480523</h4>
                    <p>Customers Worldwide</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container --> 
    </div><!-- #facts -->




  




   



<!-- #reservation -->


<!-- /#chefs -->

@endsection