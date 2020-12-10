<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/font.css" rel="stylesheet" type="text/css">
    <link href="css/all.css" rel="stylesheet" type="text/css">
    <meta charset="ISO-8859-1">

    <script src="js/about.js"></script>
    <link rel="stylesheet" href="css/team_style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SPAYSIS </title>
</head>

<body>
    <!-- Header -->
    <div class="head-section bg-danger">

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
                                    <span class="hover-link" id="publication"> <a href="#"> Publications </a> </span>
                                    <span class="hover-link" id="career"> <a href="#"> Career </a> </span>
                                    <span class="hover-link" id="policy"> <a href="#"> Policy & Notice </a> </span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-txt  text-light" href="expertise.html"> PROJECTS </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-txt  text-light " href="{{ url('/expertise') }}">
                            EXPERTISE </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-txt text-light nav-active" href="{{ url('/profile') }}"> TEAM </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-txt text-light " href="{{ url('/profile') }}"> CONTACT </a>
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

    <!-- ---------------------| Profile |--------------------- -->
    <div class="profile-body">
        {{-- <div class="head-team"> Our Team </div> --}}
        <div class="team-profiles">
            {{-- First row --}}
            <div class="team-row-1">
                <div class="row">
                    <div class="col-6 sub-team">
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
                    <div class="col-6">
                        <div class="team-row">
                            <div class="row">
                                {{-- <div class="col-6"> --}}
                                    <div class="card col-6" >
                                        <a href="{{ url('/infrastructure') }}" class="card_link">
                                            <img class="card-img-top" src="images/dp/Marful.png" alt="Card image cap">
                                            <span class="card-text">
                                                Dr. -Ing. Alexander Boakye Marful <br>
                                                Principal Architect <br>
                                                Infrastructure Planning & Engineering <br>
                                            </span>
                                        </a>
                                    </div>
                                {{-- </div> --}}
                                {{-- <div class="col-6"> --}}
                                    <div class="card col-6">
                                        <a href="{{ url('/infrastructure') }}" class="card_link">
                                            <img class="card-img-top" src="images/dp/Joe.png" alt="Card image cap">
                                            <span class="card-text">
                                                Arc Joe Danquah <br>
                                                Senior Project Architect <br>
                                                Infrastructure Planning & Engineering
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
                <div class="card col-3">
                    <a href="{{ url('/infrastructure') }}" class="card_link">
                        <img class="card-img-top" src="images/dp/Adaku.png" alt="Card image cap">
                        <span class="card-text">
                            Dr. -Ing. Ebenezer Adaku <br>
                            Cost Engineer/Infrastructure <br>
                            Infrastructure Planning & Engineering
                        </span>
                    </a>
                </div>
                <div class="card col-3">
                    <a href="{{ url('/infrastructure') }}" class="card_link">
                        <img class="card-img-top" src="images/dp/Duah.png" alt="Card image cap">
                        <span class="card-text">
                            Dr Daniel Duah <br>
                            Senior Project Architect <br>
                            Infrastructure Planning & Engineering
                        </span>
                    </a>
                </div>
                <div class="card col-3">
                    <a href="{{ url('/infrastructure') }}" class="card_link">
                        <img class="card-img-top" src="images/dp/Doh.png" alt="Card image cap">
                        <span class="card-text">
                            Patrick Doh <br>
                            Quantity Surveyor <br>
                            Infrastructure Planning & Engineering
                        </span>
                    </a>
                </div>
                <div class="card col-3">
                    <a href="{{ url('/infrastructure') }}" class="card_link">
                        <img class="card-img-top" src="images/dp/James.png" alt="Card image cap">
                        <span class="card-text">
                            James Appah Dankyi <br>
                            Associate Architect <br>
                            Infrastructure Planning & Engineering
                        </span>
                    </a>
                </div>
            </div>

            {{-- Third Row --}}
            <div class="row">
                <div class="card col-3">
                    <a href="{{ url('/infrastructure') }}" class="card_link">
                        <img class="card-img-top" src="images/dp/Wahab.png" alt="Card image cap">
                        <span class="card-text">
                            Ishmael Wahab <br>
                            Business Development Manager <br>
                            Infrastructure Planning & Engineering
                        </span>
                    </a>
                </div>
                <div class="card col-3">
                    <a href="{{ url('/infrastructure') }}" class="card_link">
                        <img class="card-img-top" src="images/dp/Pauline.png" alt="Card image cap">
                        <span class="card-text">
                            Pauline Ashiagbor <br>
                            Administrative Associate <br>
                            Infrastructure Planning & Engineering
                        </span>
                    </a>
                </div>
                <div class="card col-3">
                    <a href="{{ url('/infrastructure') }}" class="card_link">
                        <img class="card-img-top" src="images/dp/Kwame.png" alt="Card image cap">
                        <span class="card-text">
                            Kwame Nkrumah <br>
                            Senior AutoCAD Technician <br>
                            Infrastructure Planning & Engineering
                        </span>
                    </a>
                </div>
                <div class="card col-3">
                    <a href="{{ url('/infrastructure') }}" class="card_link">
                        <img class="card-img-top" src="images/dp/Maurice.JPG" alt="Card image cap">
                        <span class="card-text">
                            Dipl.-Ing. Maurice Migadde  <br>
                            Sustainability Project Manager <br>
                            Infrastructure Planning & Engineering
                        </span>
                    </a>
                </div>
            </div>

            {{-- Fouth --}}
            <div class="row">
                <div class="card col-3">
                    <a href="{{ url('/infrastructure') }}" class="card_link">
                        <img class="card-img-top" src="images/dp/Osei.png" alt="Card image cap">
                        <span class="card-text">
                            Hoffmann Omane Osei <br>
                            Driver & Office Assistant <br>
                            Infrastructure Planning & Engineering
                        </span>
                    </a>
                </div>
                <div class="card col-3">
                    <a href="{{ url('/infrastructure') }}" class="card_link">
                        <img class="card-img-top" src="images/dp/Prince.png" alt="Card image cap">
                        <span class="card-text">
                            Prince Ofosuhene Marful <br>
                            Site Supritendent <br>
                            Infrastructure Planning & Engineering
                        </span>
                    </a>
                </div>
                <div class="card col-3">
                    <a href="{{ url('/infrastructure') }}" class="card_link">
                        <img class="card-img-top" src="images/dp/Christabel.png" alt="Card image cap">
                        <span class="card-text">
                            Christabel Ofei Kwakye <br>
                            HR Manager <br>
                            Infrastructure Planning & Engineering
                        </span>
                    </a>
                </div>
                <div class="card col-3">
                    <a href="{{ url('/infrastructure') }}" class="card_link">
                        <img class="card-img-top" src="images/dp/Gyamfi.png" alt="Card image cap">
                        <span class="card-text">
                            Prince Adu-Gyamf <br>
                            Junior Architect  <br>
                            Infrastructure Planning & Engineering
                        </span>
                    </a>
                </div>
            </div>
        </div>
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
    <!-- <script src="js/about.js"></script> -->
    <script src="js/Bootstrapjquery.js"></script>
    <script defer src="js/all.js"></script>
    <script src="js/Propper.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>