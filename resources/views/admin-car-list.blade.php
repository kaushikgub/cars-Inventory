<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Listing</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">

</head>
<body>

<header class="mexico-home-header4">
    <nav class="navbar navbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mexico-nav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/mexico-logo.png') }}">
                        </a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a class="active" href="{{ url('admin-panel/car-list') }}">Car-List</a>
                            </li>
                            <li>
                                <a href="{{ asset('admin-panel/car-upload') }}">Car-Upload</a>
                            </li>
                            <li>
                                <a href="{{ asset('admin-logout') }}">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>

<section class="mexico-listing-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 mexico-listing">
                <ul class="nav-list">
                    <li><a href="#1a" data-toggle="tab"><img src="{{ asset('images/mexico-icon17.png') }}" alt="icon17">Dashboard</a>
                    </li>
                    <li class="active"><a href="#2a" data-toggle="tab"><img src="{{ asset('images/mexico-icon18.png') }}" alt="icon18">Listings</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-9 mexico-listing2-wrap">
                <div class="mexico-listing2">
                    <h3><img src="{{ asset('images/mexico-icon19.png') }}" alt="icon19">My Listings</h3>
                    <hr>
                    @foreach($cars as $car)
                        <div class="col-lg-12 mexico-listing3">
                            <div class="col-lg-3 mexico-listing-img">
                                <img style="height: 150px; width: 210px" src="{{ asset('storage') }}/{{ $car->image_1 }}" alt="img4">
                            </div>
                            <div class="col-lg-4 mexico-listing-content">
                                <a href="#">
                                    <button class="btn-default">$ {{ $car->asking_price}}</button>
                                </a>
                                <a href="#"><h2>{{ $car->car_years }} {{ $car->car_makes }} {{ $car->car_models }}</h2></a>
                                <p>Lorem Ipsum Dolor Sit Amet</p>
                                <a href="#"><h4><img src="{{ asset('images/mexico-icon7.png') }}" alt="icon7">{{ $car->car_makes }}</h4></a>
                            </div>
                            <div class="col-lg-5 mexico-listing-content2">
                                <a href="{{ url('admin-panel/car-edit') }}/{{ $car->id }}">
                                    <button id="btn" class="btn-default"><img src="{{ asset('images/mexico-icon20.png') }}" alt="icon20">Edit
                                    </button>
                                </a>
                                <a href="{{ url('admin-panel/car-delete') }}/{{ $car->id }}">
                                    <button id="btn2" class="btn-default"><img src="{{ asset('images/mexico-icon21.png') }}" alt="icon21">Delete
                                    </button>
                                </a>
                                <a href="{{ url('admin-panel/car-sell') }}/{{ $car->id }}">
                                    <button id="btn3" class="btn-default"><img src="{{ asset('images/mexico-icon21.png') }}" alt="icon22">{{ $car->available }}</button>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <!--col-lg-9-->
        </div>
    </div>
</section>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>