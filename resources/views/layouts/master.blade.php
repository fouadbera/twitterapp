<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="{{ asset('assets/img/faces/twitterico.ico') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Twitter Product</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />



    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets/css/pe-icon-7-stroke.css') }}" rel="stylesheet" />

    <!-- datatable css -->
    <link href="{{ asset('assets/css/jquery.dataTables.min.css') }}" rel="stylesheet" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="{{ asset('assets/css/animate.min.css') }}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{ asset('assets/css/light-bootstrap-dashboard.css') }}" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="{{ asset('assets/css/demo.css') }}" rel="stylesheet" />

    <!-- Custom CSS     -->
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />


</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

        <div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    Twitter
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="{{url('/dashboard')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>



                   <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#formsExamples">
                            <i class="fa fa-search"></i>
                            <p>
                                Search
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="formsExamples">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{url('/recherchertweet')}}">
                                        <i class="pe-7s-look"></i>
                                        <span class="sidebar-normal">Tweets</span>
                                    </a>
                                </li>
                                <li class="nav-item ">

                                    <a class="nav-link" href="{{url('/rechercherprofil')}}">
                                        <i class="pe-7s-users"></i>

                                        <span class="sidebar-normal">Profiles</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </li>


                <li>

                    <a href="{{url('/listegroupe')}}">
                        <i class="pe-7s-news-paper"></i>
                        <p>Groups</p>
                    </a>
                </li>
                
               


                <li class="nav-item">
                        <a class="nav-link" data-toggle="collapse" href="#myTweets">
                            <i class="pe-7s-graph2"></i>
                            <p>
                                Tweets
                                <b class="caret"></b>
                            </p>
                        </a>
                        <div class="collapse " id="myTweets">
                            <ul class="nav">
                                <li class="nav-item ">
                                    <a class="nav-link" href="{{url('/mytweets')}}">
                                        <i class="pe-7s-look"></i>
                                        <span class="sidebar-normal">Create Tweet</span>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>
                    </li>




                <li>
                    <a href="notifications.html">
                        <i class="pe-7s-graph2"></i>
                        <p>Compaigns</p>
                    </a>
                </li>


            </ul>
        </div>
    </div>

    <!-- nav bar star -->

    <div class="main-panel">
        <nav class="navbar navbar-ct-blue navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dashboard</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>

                           <a href="">

                               <p><i class="fa fa-user"></i> User Profile</p>
                            </a>
                        </li>
                        <li>
                           <a href="">
                               <p>Training</p>
                            </a>
                        </li>

                        <li>
                           <a href="">
                               <p>Support</p>
                            </a>
                        </li>

                        <!-- dropdown
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <p>
                                        Dropdown
                                        <b class="caret"></b>
                                    </p>

                              </a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                              </ul>
                        </li> -->
                        <li>
                            <a href="#">
                                <p>Log out</p>
                            </a>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

<!-- fininsh navbar -->

            <div class="content">
                @yield('content')
            </div>



    </div>
</div>


</body>



    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.dataTables.min.js') }}" type="text/javascript" ></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}" type="text/javascript"></script>
    <!--  Charts Plugin -->
    <script src="{{ asset('assets/js/chartist.min.js') }}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{ asset('assets/js/bootstrap-notify.js') }}"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    <script src="{{ asset('assets/js/light-bootstrap-dashboard.js?v=1.4.0') }}"></script>

    <!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    <script src="{{ asset('assets/js/demo.js') }}"></script>


@yield('script')



</html>
