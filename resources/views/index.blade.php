<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cash For Mexico</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">

</head>
<body>

    <header class="mexico-home-header">
        <nav class="navbar navbar">
            <div class="container-fluid">
                <div class="row">	
                    <div class="col-lg-8 mexico-nav">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('images/mexico-logo.png') }}">
                            </a>
                        </div>
{{--                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
{{--                            <ul class="nav navbar-nav navbar-right">--}}
{{--                                <li>--}}
{{--                                    <a class="active" href="index.html">Home</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="listings.html">Listings</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a href="contact.html">Contact</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </div>
                    <div class="col-lg-4 mexico-nav-extra">
                    <a class="one" href="{{ url('contact/') }}">Contact Us</a>
                    <a class="three" href="{{url('login')}}"><img src="{{ asset('images/mexico-icon3.png') }}" alt="icon3">Sign in or Register </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <section class="mexico-search-section">
        <div class="container mexico-search-wrap">
            <div class="row">
            <form method="post" action="#">
          <div class="col-lg-3 mexico-search1">
      <div class="form-group required" data-type="text" data-required="true">
      <select class="select_box">
      <option value="1">Year</option>  
                <option value="2">2005</option> 
                <option value="3">2006</option> 
                <option value="4">2007</option> 
      </select>
      </div>
          </div>
          <div class="col-lg-3 mexico-search1">
      <div class="form-group required" data-type="text" data-required="true">
      <select class="select_box"> 
                <option value="1">Make</option> 
                <option value="2">BMW</option> 
                <option value="3">Daewoo</option> 
                <option value="4">Honda</option>
      </select>
      </div>
          </div>
<div class="col-lg-3 mexico-search1">
      <div class="form-group required" data-type="text" data-required="true">
      <select class="select_box"> 
                <option value="1">Model</option> 
                <option value="2">Lanos</option> 
                <option value="3">Falcon</option> 
                <option value="4">Ranger</option>
      </select>
      </div>
          </div>
     <div class="col-lg-3">
      <div class="form-group" data-type="submit">
      <button type="submit" class="btn-default">Search</button>
      </div>
      </div>
      </form>
      </div>
        </div>
    </section>
    
    <section class="mexico-sale-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mexico-sale-heading">
                <h2>Cars For Sale</h2>
                <hr>
                <p>Explore the greates places in the city. You won’t be disappointed.</p>
                </div>
                <div class="col-lg-2 mexico-sale-heading2">
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
            Sort by
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a class="first" href="#">A-Z<span>Z-A</span></a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Newest</a></li>
            <li><a href="#">Price</a></li>
          </ul>
        </div>
               </div>
            </div>
        </div>
		<div class="container mexico-sale-wrap">
            <div class="row">
                <div class="col-lg-4 mexico-sale-img">
                <img src="images/car-img/mexico-car-img1.png" alt="img1">
                <div class="mexico-sale-btn">
                <a href="#">
                <button type="button" class="btn-default">SOLD</button>
                </a>
                <a href="#">
                <button id="btn" type="button" class="btn-default">$25.000</button>
                </a>
                </div>
                <div class="mexico-sale-text">
                <ul>
                <li>2005</li>
                <li>Gasoline</li>
                </ul>
                <ul class="second">
                <li>Automatic</li>
                <li>28.000</li>
                </ul>
                </div>
				<div class="mexico-sale-text2">
                <a href="#"><h2>2005 Honda Civic</h2></a>
                </div>
				<div class="mexico-sale-text3">
                <a href="#"><h3><img src="images/mexico-icon7.png" alt="icon7">Honda</h3></a>
                </div>
                </div>
				<div class="col-lg-4 mexico-sale-img">
                <img src="images/car-img/mexico-car-img2.png" alt="img2">
                <div class="mexico-sale-btn">
                <a href="#">
                <button id="btn" type="button" class="btn-default">$67.000</button>
                </a>
                <a href="#">
                <button id="btn2" type="button" class="btn-default"><img src="images/mexico-icon8.png" alt="icon8">Save</button>
                </a>
                </div>
                <div class="mexico-sale-text">
                <ul>
                <li>2010</li>
                <li>Diesel</li>
                </ul>
                <ul class="second2">
                <li>Manual</li>
                <li>28.000</li>
                </ul>
                </div>
				<div class="mexico-sale-text2">
                <a href="#"><h2>2010 Toyota RAV4</h2></a>
                </div>
				<div class="mexico-sale-text3">
                <a href="#"><h3><img src="images/mexico-icon7.png" alt="icon7">Toyota</h3></a>
                </div>
                </div>
				<div class="col-lg-4 mexico-sale-img">
                <img src="images/car-img/mexico-car-img3.png" alt="img3">
                <div class="mexico-sale-btn">
                <a href="#">
                <button id="btn" type="button" class="btn-default">$98.000</button>
                </a>
                <a href="#">
                <button id="btn2" type="button" class="btn-default"><img src="images/mexico-icon8.png" alt="icon8">Save</button>
                </a>
                </div>
                <div class="mexico-sale-text">
                <ul>
                <li>2008</li>
                <li>Gasoline</li>
                </ul>
                <ul class="second3">
                <li>Automatic</li>
                <li>28.000</li>
                </ul>
                </div>
				<div class="mexico-sale-text2">
                <a href="#"><h2>2008 Audi R8</h2></a>
                </div>
				<div class="mexico-sale-text3">
                <a href="#"><h3><img src="images/mexico-icon7.png" alt="icon7">Audi</h3></a>
                </div>
                </div>
            </div>
        </div>
 <div class="container mexico-sale-wrap">
            <div class="row">
                <div class="col-lg-4 mexico-sale-img">
                <img src="images/car-img/mexico-car-img1.png" alt="img1">
                <div class="mexico-sale-btn">
                <a href="#">
                <button type="button" class="btn-default">SOLD</button>
                </a>
                <a href="#">
                <button id="btn" type="button" class="btn-default">$25.000</button>
                </a>
                </div>
                <div class="mexico-sale-text">
                <ul>
                <li>2005</li>
                <li>Gasoline</li>
                </ul>
                <ul class="second">
                <li>Automatic</li>
                <li>28.000</li>
                </ul>
                </div>
				<div class="mexico-sale-text2">
                <a href="#"><h2>2005 Honda Civic</h2></a>
                </div>
				<div class="mexico-sale-text3">
                <a href="#"><h3><img src="images/mexico-icon7.png" alt="icon7">Honda</h3></a>
                </div>
                </div>
				<div class="col-lg-4 mexico-sale-img">
                <img src="images/car-img/mexico-car-img2.png" alt="img2">
                <div class="mexico-sale-btn">
                <a href="#">
                <button id="btn" type="button" class="btn-default">$67.000</button>
                </a>
                <a href="#">
                <button id="btn2" type="button" class="btn-default"><img src="images/mexico-icon8.png" alt="icon8">Save</button>
                </a>
                </div>
                <div class="mexico-sale-text">
                <ul>
                <li>2010</li>
                <li>Diesel</li>
                </ul>
                <ul class="second2">
                <li>Manual</li>
                <li>28.000</li>
                </ul>
                </div>
				<div class="mexico-sale-text2">
               <a href="#"><h2>2010 Toyota RAV4</h2></a>
                </div>
				<div class="mexico-sale-text3">
                <a href="#"><h3><img src="images/mexico-icon7.png" alt="icon7">Toyota</h3></a>
                </div>
                </div>
				<div class="col-lg-4 mexico-sale-img">
                <img src="images/car-img/mexico-car-img3.png" alt="img3">
                <div class="mexico-sale-btn">
                <a href="#">
                <button id="btn" type="button" class="btn-default">$98.000</button>
                </a>
                <a href="#">
                <button id="btn2" type="button" class="btn-default"><img src="images/mexico-icon8.png" alt="icon8">Save</button>
                </a>
                </div>
                <div class="mexico-sale-text">
                <ul>
                <li>2008</li>
                <li>Gasoline</li>
                </ul>
                <ul class="second3">
                <li>Automatic</li>
                <li>28.000</li>
                </ul>
                </div>
				<div class="mexico-sale-text2">
                <a href="#"><h2>2008 Audi R8</h2></a>
                </div>
				<div class="mexico-sale-text3">
                <a href="#"><h3><img src="images/mexico-icon7.png" alt="icon7">Audi</h3></a>
                </div>
                </div>
            </div>
        </div>     
		<div class="container mexico-sale-wrap">
            <div class="row">
                <div class="col-lg-4 mexico-sale-img">
                <img src="images/car-img/mexico-car-img1.png" alt="img1">
                <div class="mexico-sale-btn">
                <a href="#">
                <button type="button" class="btn-default">SOLD</button>
                </a>
                <a href="#">
                <button id="btn" type="button" class="btn-default">$25.000</button>
                </a>
                </div>
                <div class="mexico-sale-text">
                <ul>
                <li>2005</li>
                <li>Gasoline</li>
                </ul>
                <ul class="second">
                <li>Automatic</li>
                <li>28.000</li>
                </ul>
                </div>
				<div class="mexico-sale-text2">
                <a href="#"><h2>2005 Honda Civic</h2></a>
                </div>
				<div class="mexico-sale-text3">
                <a href="#"><h3><img src="images/mexico-icon7.png" alt="icon7">Honda</h3></a>
                </div>
                </div>
				<div class="col-lg-4 mexico-sale-img">
                <img src="images/car-img/mexico-car-img2.png" alt="img2">
                <div class="mexico-sale-btn">
                <a href="#">
                <button id="btn" type="button" class="btn-default">$67.000</button>
                </a>
                <a href="#">
                <button id="btn2" type="button" class="btn-default"><img src="images/mexico-icon8.png" alt="icon8">Save</button>
                </a>
                </div>
                <div class="mexico-sale-text">
                <ul>
                <li>2010</li>
                <li>Diesel</li>
                </ul>
                <ul class="second2">
                <li>Manual</li>
                <li>28.000</li>
                </ul>
                </div>
				<div class="mexico-sale-text2">
                <a href="#"><h2>2010 Toyota RAV4</h2></a>
                </div>
				<div class="mexico-sale-text3">
                <a href="#"><h3><img src="images/mexico-icon7.png" alt="icon7">Toyota</h3></a>
                </div>
                </div>
				<div class="col-lg-4 mexico-sale-img">
                <img src="images/car-img/mexico-car-img3.png" alt="img3">
                <div class="mexico-sale-btn">
                <a href="#">
                <button id="btn" type="button" class="btn-default">$98.000</button>
                </a>
                <a href="#">
                <button id="btn2" type="button" class="btn-default"><img src="images/mexico-icon8.png" alt="icon8">Save</button>
                </a>
                </div>
                <div class="mexico-sale-text">
                <ul>
                <li>2008</li>
                <li>Gasoline</li>
                </ul>
                <ul class="second3">
                <li>Automatic</li>
                <li>28.000</li>
                </ul>
                </div>
				<div class="mexico-sale-text2">
                <a href="#"><h2>2008 Audi R8</h2></a>
                </div>
				<div class="mexico-sale-text3">
                <a href="#"><h3><img src="images/mexico-icon7.png" alt="icon7">Audi</h3></a>
                </div>
                </div>
            </div>
        </div> 
    </section>
    
{{--    <section class="mexico-nav-section">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12 mexico-nav-bottom">--}}
{{--                <ul>--}}
{{--                <li><a href="index.html">Home</a></li>--}}
{{--                <li><a href="listings.html">Listings</a></li>--}}
{{--                <li><a href="contact.html">Contact</a></li>--}}
{{--                </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    
    <section class="mexico-social-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mexico-social2">
                <ul>
                <li>Copyright © {{date('Y')}}</li>
                <li><img src="{{ asset('images/mexico-icon9.png') }}" alt="icon9">New York, NY</li>
                <li><img src="{{ asset('images/mexico-icon9.png') }}" alt="icon9">+61 2 8236 9200</li>
                </ul>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="mexico-footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mexico-footer-text">
                <p>All Rights Reserved Cars For Mexico {{date('Y')}}</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>