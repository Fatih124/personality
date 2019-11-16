<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="ATI">
    <meta name="keyword" content="Personality Personel Admin System">


    <title>Personality - Personel Yönetim ve Görevlendirme Paneli</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/bootstrap-reset.css')}}" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}" type="text/css">

    <!--right slidebar-->
    <link href="{{asset('css/slidebars.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->

    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />


    <!--select 2-->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/select2/css/select2.min.css')}}"/>

</head>

<body class="light-sidebar-nav">


<section id="container">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <i class="fa fa-bars"></i>
        </div>
        <!--logo start-->
        <a href="{{asset('/')}}" class="logo">Personal<span>ity</span></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu" style="margin-left: 28px;!important;">
            <!--  notification start -->
            <ul class="nav top-menu">
                <!-- settings start -->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-tasks"></i>
                        <span class="badge badge-success">1</span>
                    </a>
                    <ul class="dropdown-menu extended tasks-bar">
                        <div class="notify-arrow notify-arrow-green"></div>
                        <li>
                            <p class="green">1 Adet Bekleyen Göreviniz Var</p>
                        </li>
                        <li>
                            <a href="#">
                                <div class="task-info">
                                    <div class="desc">Dashboard v1.3</div>
                                    <div class="percent">40%</div>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        <span class="sr-only">40% Tamamlandı (success)</span>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="external">
                            <a href="#">Tüm Görevleri Gör</a>
                        </li>
                    </ul>
                </li>
                <!-- settings end -->
                <!-- inbox dropdown start-->
                <li id="header_inbox_bar" class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge badge-danger">1</span>
                    </a>
                    <ul class="dropdown-menu extended inbox">
                        <div class="notify-arrow notify-arrow-red"></div>
                        <li>
                            <p class="red">1 Yeni Mesajınız Var.</p>
                        </li>
                        <li>
                            <a href="#">
                                <span class="photo"><img alt="avatar" src="img/avatar-mini4.jpg"></span>
                                <span class="subject">
                                    <span class="from">Jondi Rose</span>
                                    <span class="time">Just now</span>
                                    </span>
                                <span class="message">
                                        Hello, this is metrolab
                                    </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">Hepsini Gör</a>
                        </li>
                    </ul>
                </li>
                <!-- inbox dropdown end -->
            </ul>
            <!--  notification end -->
        </div>
        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <!-- user login dropdown start-->
                @if (Route::has('login'))
                @auth
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="username">Merhaba: {{\Illuminate\Support\Facades\Auth::user()->name}}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout dropdown-menu-right">
                        <div class="log-arrow-up"></div>
                        <li style="width: 48.3%!important;"><a href=""><i class=" fa fa-suitcase"></i>Profil</a></li>
                        <li style="width: 48.3%!important;"><a onclick="event.preventDefault();document.getElementById('logout-form').submit();" href="{{route('logout')}}"><i class="fa fa-key"></i> Çıkış Yap</a></li>
                        <form action="{{route('logout')}}" id="logout-form" method="post">{{csrf_field()}}</form>
                    </ul>
                </li>
                    @else
                    <li>asdsad</li>
                @endauth
                @endif
                <!-- user login dropdown end -->
            </ul>
            <!--search & user info end-->
        </div>
    </header>

@include("layouts.sidebar")
@yield('content')

<!--footer start-->
    <footer class="site-footer">
        <div class="text-center">
            2019 &copy; Personality by LabSt.
            <a href="#" class="go-top">
                <i class="fa fa-angle-up"></i>
            </a>
        </div>
    </footer>
    <!--footer end-->
</section>

<!-- js placed at the end of the document so the pages load faster -->
<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
<script class="include" type="text/javascript" src="{{asset('js/jquery.dcjqaccordion.2.7.js')}}"></script>
<script src="{{asset('js/jquery.scrollTo.min.js')}}"></script>
<script src="{{asset('js/jquery.nicescroll.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery.sparkline.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}" ></script>
<script src="{{asset('js/jquery.customSelect.min.js')}}" ></script>
<script src="{{asset('js/respond.min.js')}}" ></script>

<!--right slidebar-->
<script src="{{asset('js/slidebars.min.js')}}"></script>

<!--common script for all pages-->
<script src="{{asset('js/common-scripts.js')}}"></script>

<!--script for this page-->
<script src="{{asset('js/sparkline-chart.js')}}"></script>
<script src="{{asset('js/easy-pie-chart.js')}}"></script>
<script src="{{asset('js/count.js')}}"></script>

<!--dynamic table


 initialization -->
<script src="{{asset('js/dynamic_table_init.js')}}"></script>

<link href="{{asset('assets/advanced-datatable/media/css/demo_page.css')}}" rel="stylesheet" />
<link href="{{asset('assets/advanced-datatable/media/css/demo_table.css')}}" rel="stylesheet" />
<script src="{{asset('js/jquery-ui-1.9.2.custom.min.js')}}'"></script>
<script type="text/javascript" language="javascript" src="{{asset('assets/advanced-datatable/media/js/jquery.dataTables.js')}}"></script>
<script type="text/javascript" src="{{asset('assets/data-tables/DT_bootstrap.js')}}'"></script>
<link rel="stylesheet" href="{{asset('assets/data-tables/DT_bootstrap.css')}}" />



<!--select2-->
<script type="text/javascript" src="{{asset('assets/select2/js/select2.min.js')}}"></script>
<!--right slidebar-->




<script>

    //owl carousel

    $(document).ready(function() {
        $("#owl-demo").owlCarousel({
            navigation : true,
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem : true,
            autoPlay:true

        });
    });

    //custom select box

    $(function(){
        $('select.styled').customSelect();
    });

    $(window).on("resize",function(){
        var owl = $("#owl-demo").data("owlCarousel");
        owl.reinit();
    });

</script>

</body>


</html>
