<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Upload In Maxico</title>

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
                                <a href="{{ url('admin-panel/car-list') }}">Car-List</a>
                            </li>
                            <li>
                                <a class="active" href="{{ asset('admin-panel/car-upload') }}">Car-Upload</a>
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

<section class="mexico-upload-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 mexico-upload">
                <ul class="nav-list">
                    <li class="active"><a href="#1a" data-toggle="tab"><img
                                    src="{{ asset('images/mexico-icon17.png') }}" alt="icon17">General</a></li>
                    <li><a href="#2a" data-toggle="tab"><img src="{{ asset('images/mexico-icon24.png') }}" alt="icon18">Images</a>
                    </li>
                    <li><a href="#3a" data-toggle="tab"><img class="three" src="{{ asset('images/mexico-icon29.png') }}"
                                                             alt="icon29">Video</a></li>
                </ul>
            </div>
            <div class="col-lg-9 mexico-upload2-wrap">
                <form method="post" action="#">
                    <div class="mexico-upload2">
                        <h3><img src="{{ asset('images/mexico-icon17.png') }}" alt="icon17">General</h3>
                        <hr>
                        <div class="col-lg-12 mexico-upload3">
                            <div class="form-group required" data-type="text" data-required="true">
                                <label>Year Of The Car</label>
                                <select class="select_box">
                                    <option value="1"></option>
                                    <option value="2">2005</option>
                                    <option value="3">2006</option>
                                    <option value="4">2007</option>
                                </select>
                            </div>
                            <div class="form-group required" data-type="text" data-required="true">
                                <label>Make Of The Car</label>
                                <select class="select_box">
                                    <option value="1"></option>
                                    <option value="2">BMW</option>
                                    <option value="3">Daewoo</option>
                                    <option value="4">Honda</option>
                                </select>
                            </div>
                            <div class="form-group required" data-type="text" data-required="true">
                                <label>Model Of The Car</label>
                                <select class="select_box">
                                    <option value="1"></option>
                                    <option value="2">Lanos</option>
                                    <option value="3">Falcon</option>
                                    <option value="4">Ranger</option>
                                </select>
                            </div>
                            <div class="form-group required" data-type="text" data-required="true">
                                <label>Asking Price</label>
                                <input type="text" class="form-control" name="upload_price">
                            </div>
                            <div class="form-group required" data-type="text" data-required="true">
                                <label>Title</label>
                                <select class="select_box">
                                    <option value="1"></option>
                                    <option value="2">Cash For Cars</option>
                                    <option value="3">Cash For Junk Cars</option>
                                    <option value="4">Sell My Car</option>
                                </select>
                            </div>
                            <div class="form-group required" data-type="text" data-required="true">
                                <label>Registration</label>
                                <select class="select_box">
                                    <option value="1"></option>
                                    <option value="2">2015</option>
                                    <option value="3">2016</option>
                                    <option value="4">2017</option>
                                </select>
                            </div>
                            <div class="form-group required" data-type="text" data-required="true">
                                <label>Condition</label>
                                <select class="select_box">
                                    <option value="1"></option>
                                    <option value="2">New</option>
                                    <option value="3">Old</option>
                                    <option value="4">Repair</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <!--col-lg-12-->

                    <div class="col-lg-12 mexico-upload-wrap2">
                        <h3><img src="{{ asset('images/mexico-icon28.png') }}" alt="icon28">Images</h3>
                        <hr>
                        <div class="col-lg-12 mexico-license3">
                            <div class="col-lg-3 mexico-license4">
                                <img src="{{ asset('images/mexico-img3.png') }}" alt="img3">
                            </div>
                            <!--col-lg-3-->
                            <div class="col-lg-3 mexico-license5">
                                <img src="{{ asset('images/mexico-img4.png') }}" alt="img4">
                            </div>
                            <!--col-lg-3-->
                        </div>
                        <!--col-lg-12-->
                        <div class="col-lg-12 mexico-license6">
                            <p>Maximum file size: 2 MB.</p>
                        </div>
                        <!--col-lg-12-->
                    </div>

                    <div class="col-lg-12 mexico-upload-wrap3">
                        <div class="col-lg-12 mexico-license3">
                            <div class="col-lg-3 mexico-license4">
                                <img src="{{ asset('images/mexico-img3.png') }}" alt="img3">
                            </div>
                            <!--col-lg-3-->
                            <div class="col-lg-3 mexico-license5">
                                <img src="{{ asset('images/mexico-img4.png') }}" alt="img4">
                            </div>
                            <!--col-lg-3-->
                            <div class="col-lg-3 mexico-license5">
                                <img src="{{ asset('images/mexico-img4.png') }}" alt="img4">
                            </div>
                            <!--col-lg-3-->
                            <div class="col-lg-3 mexico-license5">
                                <img src="{{ asset('images/mexico-img4.png') }}" alt="img4">
                            </div>
                            <!--col-lg-3-->
                        </div>
                        <!--col-lg-12-->
                        <div class="col-lg-12 mexico-license6">
                            <p>Maximum file size: 10 MB.</p>
                        </div>
                        <!--col-lg-12-->
                    </div>

                    <div class="col-lg-12 mexico-video-wrap">
                        <h3><img src="{{ asset('images/mexico-icon29.png') }}" alt="icon28">Video</h3>
                        <hr>
                        <div class="col-lg-12 mexico-license3">
                            <div class="form-group required" data-type="text" data-required="true">
                                <label>Asking Price</label>
                                <input type="text" class="form-control" placeholder="Video" name="upload_price">
                            </div>
                        </div>
                        <!--col-lg-12-->
                    </div>

                    <div class="col-lg-12 mexico-upload-btn">
                        <div class="form-group" data-type="submit">
                            <button type="submit" class="btn-default">Preview</button>
                            <a href="#">Skip preview and submit</a>
                        </div>
                    </div>
                </form>
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