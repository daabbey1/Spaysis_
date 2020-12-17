<!DOCTYPE html>
<html>

<head>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../css/font.css" rel="stylesheet" type="text/css">
    <link href="../css/all.css" rel="stylesheet" type="text/css">
    <meta charset="ISO-8859-1">

    <script src="../js/about.js"></script>
    <link rel="stylesheet" href="../css/projects_style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SPAYSIS </title>
</head>

<body>
    <div class="def-height">
        <!-- Header -->
        <div class="head-section">
            <nav class="navbar navbar-expand-lg navbar-dark sub-head fixed-top">
                <a class="navbar-brand logo" href="#">
                    <img src="../images/main_logo.png" alt="logo" srcset="" style="color: aliceblue;">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto ">
                        <li class="nav-item ">
                            <a class="nav-link nav-link-txt text-light" href="{{ url('/') }}"> HOME <span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link nav-link-txt  text-light " href="#" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                ABOUT
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <div class="sub-tab">
                                    <div class="hover-tabs">
                                        <span class="hover-link"> <a href="{{ url('/about') }}"> About Spaysis </a>
                                        </span>
                                        {{-- <span class="hover-link" id="team"> <a href="{{ url('/profile') }}"> Team </a> --}}
                                        </span>
                                        <span class="hover-link" id="publication"> <a href="#"> Publications </a>
                                        </span>
                                        <span class="hover-link" id="career"> <a href="{{ url('/career') }}"> Career
                                            </a> </span>
                                        <span class="hover-link" id="policy"> <a href="#"> Policy & Notice </a> </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-txt  text-light nav-active" href="{{ url('/projects/general_profile') }}"> PROJECTS </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-txt  text-light" href="{{ url('/expertise/index') }}">
                                EXPERTISE </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-txt text-light " href="{{ url('/teams/profile') }}"> TEAM </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-txt text-light " href="/contact"> CONTACT </a>
                        </li>
                    </ul>

                    <div class="row sub-sech no-gutters">
                        <form class="form-inline search-box my-lg-0">
                            <input class="form-control search-input col-xs-10 col-sm-10 col-md-11 col-lg-11"
                                type="search" placeholder="Search" aria-label="Search">
                            <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                                <!-- <button class="btn my-sm-0 search-btn" type="submit">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </button> -->
                            </div>
                        </form>
                    </div>
                </div>
            </nav>
        </div>

        @yield('general_profile')


        <!-- ------------------| Footer |---------------------- -->
        <div class="foot">
            <div class="row no-gutters">
                <div class="foot-txt col-auto mr-auto">
                    <span class="copy ml-3"> 2020 SPAYSIS. All Rights Preserved. </span>
                </div>
                <div class="foot-logo col-auto">
                    <span class="mr-5">
                        <span class="twitter ml-1"> <i class="fab fa-twitter"></i> </span>
                        <span class="facebook mx-3"> <i class="fab fa-facebook"></i> </span>
                        <span class="instagram"> <i class="fab fa-instagram"></i> </span>
                    </span>
                </div>
            </div>
        </div>

        <!-- <script src="js/about.js"></script> -->
        <script src="../js/Bootstrapjquery.js"></script>
        <script defer src="../js/all.js"></script>
        <script src="../js/Propper.js"></script>
        <script src="../js/bootstrap.js"></script>
    </div>
</body>

</html>