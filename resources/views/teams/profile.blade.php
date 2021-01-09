<!DOCTYPE html>
<html>

<head>
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="../css/font.css" rel="stylesheet" type="text/css">
    <link href="../css/all.css" rel="stylesheet" type="text/css">
    <meta charset="ISO-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="../js/about.js"></script>
    <link rel="stylesheet" href="../css/team_style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SPAYSIS </title>
</head>

<body>
    <!-- Header -->
    <div class="head-section fixed-top">
    
        <nav class="navbar navbar-expand-lg navbar-dark sub-head">
            <a class="navbar-brand logo" href="#">
                <img src="../images/main_logo.png" alt="logo" srcset="" style="color: aliceblue;">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                                    <span class="hover-link"> <a href="{{ url('/about') }}"> About Spaysis </a> </span>
                                    {{-- <span class="hover-link" id="team"> <a href="{{ url('/profile') }}"> Team </a>
                                    </span> --}}
                                    <span class="hover-link" id="publication"> <a href="#"> Publications </a> </span>
                                    <span class="hover-link" id="career"> <a href="{{ url('/career') }}"> Career </a>
                                    </span>
                                    <span class="hover-link" id="policy"> <a href="#"> Policy & Notice </a> </span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-txt  text-light" href="{{ url('/projects/general_profile') }}"> PROJECTS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-txt  text-light " href="{{ url('/expertise/index') }}">
                            EXPERTISE </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-txt text-light nav-active" href="{{ url('/teams/profile') }}"> TEAM </a>
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
        </nav>
    </div>

    <!-- ---------------------| Profile |--------------------- -->
    <div class="profile-body">
        {{-- <div class="head-team"> Our Team </div> --}}
        <div class="team-profiles">
            {{-- First row --}}
            <div class="team-row-1">
                <div class="row">
                    <div class="col-xs-12 col-lg-6 sub-team" style="padding: 0px !important">
                        <div class="about-intro">
                            <div class="team-box">
                                <span class="head-team"> Our Team </span>
                            </div>
                            <p class="team-para1">
                                Our team is a global collective of urban experts in, architecture, engineering, civil, transportation,
                                urban planning,
                                real estate, landscape, communications, urban development and so much more. With experience in Ghana,
                                Uganda, Nigeria, USA, Zambia,
                                Kuwait, Egypt, Morocco, Botswana and Germany, these are the people defining the cities of tomorrow.
                            </p>
                            <p class="team-para2">
                                Our people are the key to our overall success as team. We strongly rely on the vast range of skills,
                                talents and
                                experience of our people
                                to deliver our services. We are committed to the continuous development of the skills and knowledge of
                                our people at all
                                levels. The
                                Health and Safety of all our employees are of great importance to us.
                            </p>
                        </div>
                    </div>
                    {{-- <div class="col-3"></div> --}}
                    <div class="col-xs-12 col-lg-6 profile-ig">
                        <div class="team-row">
                            <div class="row">
                                {{-- <div class="col-6"> --}}
                                    <div class="card col-xs-12 col-sm-6 col-lg-6" >
                                        <a href="{{ url('/teams/Alexander') }}" class="card_link">
                                            <img class="card-img-top" src="../images/dp/Marful.png" alt="Card image cap">
                                            <span class="card-text">
                                                <span class="name"> Dr. -Ing. Alexander B. Marful </span> <br>
                                                <span class="position"> Principal Architect / Infrastructure planner </span>
                                            </span>
                                        </a>
                                    </div>
                                {{-- </div> --}}
                                {{-- <div class="col-6"> --}}
                                    <div class="card col-xs-12 col-sm-6 col-lg-6">
                                        <a href="{{ url('/teams/Joe') }}" class="card_link">
                                            <img class="card-img-top" src="../images/dp/Joe1.jpg" alt="Card image cap">
                                            <span class="card-text">
                                               <span class="name">     Arc Joe Danquah </span> <br>
                                               <span class="position">  Snr Project Architect / Barrier-free Expert </span>
                                            </span>
                                        </a>
                                    </div>
                                    {{-- </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Second Row --}}
            <div class="row">
                <div class="card col-xs-12 col-sm-6 col-lg-3">
                    <a href="{{ url('/teams/Ebenezer') }}" class="card_link">
                        <img class="card-img-top" src="../images/dp/Adaku.png" alt="image">
                        <span class="card-text">
                            <span class="name"> Dr. -Ing. Ebenezer Adaku </span> <br>
                            <span class="position"> Cost Engineer/Infrastructure </span> 
                        </span>
                    </a>
                </div>
                <div class="card col-xs-12 col-sm-6 col-lg-3">
                    <a href="{{ url('/teams/Duah') }}" class="card_link">
                        <img class="card-img-top" src="../images/dp/Duah.jpg" alt="image">
                        <span class="card-text">
                           <span class="name"> Dr Daniel Duah </span> <br>
                           <span class="position"> Snr Project Architect </span>
                        </span>
                    </a>
                </div>
                <div class="card col-xs-12 col-sm-6 col-lg-3">
                    <a href="{{ url('/teams/Doh') }}" class="card_link">
                        <img class="card-img-top" src="../images/dp/Doh.png" alt="image">
                        <span class="card-text">
                           <span class="name"> Patrick Doh </span> <br>
                            <span class="position">Snr Quantity Surveyor </span>
                        </span>
                    </a>
                </div>
                <div class="card col-xs-12 col-sm-6 col-lg-3">
                    <a href="{{ url('/teams/James') }}" class="card_link">
                        <img class="card-img-top" src="../images/dp/James.jpg" alt="image">
                        <span class="card-text">
                            <span class="name"> Arc James Appah Dankyi </span> <br>
                            <span class="position"> Projects Architect </span>
                        </span>
                    </a>
                </div>
            </div>

            {{-- Third Row --}}
            <div class="row">
                <div class="card col-xs-12 col-sm-6 col-lg-3 ">
                    <a href="{{ url('/teams/Wahab') }}" class="card_link">
                        <img class="card-img-top" src="../images/dp/Wahab.jpg" alt="Card image cap">
                        <span class="card-text">
                            <span class="name">     Ishmael Wahab </span> <br>
                            <span class="position"> Business Development Manager </span> 
                        </span>
                    </a>
                </div>
                <div class="card col-xs-12 col-sm-6 col-lg-3">
                    <a href="{{ url('/teams/Pauline') }}" class="card_link">
                        <img class="card-img-top" src="../images/dp/Pauline.jpg" alt="Card image cap">
                        <span class="card-text">
                           <span class="name">     Pauline Ashiagbor </span> <br>
                           <span class="position"> Administrative/HR Manager </span>
                        </span>
                    </a>
                </div>
                <div class="card col-xs-12 col-sm-6 col-lg-3">
                    <a href="{{ url('/teams/Kwame') }}" class="card_link">
                        <img class="card-img-top" src="../images/dp/Kwame.png" alt="Card image cap">
                        <span class="card-text">
                           <span class="name">     Kwame Nkrumah </span> <br>
                           <span class="position"> Senior AutoCAD Technician </span> 
                        </span>
                    </a>
                </div>
                <div class="card col-xs-12 col-sm-6 col-lg-3">
                    <a href="{{ url('teams/Maurice') }}" class="card_link">
                        <img class="card-img-top" src="../images/dp/Maurice.JPG" alt="Card image cap">
                        <span class="card-text">
                           <span class="name">     Dipl.-Ing. Maurice Migadde  </span> <br>
                           <span class="position"> Land / Sustainability Manager</span> 
                        </span>
                    </a>
                </div>
            </div>

            {{-- Fouth --}}
            <div class="row">
                <div class="card col-xs-12 col-sm-6 col-lg-3 ">
                    <a href="{{ url('teams/Ishmael') }}" class="card_link">
                        <img class="card-img-top" src="../images/dp/ishmael.png" alt="image">
                        <span class="card-text">
                            <span class="name">     Ishmael Bekoe </span> <br>
                            <span class="position"> Associate Spatial Planner </span>
                        </span>
                    </a>
                </div>
                <div class="card col-xs-12 col-sm-6 col-lg-3">
                    <a href="{{ url('teams/Mary') }}" class="card_link">
                        <img class="card-img-top" src="../images/dp/Prince.pg" alt="image">
                        <span class="card-text">
                           <span class="name">      Mary Amoah</span> <br>
                           <span class="position">  Associate Development Planner</span>
                        </span>
                    </a>
                </div>
                <div class="card col-xs-12 col-sm-6 col-lg-3">
                    <a href="{{ url('teams/Monica') }}" class="card_link">
                        <img class="card-img-top" src="../images/dp/monica.jpg" alt="image">
                        <span class="card-text">
                            <span class="name">     Monica Dapaah </span> <br>
                            <span class="position"> Junior Constriction Manager </span>
                        </span>
                    </a>
                </div>
                <div class="card col-xs-12 col-sm-6 col-lg-3">
                    <a href="{{ url('teams/Prince') }}" class="card_link">
                        <img class="card-img-top" src="../images/dp/Prince.png" alt="image">
                        <span class="card-text">
                            <span class="name">     Prince Ofosuhene Marful </span> <br>
                            <span class="position"> Site Supritendent </span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
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
</body>

</html>