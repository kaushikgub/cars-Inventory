<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login In Mexico</title>

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800,900&display=swap" rel="stylesheet">

</head>
<body>

<header class="mexico-home-header3">
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
                        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('images/mexico-logo.png') }}">
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 mexico-nav-extra">
                    <a class="one" href="{{ url('contact/') }}">Contact Us</a>
                    <a class="three" href="{{ url('register/') }}"><img src="{{ asset('images/mexico-icon3.png') }}"
                                                                        alt="icon3">Registration </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mexico-register-wrap">
        <div class="row">
            <button id="massage" class="sr-only btn-danger new-alert2">Wrong Username/Password. Please Try Again.</button>
            <h3>Login Your Account</h3>
            <form id="login_form">
                <div class="col-lg-6 col-lg-offset-3 mexico-register">
                    <div class="form-group required" data-type="text" data-required="true">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control" placeholder="Email" name="email" required>
                    </div>
                    <div class="form-group required" data-type="text" data-required="true">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control" placeholder="****" name="password" required>
                    </div>
                    <div class="form-group" data-type="submit">
                        <button id="btn" type="submit" class="btn-default">Login</button>
                    </div>
                    <div class="mexico-register-extra2">
                        <a href="{{ url('register/') }}">Create an account</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</header>

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
<script>
    $(document).on('submit', '#login_form', function () {
        let formData = new FormData(this);
        formData.append('_token', '{{ csrf_token() }}');
        $.ajax({
            method: 'post',
            data: formData,
            url: '{{ url('login') }}',
            contentType: false,
            processData: false,
            cache: false,
            success: function (result) {
                console.log(result);
                if (result === 'Login Successful'){
                    window.location = '{{ url('/') }}';
                } else {
                    $('#massage').removeClass('sr-only');
                }
            },
            error: function (xhr) {
                console.log(xhr);
            }
        });
        return false;
    });
</script>
</body>
</html>