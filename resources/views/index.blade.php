<!DOCTYPE html>
<html>

<head>
    <title>SPAYSIS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/font.css" rel="stylesheet" type="text/css">
    <link href="css/all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href=" css/style.css">
</head>

<body>
  <div class='sub-body'>
    <!-- Header -->
    <div class="head-section">
    
        <nav class="navbar navbar-expand-lg navbar-dark sub-head fixed-top bg-dange">
            <a class="navbar-brand logo bg-inf" href="#">
                <img src="images/main_logo.png" alt="logo" srcset="" style="color: aliceblue;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            {{-- <div class="gig bg-info" style="width:100px !important"> --}}
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto " >
                        <li class="nav-item ">
                            <a class="nav-link nav-link-txt text-light nav-active" href="{{ url('/') }}"> HOME <span
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
                                        <span class="hover-link"> <a href="{{ url('/about') }}"> About Spaysis </a> </span>
                                        <span class="hover-link" id="publication"> <a href="#"> Publications </a> </span>
                                        <span class="hover-link" id="career"> <a href="{{ url('/career') }}"> Career </a> </span>
                                        <span class="hover-link" id="policy"> <a href="#"> Policy & Notice </a> </span>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-txt  text-light" href="{{ url('/projects/general_profile') }}"> PROJECTS </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-txt  text-light " href="{{ url('/expertise/index') }}">
                                EXPERTISE </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-txt text-light" href="{{ url('/teams/profile') }}"> TEAM </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link nav-link-txt text-light " href="{{ url('/contact') }}"> CONTACT </a>
                        </li>
                    </ul>
                
                    <div class="row sub-sec no-gutters">
                        <form class="form-inline search-box my-lg-0">
                            <input class="form-control search-input  col-xs-12 col-sm-12 col-md-11 col-lg-11 " type="search"
                                placeholder="Search" aria-label="Search">
                            {{-- <div class="col-xs-2 col-sm-2 col-md-1 col-lg-1">
                                            <!-- <button class="btn my-sm-0 search-btn" type="submit">
                                                            <i class="fa fa-search" aria-hidden="true"></i>
                                                        </button> -->
                                        </div> --}}
                        </form>
                    </div>
                </div>
            {{-- </div> --}}
        </nav>
    </div>


    <!-- Image Slider  -->
    <div>
        <header class="outline image-slider">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" style="">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li> 
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li> 
                    {{-- <li class="slide_6" data-target="#carouselExampleIndicators" data-slide-to="5"></li>  --}}
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li> 
                </ol>
                <div class="carousel-inner" role="listbox" style="margin-left: 0%;">

                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item active">
                        <img src="images/slide1.jpg" style="">
                        <div class="carousel-caption d-none d-md-block float-left " style="text-shadow: 2px 2px black;">
                            <h2 class="display-5"> APOTHECARY'S VILLA </h2>
                            <p class="slide-txt"> KNUST - KUMASI </p>
                        </div>
                    </div>

                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item ">
                        <img src="images/try.jpg" >
                        <div class="carousel-caption d-none d-md-block" style="text-shadow: 2px 2px black;">
                            <h2 class="display-5">THOMAS RESIDENCE</h2>
                            <p class="slide-txt"> Effiduase - Koforidua</p>
                        </div>
                    </div>

                    <!-- Slide Three - Set the background image for this slide in the line below -->
                    <div class="carousel-item">
                        <img src="images/slide2.jpg">
                        <div class="carousel-caption d-none d-md-block" style="text-shadow: 2px 2px black;">
                            <div class="trinity">
                                <h2 class="display-5 "> APARTMENT </h2>
                                <p class="slide-txt"> Prampram - Accra </p>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="carousel-item">
                        <img src="images/slide3.jpg" >
                        <div class="carousel-caption d-none d-md-block" style="text-shadow: 2px 2px black;">
                            <div class="trinity">
                                <h2 class="display-5 ">  APARTMENT </h2>
                                <p class="slide-txt"> Prampram - Accra </p>
                            </div>
                        </div>
                    </div> --}}

                    <!-- Slide Four - Set the background image for this slide in the line below -->
                     <div class="carousel-item">
                      <img src="images/slide4.JPG" >
                        <div class="carousel-caption d-none d-md-block" style="text-shadow: 2px 2px black;">
                            <div class="trinity">
                                <h2 class="display-5 "> MIBSIP </h2>
                                <p class="slide-txt"> Bulamba - Uganda  </p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Five - Set the background image for this slide in the line below -->
                     <div class="carousel-item">
                      <img src="images/slide5.jpg" >
                        <div class="carousel-caption d-none d-md-block" style="text-shadow: 2px 2px black;">
                            <div class="trinity">
                                <h2 class="display-5 "> COVID-19 EFFECT </h2>
                                <p class="slide-txt"> SPAYSIS Workplace </p>
                            </div>
                        </div>
                     </div>

                    <!-- Slide six - Set the background image for this slide in the line below -->
                    <div class="carousel-item slide_6">
                        <img src="images/SPACES.jpg">
                        <div class="carousel-caption d-none d-md-block" style="text-shadow: 2px 2px black;">
                            <div class="trinity">
                                <h2 class="display-5 "> </h2>
                                <p class="slide-txt"> </p>
                            </div>
                        </div>
                    </div>
                  {{-- </div> --}}
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span> 
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                        style="margin-right: 0% !important" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span> 
                    </a>
                </div>
        </header>
    </div>

    <!-- ------------------| Footer |---------------------- -->
    <div class="foot">
        <div class="row no-gutters sub-foot">
            <div class="foot-txt col-xs-12 mr-aut bg-dange">
                <span class="copy ml- bg-inf"> 2020 SPAYSIS. All Rights Preserved. </span>
            </div>
            <div class="foot-logo col-aut col-xs-12 bg-warnin">
                <span class="mr-5">
                    <span class="twitter ml-1"> <i class="fab fa-twitter"></i> </span>
                    <span class="facebook mx-3"> <i class="fab fa-facebook"></i> </span>
                    <span class="instagram"> <i class="fab fa-instagram"></i> </span>
                </span>
            </div>
        </div>
    </div>

    <!-- <script src="js/about.js"></script> -->
    <script src="js/Bootstrapjquery.js"></script>
    <script defer src="js/all.js"></script>
    <script src="js/Propper.js"></script>
    <script src="js/bootstrap.js"></script>
  </div>
</body>

</html>