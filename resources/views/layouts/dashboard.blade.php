<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- morris.js -->

    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

    <!-- end of morris.js dependencies -->



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/fa65928553.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
        <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse"
            data-target="#myNavbar">

            <span class="navbar-toggler-icon"></span>


        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <div class="container-fluid">
                <div class="row">
                    <!-- sidebar -->

                    <div class="col-xl-2 col-lg-2 col-md-4 sidebar fixed-top">
                        <a href="#"
                            class="navbar-brand text-white d-block mx-auto text-center py-2 mb-3 bottom-border">ADMIN</a>
                        <div class="bottom-border">
                            <img src="../images/Round-Profile-Pic.png" width="50" class="rounded-circle mb-2">
                            <h5 class="text-white mb-0 admin-name"></h5>
                        </div>
                        <!-- sidebar options -->
                        <ul class="navbar-nav flex-column mt-4">

                            <li class="nav-item active"><a href="{{route('dashboard')}}"
                                    class="nav-link text-white p-3 mb-2 sidebar-link"><i
                                        class="fa fa-dashboard text-light fa-lg mr-3"></i>Dashboard</a></li>


                            <div class="dropdown">
                                <button type="button" data-toggle="collapse" data-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne"
                                    class="btn btn-link text-white collapsible-link w-100 p-3">
                                    <i class="fa fa-user-friends
                                     user-icon text-light fa-lg mr-3"></i><span
                                        class="text-white user-title">Products</span>
                                </button>
                                <div id="collapseOne" aria-labelledby="headingOne" data-parent="#accordionExample"
                                    class="collapse hidden">
                                    <div class="card-body p-2">
                                        <li class="nav-item"><a
                                                class="nav-link text-white p-3 mb-2 mt-3 sidebar-link dropdown-link"
                                                href="{{route('create')}}"><i
                                                    class="fa fa-user-friends text-light fa-lg mr-3"></i>Add Products</a>
                                        </li>
                                        <li class="nav-item"><a
                                                class="nav-link text-white p-3 mb-2 mt-3 sidebar-link dropdown-link"
                                                href=""><i
                                                    class="fas fa-plus text-light fa-lg mr-2"></i>Delete Products</a>
                                        </li>
                                    </div>
                                </div>


                                <li class="nav-item"><a href=""
                                        class="nav-link text-white p-3 mb-2 mt-3 sidebar-link "><i
                                            class="fas fa-blog text-light fa-lg mr-3"></i>Portfolio</a></li>

                                {{--  <li class="nav-item"><a href=""
                                        class="nav-link text-white p-3 mb-3  sidebar-link"><i
                                            class="fa fa-calendar text-light fa-lg mr-3"></i>Events</a></li>

                                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-3  sidebar-link"><i
                                            class="fa fa-newspaper text-light fa-lg mr-3"></i>Publications</a>
                                </li>

                                <li class="nav-item"><a href="#" class="nav-link text-white p-3 mb-3  sidebar-link"><i
                                            class="fa fa-lock text-light fa-lg mr-3"></i>Permissions</a></li>  --}}
                        </ul>

                        <!-- end sidebar options -->


                    </div>


                    <!-- end of sidebar -->

                    <!-- top-nav -->

                    <div
                        class="col-xl-10 col-lg-10 col-md-8 ml-auto text-white bottom-border top-navbar fixed-top py-2">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <h4 class="text-blue text-uppercase mb-0 dashboard-text">@yield('View_User_title')
                                    @yield('dashboard_title') @yield('events_title') @yield('Add_Users_title')</h4>
                            </div>

                            <div class="col-md-5"></div>

                            <div class="col-md">
                                <ul class="navbar-nav">
                                    <li class="nav-item icon-parent"><a href="" class="nav-link icon-bullet"><i
                                                class="fas fa-comments navbar-nav-icons ml-md-auto"></i></a></li>

                                    <li class="nav-item icon-parent"><a href="" class="nav-link icon-bullet"><i
                                                class="fas fa-bell navbar-nav-icons ml-md-auto"></i></a></li>

                                </ul>
                            </div>

                            <!-- top nav profile pic -->

                            <div class="col-md">
                                <ul class="navbar-nav">
                                    <a href="#" id="imageDropdown" data-toggle="dropdown">
                                        <img src="../images/Round-Profile-Pic.png" width="40"
                                            class="rounded-circle ml-md-auto mr-4">
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right mr-5 mt-3 dropdown-pic-menu"
                                        role="menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item dropdown-pic-item mt-3 mb-3 p-3" href="#"><i
                                                class="fa fa-cogs text-light fa-lg mr-3 "></i>Settings</a>
                                        <a class="dropdown-item dropdown-pic-item mt-3 mb-3 p-3" href="#"
                                            data-toggle="modal" data-target="#sign-out"><i
                                                class="fas fa-sign-out-alt text-white mr-3 ml-2 "></i>Logout</a>

                                    </div>
                                </ul>
                            </div>

                            <!-- end of top nav profile pic -->
                        </div>

                    </div>
                    <!--end top-nav -->
                </div>
            </div>
        </div>
    </nav>
    <!-- end of navbar -->

    <!-- Modal -->

    <div class="modal fade" id="sign-out">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Log Out</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    Do you wish to Log Out?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success modal-stayhere-button" data-dismiss="modal">No, Stay
                        Here</button>
                    <a href="{{ route('logout') }}" class="btn btn-danger modal-logout-button"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Yes, Log
                        Out</a>
                </div>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>

    <!-- end of modal -->





    <!-- events calendar -->

    <section>

        <div class="container-fluid">

            <div class="row mb-5">

                <div class="col-xl-10 col-lg-10 col-md-8 ml-auto">
                    <div class="row">

                        <div class="col-12">
                            @yield('content')



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section>

        <div class="container-fluid">

            <div class="row mb-5">

                <div class="col-xl-10 col-lg-10 col-md-8 ml-auto">
                    <div class="row">

                        <div class="col-12">
                            @yield('content2')



                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <!-- end of tables -->





    <section>

        <div class="container-fluid">

            <div class="row mb-5">

                <div class="col-xl-10 col-lg-10 col-md-8 ml-auto">
                    <div class="row">

                        <div class="add_user_container col-12">
                            @yield('add_user')



                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>

    <section>

        <div class="container-fluid">

            <div class="row mb-5">

                <div class="col-xl-10 col-lg-10 col-md-8 ml-auto">
                    <div class="row">

                        <div class="add_user_container col-12">
                            @yield('posts_page')



                        </div>
                    </div>
                </div>
            </div>
        </div>



    </section>



</body>

</html>
