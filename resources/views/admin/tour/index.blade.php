<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>PanoV - Tour 360</title>
    <base href="{{ asset('') }}">
    <link href="tour/css/bootstrap.min.css" rel="stylesheet">
    <link href="tour/css/pe-icons.css" rel="stylesheet">
    <link href="tour/css/prettyPhoto.css" rel="stylesheet">
    <link href="tour/css/animate.css" rel="stylesheet">
    <link href="tour/css/style.css" rel="stylesheet">
    <link href="tour/css/update.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="tour/css/drop_menu.css" />
    <script src="tour/js/jquery.js"></script>

</head>
<!--/head-->

<body>
    <div id="preloader"></div>
    <header class="navbar navbar-inverse navbar-fixed-top opaqued" role="banner">
        <div id="search-wrapper">
            <div class="container">
                <input id="search-box" placeholder="Search">
            </div>
        </div>
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1><span class="pe-7s-gleam bounce-in"></span>PanoV</h1>
                </a>
            </div>
            <div id="header" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#single-page-slider">Trang chủ</a></li>
                    <li><a href="#portfolio">Sản phẩm</a></li>
                    <li><a href="#footer-wrapper">Về chúng tôi</a></li>
                </ul>
            </div>
        </div>
    </header>
    <!--/header-->


    <!--/#main-slider-->

    
        <section id="single-page-slider" class="no-margin">
            <div class="carousel slide" data-ride="carousel">
                <div class="item active">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="center gap fade-down section-heading">
                                    <h2 class="main-title">PanoV Gallery</h2>
                                    <p>Find project with name</p>
                                    <section class="main">
                                        <div class="wrapper-demo">
                                            <div id="dd" class="wrapper-dropdown-3" tabindex="1">
                                                <span>All types</span>
                                                <ul class="dropdown">
                                                    <li><a href="#">type 1</a></li>
                                                    <li><a href="#">type 2</a></li>
                                                    <li><a href="#">type 3</a></li>
                                                    <li><a href="#">type 4</a></li>
                                                    <li><a href="#">type 5</a></li>
                                                    <li><a href="#">type 6</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.item-->
            </div>

        </section>
        <section id="portfolio" class="white">
            <div class="container">
                <div class="gap"></div>
                <div class="center gap fade-down section-heading">
                    <h2 class="main-title">Project recent</h2>

                </div>
                <ul class="portfolio-items  isotope fade-up">

                    @foreach($tour360 as $tour)
                    <li  class="col-xl-4 col-lg-4 col-md-6 col-sm-12 portfolio-item joomla bootstrap isotope-item">
                        <div class="item-inner">
                            <a href="{{$tour->link}}" target="blank">
                                <img src="upload/tour/{{$tour->img_thumb}}" alt="">
                                <h5>{{$tour->name_project}}</h5>
                            </a>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div class="col-xl-12 container">
                    <div class="row">
                        <ul class="pagination pagination-lg">
                            <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                        </ul>
                        <!--/.pagination-->
                    </div>
                </div>
            </div>

        </section>
        <div id="footer-wrapper">
        <section id="bottom" class="">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 about-us-widget">
                        <h4>Về chúng tôi</h4>
                        <p>Holomia là công ty công nghệ Thực tế ảo hàng đầu Việt Nam với các phần mềm ứng dụng cho giáo dục, du lịch, giải trí, quảng cáo bất động sản.</p>
                    </div>
                    <!--/.col-md-3-->


                    <div class="col-md-4 col-sm-6">
                        <h4>Latest Articles</h4>
                        <div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="http://placehold.it/800x600" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Blog Post A</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                            <div class="media">
                                <div class="pull-left">
                                    <img class="widget-img" src="http://placehold.it/800x600" alt="">
                                </div>
                                <div class="media-body">
                                    <span class="media-heading"><a href="#">Blog Post B</a></span>
                                    <small class="muted">Posted 14 April 2014</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/.col-md-3-->

                    <div class="col-md-4 col-sm-6">
                        <h4>Liên hệ</h4>
                        <address>
                            <strong>Địa chỉ</strong><br>
                            3rd Floor, Ha Thanh Plaza, 102 Thai Thinh, Dong Da dist, Hanoi, Vietnam,<br>
                            3rd Floor, Circo Space, No.09 Nguyen Trai, Dist. 1, HCM City, Vietnam<br>
                            <abbr title="Phone"><i class="fa fa-phone"></i></abbr> +84 988162800<br>
                            <i class="fa fa-envelope" aria-hidden="true"> info@holomia.com</i>
                        </address>
                    </div>
                    <!--/.col-md-3-->
                </div>
            </div>
             <!--/#bottom-->

        <footer id="footer" class="">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        &copy; 2019 Your Site Name. <a href="https://templatemag.com/bootstrap-templates/">Bootstrap templates</a> by Holomia.
                    </div>
                    <div class="col-sm-4">
                        <ul class="pull-right">
                            <li><a id="gototop" class="gototop" href="#"><i class="fa fa-chevron-up"></i></a></li>
                            <!--#gototop-->
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <!--/#footer-->

        </section>
    </div>



    <div  id="bg_detail_frame" onclick="closeTour360()">
        <div id="background" >
            <iframe id="frame_detail" scrolling="no" src="http://sailingclubvillasphuquoc.vn/3dtour/index.html">
            </iframe>
        </div>
    </div>
    <script src="tour/js/bootstrap.min.js"></script>
    <script src="tour/js/jquery.prettyPhoto.js"></script>
    <script src="tour/js/plugins.js"></script>
    <script src="tour/js/init.js"></script>
    <script>
        var array = [

            'http://holomia.com/duan/vinhomes_Skylake/index.html',
            'http://holomia.com/duan/DragonHomesEcoCity/DragonHomesEcoCity.html',
            'http://holomia.com/duan/GreenPearl/v6/index.html',
            'http://holomia.com/duan/SunDTH/Ver11/SunDTH_360.html',
            'http://holomia.com/duan/BeauRivage/Ver9/index.html',
            'http://holomia.com/duan/D-One%20Saigon/final/index.html',
            'http://holomia.com/duan/Hinode%20City/v5/index.html',
            'http://holomia.com/duan/SPGW/final/index.html',
            'http://dot.edu.vn/duan/panov/tour.html'
        ];

        function openTour360(id) {
            unmute();
            document.getElementById("bg_detail_frame").style.visibility = "visible";
            document.getElementById("frame_detail").src = array[id];

        }

        function closeTour360() {
            document.getElementById("bg_detail_frame").style.visibility = "hidden";
           mute();
        }

        function fullscreen(){
             document.getElementById("bg_detail_frame").style.visibility = "visible";
        }
        var iframe_bk;
        //play status
        var status = 1;

        function mute() {
            if (status != 1) return;
            var iframe = $("#frame_detail");
            iframe_bk = iframe.clone();
            iframe.remove();

            status = 0;
        }

        function unmute() {
            if (status != 0) return;
            if (iframe_bk) {
                $("#background").append(iframe_bk);
                iframe_bk = null;
                status = 1;
            }
        }
    </script>
    <script>
        $(document).ready(function(){
          $("#btn-full-screen").click(function(){
            $("#background").css({
               "margin-left": "0",
                "margin-top": "0",
                "width" : "100%",
                "height" :"100%"
            });
              $("#btn-full-screen").css({
                 "visibility" : "hidden" 
              });
              $("#btn-exit").css({
                 "visibility" : "visible" 
              });
              $("#close-detail").css({
                 "visibility" : "hidden" 
              });
          });
        $("#btn-exit").click(function(){
                $("#background").css({
                       "margin-left": "10%",
                        "margin-top": "5%",
                        "width" : "80%",
                        "height" :"80%"
                })
              $("#btn-full-screen").css({
                 "visibility" : "visible" 
              });
              $("#btn-exit").css({
                 "visibility" : "hidden" 
              });
            $("#close-detail").css({
                 "visibility" : "visible" 
              });
          });
        });
    </script>
    <script type="text/javascript">
        function DropDown(el) {
            this.dd = el;
            this.placeholder = this.dd.children('span');
            this.opts = this.dd.find('ul.dropdown > li');
            this.val = '';
            this.index = -1;
            this.initEvents();
        }
        DropDown.prototype = {
            initEvents: function() {
                var obj = this;

                obj.dd.on('click', function(event) {
                    $(this).toggleClass('active');
                    return false;
                });

                obj.opts.on('click', function() {
                    var opt = $(this);
                    obj.val = opt.text();
                    obj.index = opt.index();
                    obj.placeholder.text(obj.val);
                });
            },
            getValue: function() {
                return this.val;
            },
            getIndex: function() {
                return this.index;
            }
        }

        $(function() {

            var dd = new DropDown($('#dd'));

            $(document).click(function() {
                // all dropdowns
                $('.wrapper-dropdown-3').removeClass('active');
            });

        });
    </script>

</body>

</html>