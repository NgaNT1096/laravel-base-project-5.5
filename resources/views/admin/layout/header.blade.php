<!-- Header -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-margin">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('/')}}"><b>VNi</b></a>
            </div>
            <!-- Brand and toggle get grouped for better mobile display -->
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                @if(Auth::user())
                    <ul class="nav navbar-nav pull-right">
                        <li class="nav-item dropdown">
                            <a style="cursor: pointer;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="images/flat/en.jpg"><i style="margin-left: 0.5em;" class="fa fa-caret-down"></i>
                            </a>
                            <div style="left: -5px; padding: 0.5em 1em; text-align: center;" class="dropdown-menu" >
                                <a href="{{url(Request::getPathInfo().'?lang=en')}}"><img src="images/flat/en.jpg"></a>
                                <div class="divider"></div>
                                <a href="{{url(Request::getPathInfo().'?lang=vn')}}"><img src="images/flat/vn.jpg"></a>
                            </div>
                        </li>

                        <li class="nav-item"><a class="nav-link" data-scroll href="{{url('client/home')}}">View web</a></li>
                        <li class="nav-item dropdown">
                            <a style="cursor: pointer;" class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user fa-fw" style="margin-right: 0.5em;"></i>{{ Auth::user()->name }}<i style="margin-left: 0.5em;" class="fa fa-caret-down"></i>
                            </a>
                            <div style="left: -5px; padding: 0.5em 1em; text-align: center;" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item" href="quan-ly-thong-tin">Thiết Lập Tài Khoản</a>
                                <div class="divider"></div>
                                <a class="dropdown-item" href="dang-xuat">Đăng Xuất</a>
                            </div>
                        </li>
                    </ul>
                    
                @else
                    <ul class="nav navbar-nav pull-right">
                        <li>
                            <a href="dang-ky-tai-khoan">Đăng ký</a>
                        </li>
                        @if(!Request::is('dang-nhap'))
                        <li>
                            <a style="cursor: pointer;" class="login-sec" data-toggle="modal" data-target="#myModal">Đăng Nhập</a>
                        </li>
                        @endif
                    </ul>
                @endif
            </div>
        </div>
        @include('admin.layout.menu')
            <!-- End Menu -->

</nav>
<!-- End Header -->