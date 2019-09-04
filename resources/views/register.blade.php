<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register In Mexico</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">

</head>
<body>

    <header class="mexico-home-header2">
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
                            <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/mexico-logo.png') }}">
                            </a>
                        </div>
{{--                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">--}}
{{--                            <ul class="nav navbar-nav navbar-right">--}}
{{--                                <li><a class="active" href="index.html">Home</a>--}}
{{--                                </li>--}}
{{--                                <li><a href="listings.html">Listings</a>--}}
{{--                                </li>--}}
{{--                                <li><a href="contact.html">Contact</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </div>--}}
                    </div>
                    <div class="col-lg-4 mexico-nav-extra">
                    <a class="one" href="{{ url('contact/') }}">Contact Us</a>
                    <a class="three" href="{{ url('login/') }}"><img src="{{ asset('images/mexico-icon3.png') }}" alt="icon3">Sign in or Register </a>
                    </div>
                </div>
            </div>
        </nav>
		<div class="container mexico-register-wrap">
            <div class="row">
           <h2>Create an account</h2>
            <form method="post" action="#">
          <div class="col-lg-6 col-lg-offset-3 mexico-register">
      <div class="form-group required" data-type="text" data-required="true">
      <label>username</label>
      <input type="text" class="form-control" placeholder="awesome-cashfforcars123" name="register1">
      </div>
      <div class="form-group required" data-type="text" data-required="true">
      <label>password</label>
      <input type="text" class="form-control" placeholder="*************" name="register2">
      </div>
      <div class="form-group required" data-type="text" data-required="true">
      <label>confirm password</label>
      <input type="text" class="form-control" placeholder="*************" name="register2">
      </div>   
     <div class="checkbox">
     <input type="checkbox" id="checkbox" name="" value="">
     <label for="checkbox"><span>by checking this box you agree to receive emails from Cars for Mexico</span></label>
      </div>
      <div class="form-group" data-type="submit">
      <button type="submit" class="btn-default">Register</button>
      </div>
	  <div class="mexico-register-extra">
      <span>Already have an account? </span><a href="{{ asset('login/') }}">Login</a>
      </div>
          </div>
      </form>
      </div>
        </div>
    </header>

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
                        <li>Copyright © {{ date('Y') }}</li>
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
                    <p>All Rights Reserved Cars For Mexico {{ date('Y') }}</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>