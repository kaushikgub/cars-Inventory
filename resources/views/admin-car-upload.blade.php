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
                <form id="car_form">
                    <div class="mexico-upload2">
                        <h3><img src="{{ asset('images/mexico-icon17.png') }}" alt="icon17">General</h3>
                        <hr>
                        <div class="col-lg-12 mexico-upload3">
                            <div class="form-group">
                                <label for="car-years">Year Of The Car</label>
                                <select id="car-years" name="car_years"  class="select_box" required>

                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="car-makes">Make Of The Car</label>
                                <select name="car_makes" id="car-makes"  class="select_box" required>

                                </select>
                            </div>
                            <div class="form-group ">
                                <label for="car-models">Model Of The Car</label>
                                <select  name="car_models" id="car-models" class="select_box" required>

                                </select>
                            </div>
                            <div class="form-group ">
                                <label>Asking Price</label>
                                <input type="number" class="form-control" name="asking_price" required>
                            </div>
                            <div class="form-group" data-type="text">
                                <label>Title</label>
                                <select class="select_box" name="has_title" required>
                                    <option value=""></option>
                                    <option value="Cash For Cars">Cash For Cars</option>
                                    <option value="Cash For Junk Cars">Cash For Junk Cars</option>
                                    <option value="Sell My Car">Sell My Car</option>
                                </select>
                            </div>
                            <div class="form-group" data-type="text">
                                <label>Registration</label>
                                <select class="select_box" name="has_registration" required>
                                    <option value=""></option>
                                    <option value="2015">2015</option>
                                    <option value="2016">2016</option>
                                    <option value="2017">2017</option>
                                </select>
                            </div>
                            <div class="form-group" data-type="text">
                                <label>Condition</label>
                                <select class="select_box" name="condition" required>
                                    <option value=""></option>
                                    <option value="New">New</option>
                                    <option value="Old">Old</option>
                                    <option value="Repair">Repair</option>
                                </select>
                            </div>
                            <div class="form-group " data-type="text" data-="true">
                                <label>Number Of Cylinders</label>
                                <input type="number" class="form-control" name="cylinders" required>
                            </div>
                            <div class="form-group " data-type="text" data-="true">
                                <label>Transmission</label>
                                <select class="select_box" name="transmission" required>
                                    <option value=""></option>
                                    <option value="Manual">Manual</option>
                                    <option value="Auto">Auto</option>
                                </select>
                            </div>
                            <div class="form-group " data-type="text" data-="true">
                                <label for="description">Description</label>
                                <textarea class="form-control" name="description" id="description"></textarea>
                            </div>
                        </div>
                    </div>
                    <!--col-lg-12-->

                    <div class="col-lg-12 mexico-upload-wrap2">
                        <h3><img src="{{ asset('images/mexico-icon28.png') }}" alt="icon28">Images</h3>
                        <hr>
                        <div class="col-lg-12 mexico-license3">
                            <div class="col-lg-3 mexico-license4">
                                <input type="file" accept="image/*" name="image_1" id="image_1" style="opacity: 0; height: 130px; width: 200px; cursor: pointer" required>
                                <img style="margin-top: -156px" src="{{ asset('images/mexico-img3.png') }}" alt="img3">
                            </div>
                            <!--col-lg-3-->
                            <div class="col-lg-3 mexico-license5">
                                <img id="p_image_1" style="height: 13rem; width: 20rem" src="{{ asset('images/mexico-img4.png') }}" alt="img4">
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
{{--                            <div class="col-lg-3 mexico-license4">--}}
{{--                                <img src="{{ asset('images/mexico-img3.png') }}" alt="img3">--}}
{{--                            </div>--}}
                            <!--col-lg-3-->
                            <div class="col-lg-4 mexico-license5">
                                <input type="file" accept="image/*" name="image_2" id="image_2" style="opacity: 0; height: 130px; width: 200px; cursor: pointer" required>
                                <img id="p_image_2" style="margin-top: -156px; height: 13rem; width: 20rem" src="{{ asset('images/mexico-img3.png') }}" alt="img3">
                            </div>
                            <!--col-lg-3-->
                            <div class="col-lg-4 mexico-license5">
                                <input type="file" accept="image/*" name="image_3" id="image_3" style="opacity: 0; height: 130px; width: 200px; cursor: pointer" required>
                                <img id="p_image_3" style="margin-top: -156px; height: 13rem; width: 20rem" src="{{ asset('images/mexico-img3.png') }}" alt="img3">
                            </div>
                            <!--col-lg-3-->
                            <div class="col-lg-4 mexico-license5">
                                <input type="file" accept="image/*" name="image_4" id="image_4" style="opacity: 0; height: 130px; width: 200px; cursor: pointer" required>
                                <img id="p_image_4" style="margin-top: -156px; height: 13rem; width: 20rem" src="{{ asset('images/mexico-img3.png') }}" alt="img3">
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
                            <div class="form-group " data-type="text" data-="true">
                                <label>Video</label>
                                <input type="text" class="form-control" placeholder="Video" name="video_link">
                            </div>
                        </div>
                        <!--col-lg-12-->
                    </div>

                    <div class="col-lg-12 mexico-upload-btn">
                        <div class="form-group" data-type="submit">
                            <button type="submit" class="btn-default">Submit</button>
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
<script src="{{ asset('js/jquery.toaster.js') }}"></script>
<script type="text/javascript" src="http://www.carqueryapi.com/js/carquery.0.3.4.js"></script>
<script language="JavaScript" type="text/javascript">
    $(document).ready(function () {
        var carquery = new CarQuery();
        carquery.init();

        carquery.setFilters({sold_in_us: true});

        carquery.initYearMakeModelTrim('car-years', 'car-makes', 'car-models');
        carquery.init('2019');

        carquery.year_select_min = 1990;
        carquery.year_select_max = 2022;
    });

    function readURL(input, img) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#'+img).attr('src', false);
                $('#'+img).attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(document).on('input', '#image_1', function () {
        readURL(this, 'p_image_1');
    });

    $(document).on('input', '#image_2', function () {
        readURL(this, 'p_image_2');
    });

    $(document).on('input', '#image_3', function () {
        readURL(this, 'p_image_3');
    });

    $(document).on('input', '#image_4', function () {
        readURL(this, 'p_image_4');
    });

    $(document).on('submit', '#car_form', function () {
        let formData = new FormData(this);
        formData.append('_token', '{{ csrf_token() }}');
        $.ajax({
            method: 'post',
            data: formData,
            url: '{{ url('admin-panel/car-upload') }}',
            contentType: false,
            processData: false,
            cache: false,
            success: function (result) {
                console.log(result);
                if (result === 'Car upload Successfully'){
                    $('#p_image_1').attr('src', '{{ asset('images/mexico-img4.png') }}');
                    $('#p_image_2').attr('src', '{{ asset('images/mexico-img3.png') }}');
                    $('#p_image_3').attr('src', '{{ asset('images/mexico-img3.png') }}');
                    $('#p_image_4').attr('src', '{{ asset('images/mexico-img3.png') }}');
                    $('#image_1').val();
                    $('#image_2').val();
                    $('#image_3').val();
                    $('#image_4').val();
                    $('#car_form').trigger('reset');
                    $.toaster({ title: 'Success', priority : 'success', message : result });
                }
                else {
                    $.toaster({ title: 'Warring', priority : 'danger', message : 'Something went wrong' });
                }
            },
            error: function (xhr) {
                console.log(xhr);
            }
        });
        return false;
    })

</script>
</body>
</html>