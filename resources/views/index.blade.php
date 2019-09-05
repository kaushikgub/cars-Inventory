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
<div class="modal fade" tabindex="-1" role="dialog" id="welcome_modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center" style="font-family: 'Nunito', sans-serif;">
                <h2 style="font-weight: lighter; color: #1F2095">You must be logged in to <br> view the inventory</h2>
                <h4 style="margin-top: 3rem">Please either create an account or login with your <br> account to view the
                    current inventory</h4>
                <div style="margin-top: 3rem; margin-bottom: 3rem">
                    <a style="width: 20rem; background: #FB246A; color: white" class="btn btn-lg"
                       href="{{ asset('login/') }}">Login</a>
                    <a style="width: 20rem; background: #20279B; color: white;" class="btn btn-lg"
                       href="{{ asset('register/') }}">Create an account</a>
                </div>
            </div>
            <div style="padding-bottom: 3rem" class="modal-footer">

            </div>
        </div>
    </div>
</div>

<header class="mexico-home-header">
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
                    <a class="three" href="{{url('login')}}"><img src="{{ asset('images/mexico-icon3.png') }}"
                                                                  alt="icon3">Sign in or Register </a>
                </div>
            </div>
        </div>
    </nav>
</header>

<div id="car-model-data"></div>

<div id="cq-search-result" style="display:none"></div>


<section class="mexico-search-section">
    <div class="container mexico-search-wrap">
        <div class="row">
            <form id="car_search">
                <div class="col-lg-3 mexico-search1">
                    <div class="form-group">
                        <select id="car-years" name="car-years" class="select_box">

                        </select>
                    </div>
                </div>
                <div class="col-lg-3 mexico-search1">
                    <div class="form-group">
                        <select name="car-makes" id="car-makes" class="select_box">

                        </select>
                    </div>
                </div>
                <div class="col-lg-3 mexico-search1">
                    <div class="form-group">
                        <select name="car-models" id="car-models" class="select_box">

                        </select>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
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
                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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
        <div class="row" id="inventory_container">
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
<script type="text/javascript" src="http://www.carqueryapi.com/js/carquery.0.3.4.js"></script>

<script language="JavaScript" type="text/javascript">

    function loadInventory(url){
        $.ajax({
            method: 'get',
            url: url,
            success: function (result) {
                console.log(result);
                $('#inventory_container').empty();
                $.each(result.data, function (key, value) {
                    let element = '<div style="margin-bottom: 3rem" class="col-lg-4 mexico-sale-img">\n' +
                        '                <img src="{{ asset('storage')}}/'+ value.image_1 +'" alt="img1">\n' +
                        '                <div class="mexico-sale-btn">\n' +
                        '                    <a href="#">\n' +
                        '                        <button type="button" class="btn-default">'+ value.available +'</button>\n' +
                        '                    </a>\n' +
                        '                    <a href="#">\n' +
                        '                        <button id="btn" type="button" class="btn-default">$'+ value.asking_price +'</button>\n' +
                        '                    </a>\n' +
                        '                </div>\n' +
                        '                <div class="mexico-sale-text">\n' +
                        '                    <ul>\n' +
                        '                        <li>'+ value.car_years +'</li>\n' +
                        '                        <li>Gasoline</li>\n' +
                        '                    </ul>\n' +
                        '                    <ul class="second">\n' +
                        '                        <li>'+ value.transmission +'</li>\n' +
                        '                        <li>28.000</li>\n' +
                        '                    </ul>\n' +
                        '                </div>\n' +
                        '                <div class="mexico-sale-text2">\n' +
                        '                    <a href="{{ url('car/inventory') }}/'+ value.id +'"><h2>'+ value.car_years +' '+ value.car_makes +' '+ value.car_models +'</h2></a>\n' +
                        '                </div>\n' +
                        '                <div class="mexico-sale-text3">\n' +
                        '                    <a href="{{ url('car/inventory') }}/'+ value.id +'"><h3><img src="images/mexico-icon7.png" alt="icon7">'+ value.car_makes +'</h3></a>\n' +
                        '                </div>\n' +
                        '            </div>';

                    $('#inventory_container').append(element);
                });
            },
            error: function (xhr) {
                console.log(xhr)
            }
        })
    }

    $(document).ready(function () {
        {{--if ('{{session('admin_id')}}') {--}}

        {{--} else {--}}
        {{--    $('#welcome_modal').modal('show');--}}
        {{--}--}}

        var carquery = new CarQuery();
        carquery.init();

        carquery.setFilters({sold_in_us: true});

        carquery.initYearMakeModelTrim('car-years', 'car-makes', 'car-models');
        carquery.init(2019);

        carquery.year_select_min = 1990;
        carquery.year_select_max = 2022;

        let url = '{{ url('car/inventory/') }}';
        loadInventory(url)
    });

    $(document).on('submit', '#car_search', function () {
        let formData = new FormData(this);
        formData.append('_token', '{{ csrf_token() }}');
        $.ajax({
            method: 'post',
            data: formData,
            url: '{{ url('car/search') }}',
            contentType: false,
            processData: false,
            cache: false,
            success: function (result) {
                console.log(result);
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