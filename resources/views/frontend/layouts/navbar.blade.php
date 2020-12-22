<div id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header visible-xs">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><h2>Meat King</h2></a>
        </div><!-- navbar-header -->
   
       

        <ul class="navbar-nav navbar-right">
            <li><a href="{{route('get.food')}}">Food</a></li>
            <li><a href="{{route('reservation')}}">Reservation</a></li>
            <li><a href="/">Restaurants</a></li>
            <li><a href="{{route('offer.food')}}">Special Offers</a></li>
            <li><a href="{{route('our.chefs')}}">Our Chefs</a></li>
            <!--fix for scroll spy active menu element-->
            <li style="display:none;"><a href="#header"></a></li>

        </ul>
    </div><!--/.navbar-collapse -->
    </div><!-- container -->
