   @extends('layouts.mall')
@section('container')
   <!-- Begin page content -->  
  <div id="mall" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
 

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    @foreach($slideshow as $key =>$slideshows)
    <div class="item{{ $key == 0 ? ' active' : '' }}">
      <img src="uploads/{{$slideshows->photo}}" width=100%>
      <div class="carousel-caption">
        <a href="{{$slideshows->url}}" class="btn btn-default btn-sm" role="button">View Store</a>
      </div>
    </div>
     @endforeach
  </div>


  <!-- Controls -->
  <a class="left carousel-control" href="#mall" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#mall" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<section class="secondary-menu">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
           <ul id="menu" style="text-align:center">
           <li><a href="https://hammerandtonguesshoppingmall.wordpress.com/">Blog</a></li>
          <li><a href="https://shopping.hammerandtongues.com/faq/">Requently Asked Questions</a></li>
          <li><a href="https://shopping.hammerandtongues.com/our-stores/">Our Stores</a></li>
          <li><a href="https://shopping.hammerandtongues.com/contact-us/">Contact Us</a></li>
           </ul> 
          </div>
          </div>
        </div>
</section>

<section class="main-content">
        <div class="container">
          <div class="row">
          <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
       <div class="panel panel-default">
  <div class="panel-heading">Promotions</div>
  <div class="panel-body">
    <ul>
    @if (count($promotion) > 0)
    @foreach($promotion as $promotions)
   <li><a href="{{$promotions->url}}">{{$promotions->name}}</a></li>
   @endforeach
   @else
<p>No Promotions</p>
@endif
    </ul>
  </div>
</div>
<h4 style="color:#FF800E">Hot Deals</h4>
 @if (count($deal) > 0)
 @foreach($deal as $deals)
  <div class="panel panel-default">
  <div class="panel-heading"><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> {{$deals->name}}</div>
  <div class="panel-body">
    <img src="uploads/{{$deals->photo}}" width=90%>
  </div>
   <div class="panel-footer">
     <a class="btn btn-danger btn-sm pull-left" href="{{$deals->url}}" role="button"> <i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
 Buy Now</a>
<p class="pull-right" style="margin-top:5px;color:#3F1F5F"><strong>{{$deals->price}}</strong></p>
<div class="clearfix"></div>
   </div>
</div>
   @endforeach
   @else
<p>No Special Deals</p>
@endif

                  </div>
        <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
          <h4 style="color:#FF800E">All Shops</h4>
          <hr class="line">
          
          <div class="multiple-items">
          @foreach($logo as $logos)
<div class="adv"><a href="{{$logos->url}}"><img src="uploads/{{$logos->logo}}" width=100%></a></div>
   @endforeach
  </div>
  <br>
      <h4 style="color:#FF800E">Featured Products</h4>
      <hr style="color:#FF800E">
      <div class="row">
      @foreach($product as $products) 
 
      <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
        <div class="panel panel-default">
          
  <div class="panel-body pic" style="text-align:center">
    <img src="uploads/{{$products->photo}}" width=100%>
    <p><strong>{{str_limit(strip_tags($products->name),19)}}</strong></p>
    <p style="color:#2AB1F6"><strong>{{$products->price}}</strong></p>
     <a href="{{$products->url}}" class="btn btn-info btn-xs" role="button">View Product</a>
  </div>
   
</div>
      </div>
@endforeach
      </div>
    
    <div class="row" style="margin-top:25px">
      <h4 style="color:#FF800E">You May Also Like</h4>
    <hr class="line">
    @foreach($like as $likes)
<div class="col-md-2"><a href="{{$likes->url}}" class="btn btn-danger " role="button">{{$likes->name}}</a></div>
   @endforeach
    </div>
    <hr class="line">
    <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
      <h4 style="color:#FF800E">Connect With Us</h4>
      <ul class="social-icons icon-circle list-unstyled list-inline">   
	      <li> <a href="#"><i class="fa fa-facebook-square"></i></a></li> 
	      <li> <a href="#"><i class="fa fa-google-plus-square"></i></a></li> 
	      <li> <a href="#"><i class="fa fa-instagram"></i></a></li> 
	      <li> <a href="#"><i class="fa fa-linkedin-square"></i></a></li> 
	      <li> <a href="#"><i class="fa fa-twitter-square"></i></a></li>
	      <li> <a href="#"><i class="fa fa-youtube-square"></i></a></li> 
	  	</ul>
      </div>
      <div class="col-md-6"><img src="{{asset('mall/images/thawte.png')}}" class="img-responsive" /></div>
    </div>
          </div>
          </div>
        
        </div>
</section>
<section class="payment">
  <div class="row">
    <div class="col-md-3 col-md-offset-2">
 <img src="{{asset('mall/images/ecocash.png')}}" class="img-responsive"/>
    </div>
<div class="col-md-3">
  <img src="{{asset('mall/images/paynow.png')}}" class="img-responsive"/>
    </div>
<div class="col-md-3">
  <img src="{{asset('mall/images/telecash.png')}}" class="img-responsive"/>
    </div>
    </div>
 
</section> 
@endsection