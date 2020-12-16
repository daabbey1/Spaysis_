<!DOCTYPE html>
<html>

<head>
    <title>SPAYSIS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/font.css" rel="stylesheet" type="text/css">
    <link href="css/all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href=" css/style.css">
</head>

<body>
    <!-- Header -->
    <div class="head-section">
    
        <nav class="navbar navbar-expand-lg navbar-dark sub-head">
            <a class="navbar-brand logo" href="#">
                <img src="images/main_logo.png" alt="logo" srcset="" style="color: aliceblue;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto ">
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
                                    <span class="hover-link" id="career"> <a href="#"> Career </a> </span>
                                    <span class="hover-link" id="policy"> <a href="#"> Policy & Notice </a> </span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-txt  text-light" href="{{ url('/projects/general_profile') }}"> PROJECTS </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-txt  text-light " href="{{ url('/expertise') }}">
                            EXPERTISE </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-txt text-light" href="{{ url('/profile') }}"> TEAM </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-txt text-light " href="{{ url('/contact') }}"> CONTACT </a>
                    </li>
                </ul>
    
                <div class="row sub-sech no-gutters">
                    <form class="form-inline search-box my-lg-0">
                        <input class="form-control search-input col-xs-10 col-sm-10 col-md-11 col-lg-11" type="search"
                            placeholder="Search" aria-label="Search">
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


    <!-- Image Slider  -->
    <div>
        <header class="outline">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators" style="">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li> 
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li> 
                    <li data-target="#carouselExampleIndicators" data-slide-to="5"></li> 
                    {{-- <li data-target="#carouselExampleIndicators" data-slide-to="6"></li>  --}}
                </ol>
                <div class="carousel-inner" role="listbox" style="margin-left: 0%;">

                    <div class="carousel-item active">
                        <img src="images/Capa_Chemist_Tema.jpg" style="width:100%; height: 93.5vh !important">
                        <div class="carousel-caption d-none d-md-block " style="text-shadow: 2px 2px black;">
                            <h2 class="display-5"> CAPA CHEMIST </h2>
                            <p class="slide-txt">Tema - Accra </p>
                        </div>
                    </div>

                    <!-- Slide One - Set the background image for this slide in the line below -->
                    <div class="carousel-item ">
                        <img src="images/Patasi---Kumasi-home-3.jpg" style="width:100%; height: 93.5vh !important">
                        <div class="carousel-caption d-none d-md-block" style="text-shadow: 2px 2px black;">
                            <h2 class="display-5">RESIDENTIAL VILLA</h2>
                            <p class="slide-txt"> Patasi - Kumasi.</p>
                        </div>
                    </div>

                    <!-- Slide Two - Set the background image for this slide in the line below -->
                    <div class="carousel-item">
                        <img src="images/trinity_towers_accra.jpg" style="width:100%; height: 93.5vh !important">
                        <div class="carousel-caption d-none d-md-block" style="text-shadow: 2px 2px black;">
                            <div class="trinity">
                                <h2 class="display-5 "> TRINITY TOWERS </h2>
                                <p class="slide-txt"> Cantoment - Accra </p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Three - Set the background image for this slide in the line below -->
                     <div class="carousel-item">
                      <img src="images/slide3.jpg" style="width:100%; height: 93.5vh !important">
                        <div class="carousel-caption d-none d-md-block" style="text-shadow: 2px 2px black;">
                            <div class="trinity">
                                <h2 class="display-5 "> MIBSIP </h2>
                                <p class="slide-txt"> Bulamba - Uganda  </p>
                            </div>
                        </div>
                    </div>

                    <!-- Slide Four - Set the background image for this slide in the line below -->
                     <div class="carousel-item">
                      <img src="images/slide1.jpg" style="width:100%; height: 93.5vh !important">
                        <div class="carousel-caption d-none d-md-block" style="text-shadow: 2px 2px black;">
                            <div class="trinity">
                                <h2 class="display-5 "> COVID-19 EFFECT </h2>
                                <p class="slide-txt"> SPAYSIS Workplace </p>
                            </div>
                        </div>
                     </div>

                    <!-- Slide Five - Set the background image for this slide in the line below -->
                    <div class="carousel-item">
                        <img src="images/SPACES.jpg" style="width:100%; height: 93.5vh !important">
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

    <script src="js/myscript.js"></script>
    <script src="js/Bootstrapjquery.js"></script>
    <script defer src="js/all.js"></script>
    <script src="js/Propper.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>