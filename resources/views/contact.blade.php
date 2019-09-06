<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us</title>

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
            <div class="col-lg-12 mexico-contact-heading">
                <h2>Contact Us</h2>
            </div>
        </div>
    </div>
</section>

<section class="mexico-contact-section2">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mexico-contact">
                <div class="mexico-contact-wrap">
                    <h3><img src="{{ asset('images/mexico-icon10.png') }}" alt="icon10"> Contact Use</h3>
                    <hr>
                    <form method="post" action="{{ url('contact/user-mail') }}">
                        {{ csrf_field() }}
                        @if($errors->any())
                            @foreach($errors as $error)
                                {{$error}}
                            @endforeach
                        @endif
                        <div class="form-group required" data-type="text" data-required="true">
                            <input type="text" class="form-control" placeholder="Name" name="name">
                        </div>
                        <div class="form-group required" data-type="text" data-required="true">
                            <input type="email" class="form-control" placeholder="Your Email Address" name="email">
                        </div>
                        <div class="form-group required" data-type="text" data-required="true">
                            <input type="text" class="form-control" placeholder="Subject" name="subject">
                        </div>
                        <div class="form-group required" data-type="text" data-required="true">
                            <textarea id="text" class="form-control" placeholder="How can I help you?" name="massage"></textarea>
                        </div>
                        <div class="form-group" data-type="submit">
                            <button type="submit" class="btn-default">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 mexico-contact-text2">
                <div class="mexico-contact1">
                    <h4>Click Here To<br>
                        Contact Us Directly</h4>
                    <img src="images/mexico-icon16.png" alt="icon16">
                </div>
                <div class="mexico-contact2">
                    <span class="second">Contact Us</span> <span>134-234-56789</span>
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