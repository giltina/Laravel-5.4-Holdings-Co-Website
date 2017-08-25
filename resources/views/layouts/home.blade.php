<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Hammer & Tongues Africa Holdings</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('home/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="{{asset('home/css/ie10-viewport-bug-workaround.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('home/home.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('home/font-awesome/css/font-awesome.min.css')}}">


    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

<header>
  <section class="top-nav hidden-xs">
			<div class="container">
				<div class="row">
					<div class="col-md-3 pull-right">					
<p style="color:white"><i class="fa fa-mobile" aria-hidden="true"></i> Call us:<span>+263 (4)790148 / 791926</span></p>
					</div>

					<div class="col-md-4">
							<p style="color:white"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email us:<span>online@hammerandtongues.com</span></p>
					</div>

				</div>
			</div>
		</section>
    	<!--main-nav-->

		<div id="main-nav">

			<nav class="navbar">
				<div class="container">

					<div class="navbar-header">
						<a href="/"><img src="{{asset('home/images/logo.png')}}"></a>
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ftheme">
							<span class="sr-only">Toggle</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="navbar-collapse collapse" id="ftheme">

						<ul class="nav navbar-nav navbar-right">
							<li><a href="/">home</a></li>
            <li><a href="{{url('shopping/')}}">Online Shopping</a></li>
            <li><a href="http://hammerandtonguesauctioneers.co.zw/">Auction</a></li>
            <li><a href="http://www.hammerandtonguesrealestate.co.zw/">Real Estate</a></li>
            <li><a href="http://www.html.co.zw/">Microfinance</a></li>            
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{url('history/')}}">History</a></li>
            <li><a href="{{url('beliefs/')}}">Beliefs</a></li>
            <li><a href="{{url('management/')}}">Management</a></li>
            <li><a href="{{url('careers/')}}">Careers</a></li>
          </ul>
        </li>
		 
              <li><a href="{{url('contact/')}}">contact</a></li>
							
						</ul>

					</div>


				</div>
			</nav>
		</div>
    
</header>
  @yield("container")
	 <section class="foot">
        <div class="container">
       
            <div class="row">
                <div class="col-md-3 wow flipInX">
                    <h4 style="color:white;">GET IN TOUCH</h4><br>
					<p style="color:white"><i class="fa fa-dot-circle-o" aria-hidden="true" style="color:white"></i> First Floor, Block 3 Tendeseka Office Park Samora Machel Avenue Harare Zimbabwe</p>
					<p style="color:white"><i class="fa fa-phone" aria-hidden="true" style="color:white"></i> +263 (4) 790148,+263 (4) 791926 </p>
					<p style="color:white"><i class="fa fa-envelope" aria-hidden="true" style="color:white"></i> online@hammerandtongues.com </p>


                </div>
                 <div class="col-md-3 wow flipInX">
                    <h4 style="color:white;">OUR SERVICES</h4><br>
					<p style="color:white"><i class="fa fa-desktop" aria-hidden="true" style="color:white"></i><a href="shopping/"> Online Shopping</a></p>
					<p style="color:white"><i class="fa fa-hand-o-right" aria-hidden="true" style="color:white"></i> <a href="http://hammerandtonguesauctioneers.co.zw/">Auction</a> </p>
					<p style="color:white"><i class="fa fa-building" aria-hidden="true" style="color:white"></i><a href="http://hammerandtonguesrealestate.co.zw/"> Real Estate</a> </p>
                    <p style="color:white"><i class="fa fa-money" aria-hidden="true" style="color:white"></i><a href="http://www.html.co.zw/"> Microfinance</a> </p>


                </div>

                <div class="col-md-3 wow flipInX">
                    <h4 style="color:white;">GET TO KNOW US</h4><br>
					<p style="color:white"><i class="fa fa-university" aria-hidden="true" style="color:white"></i><a href="/history"> History</a></p>
					<p style="color:white"><i class="fa fa-users" aria-hidden="true" style="color:white"></i> <a href="/management">Management</a></p>
					<p style="color:white"><i class="fa fa-dot-circle-o" aria-hidden="true" style="color:white"></i><a href="/beliefs"> Beliefs</a></p>
                    


                </div>


            </div>
         </div>
         </section>
	<footer class="navbar-inverse navbar-fixed-bottom footer">
  <div class="container-fluid">
    <div class="row">
  <div class="col-md-3" style="margin-top:9px;color:white"><a href="https://www.facebook.com/hammerandtongues/"><i class="fa fa-facebook-official fa-2x" aria-hidden="true" style="color:white"></i></a> <a href="https://www.linkedin.com/company-beta/17999179"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true" style="color:white"></i></a> <a href="https://www.instagram.com/htauctioneerszim/"><i class="fa fa-instagram fa-2x" aria-hidden="true" style="color:white"></i></a> <a href="https://www.youtube.com/channel/UCueiCt7KL66cV8507VbeluQ?sub_confirmation=1"><i class="fa fa-youtube-square fa-2x" aria-hidden="true" style="color:white"></i></a> <a href="https://twitter.com/intent/follow?source=followbutton&variant=1.0&screen_name=htauctioneers"><i class="fa fa-twitter-square fa-2x" aria-hidden="true" style="color:white"></i></a></div>
  <div class="col-md-7" style="margin-top:12px;color:white">
  <marquee>
  @foreach($announcement as $announcements)
{{$announcements->title}}
   @endforeach
  </marquee>
  </div>
  <div class="col-md-2" style="margin-top:12px;color:white"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>
ANNOUNCEMENTS</div>
      </div>
  </div>
</footer>	 

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="{{asset('home/js/jquery.min.js')}}"><\/script>')</script>
    <script src="{{asset('home/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('home/js/script.js')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{asset('home/js/ie10-viewport-bug-workaround.js')}}"></script>
  </body>
</html>
