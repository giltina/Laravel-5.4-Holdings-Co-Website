 @extends('layouts.home')
@section('container')
  <!-- Begin page content -->
  

  

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
  
    
    @foreach($slide as $key =>$slides)
    <li data-target="#carousel-example-generic" data-slide-to="{{$slides->id}}"></li>
     @endforeach
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
  
  @foreach($slide as $key =>$slides)
    <div class="item{{ $key == 0 ? ' active' : '' }}">
      <img src="uploads/{{$slides->banner}}" width=100%>
      <div class="carousel-caption">
        ...
      </div>
    </div>
     @endforeach
     
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


	<!-- Page Content -->
<section class="home-intro">
<div class="container">
<div class="row">
<div class="col-sm-12" style="text-align:center">
    <h4>WELCOME TO HAMMER & TONGUES AFRICA HOLDINGS</h4>
    </div>
    </div>
    </div>
    </section>
    <div class="container-fluid">
    <div class="row">
    <div id="equalheight">
  <div class="col-md-3 col-lg-3 about-grid about-grid1 demo">
      <div class="about-grid-info">
      <h4><a href="#">ONLINE SHOPPING</a></h4>
<p>Hammer and Tongues shopping mall, is an online shopping platform that allows you to buy almost anything from anywhere in the world. With Hammer and Tongues shopping mall you can buy or you trusted local brands and get delivery anywhere within Harare and Bulawayo.<br>
<a href="http://shopping.hammerandtongues.com/" class="btn btn-default center-block outline" role="button">Visit Site</a>
</div>
  </div>
  <div class="col-md-3 col-lg-3 about-grid about-grid2 demo">
      <div class="about-grid-info">
      <h4><a href="#">REAL ESTATE</a></h4>
      <p>Registered with the Real Estate Institution of Zimbabwe, Hammer and Tongues Real Estate (Pvt) Ltd has become the estate agent of choice backed by a reputable brand name financial stability and unparalled levels of professionalism.The distinct leader and auctioneer of choice in property auctions.</p>
<a href="http://hammerandtonguesrealestate.co.zw/" class="btn btn-default center-block outline" role="button">Visit Site</a>
</div>
  </div>
  <div class="col-md-3 col-lg-3 about-grid about-grid3 demo">
      <div class="about-grid-info">
      <h4><a href="#">AUCTIONEERS</a></h4>
      <p>We are the first & only auctioneers to have a world-class online auction system and our expertise has seen us conduct auction sales far and wide in areas such as Chiredzi, Hwange, Victoria Falls, Mutare.We have successfully conducted sales for a wide range of individuals and companies. </p>
<a href="http://hammerandtonguesauctioneers.co.zw/" class="btn btn-default center-block outline" role="button">Visit Site</a>
 </div>
  </div>
   <div class="col-md-3 col-lg-3 about-grid about-grid4 demo">
       <div class="about-grid-info">
      <h4><a href="#">MONEY LENDERS</a></h4>
      <p>Our core business is to offer short-term finance to Individuals, Civil Servants, Corporates and Small to Medium Businesses. Our Vision is to be the preferred provider of short term and related finance products with economic and social developmental thrust in Zimbabwe.<br></p>
<a href="http://www.html.co.zw/" class="btn btn-default center-block outline" role="button">Visit Site</a>
  </div>
  </div>
  </div>
</div>
</div>
<section class="home-newsletter">
<div class="container">
<div class="row">
<div class="col-sm-12">
    <div id="messages" class="hide" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <div id="messages_content"></div>
            </div>
	<div class="single">
		<h2>Subscribe to our Newsletter</h2>
        <p style="font-size:18px">Want to keep up to date with all our latest news and information ?</p>
        <p style="font-size:18px">Enter you email below to be added to our mailing list.</p><br>
    <form id="form" method="get" action="http://41.190.37.34:9090/BCM/Comms/Pages/hntSubscriptions.aspx?">
	<div class="input-group">
         <input type="email" class="form-control" name="emailld" placeholder="Enter your email">
         <input type="hidden" name="listid" value="1" />
         <span class="input-group-btn">
         <button class="btn btn-theme" type="submit">Subscribe</button>
         </span>
          </div>
          </form>
	</div>
</div>
</div>
</div>
</section>
@endsection