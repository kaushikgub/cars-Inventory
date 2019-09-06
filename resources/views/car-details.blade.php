<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Internal Page In Mexico</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">

</head>
<body>

<header class="mexico-home-header4">
    <nav class="navbar navbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 mexico-nav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{url('/')}}"><img src="{{ asset('images/mexico-logo.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mexico-nav-extra">
                    <a class="one" href="{{ url('contact/') }}">Contact Us</a>
                    <a class="three" href="{{url('logout')}}"><img src="{{ asset('images/mexico-icon3.png') }}"
                                                                   alt="icon3">Sign Out </a>
                </div>
            </div>
        </div>
    </nav>
</header>

<section class="mexico-contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mexico-internal-heading">
                <h2>{{$car->car_years}} {{$car->car_makes}} {{$car->car_models}}</h2>
            </div>
            <div class="col-lg-4 mexico-internal-heading2">
                <span>Price</span>
                <a href="#">
                    <button type="button" class="btn-default">$ {{$car->asking_price}}</button>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="mexico-internal-section2">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mexico-internal">
                <h3><img src="{{ asset('images/mexico-icon24.png') }}" alt="icon24">Gallery</h3>
                <hr>
                <!-- Place somewhere in the <body> of your page -->
                <div id="slider" class="flexslider">
                    <ul class="slides">
                        <li>
                            <img style="width: 765px; height: 420px" src="{{ asset('storage') }}/{{$car->image_1}}" alt="slides-01" />
                        </li>
                        <li>
                            <img style="width: 765px; height: 420px" src="{{ asset('storage') }}/{{$car->image_2}}" alt="slides-01" />
                        </li>
                        <li>
                            <img style="width: 765px; height: 420px" src="{{ asset('storage') }}/{{$car->image_3}}" alt="slides-01" />
                        </li>
                        <li>
                            <img style="width: 765px; height: 420px" src="{{ asset('storage') }}/{{$car->image_4}}" alt="slides-01" />
                        </li>
                        <!-- items mirrored twice, total of 12 -->
                    </ul>
                </div>
                <div id="carousel" class="flexslider">
                    <ul class="slides">
                        <li>
                            <img style="height: 124px; width: 210px" src="{{ asset('storage') }}/{{$car->image_1}}" alt="slides-01" />
                        </li>
                        <li>
                            <img style="height: 124px; width: 210px" src="{{ asset('storage') }}/{{$car->image_2}}" alt="slides-01" />
                        </li>
                        <li>
                            <img style="height: 124px; width: 210px" src="{{ asset('storage') }}/{{$car->image_3}}" alt="slides-01" />
                        </li>
                        <li>
                            <img style="height: 124px; width: 210px" src="{{ asset('storage') }}/{{$car->image_4}}" alt="slides-01" />
                        </li>
                        <!-- items mirrored twice, total of 12 -->
                    </ul>
                </div>
            </div>
            <!--col-lg-8-->
            <div class="col-lg-4 mexico-internal-text2">
                <div class="mexico-internal1">
                    <h4>Click Here To<br>
                        Contact Us Directly</h4>
                    <img src="{{asset('images/mexico-icon16.png')}}" alt="icon16">
                </div>
                <div class="mexico-internal2">
                    <h3><img src="{{asset('images/mexico-icon25.png')}}" alt="icon25">Specifications</h3>
                    <hr>
                    <ul>
                        <li>Has title?<span>{{ $car->has_title }}</span></li>
                        <li>Has Registration?<span>{{ $car->has_registration }}</span></li>
                        <li>Brand<span>{{ $car->car_makes }}</span></li>
                        <li>Model<span>{{ $car->car_models }}</span></li>
                        <li>Manufacturer Year<span>{{ $car->car_years }}</span></li>
                        <li>Transmission<span>{{ $car->transmission }}</span></li>
                        <li>Number Of Cylinders<span>{{ $car->cylinders }}</span></li>
                    </ul>
                </div>
            </div>
            <!--col-lg-4-->
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mexico-internal-text3">
                <div class="mexico-internal3">
                    <h3><img src="{{ asset('images/mexico-icon26.png') }}" alt="icon26">Description</h3>
                    <hr>
                    {{ $car->description }}
                </div>
            </div>
            <!--col-lg-4-->
        </div>
    </div>
</section>

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
<script src="{{ asset('js/jquery.flexslider.js') }}"></script>
<script>
    $(window).load(function () {
        // The slider being synced must be initialized first
        $('#carousel').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            itemWidth: 210,
            itemMargin: 5,
            prevText: "Previous",
            nextText: "Next",
            asNavFor: '#slider'
        });

        $('#slider').flexslider({
            animation: "slide",
            controlNav: false,
            animationLoop: false,
            slideshow: false,
            sync: "#carousel"
        });
    });
</script>
</body>
</html>