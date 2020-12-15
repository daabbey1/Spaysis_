<!DOCTYPE html>
<html>

<head>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/font.css" rel="stylesheet" type="text/css">
    <link href="css/all.css" rel="stylesheet" type="text/css">
    <meta charset="ISO-8859-1">

    <script src="js/about.js"></script>
    <link rel="stylesheet" href=" css/mystyle.css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> SPAYSIS </title>
</head>

<body>
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
                        <a class="nav-link nav-link-txt text-light" href="{{ url('/') }}"> HOME <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-txt  text-light nav-active" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                        <a class="nav-link nav-link-txt  text-light" href="{{ url('/expertise') }}"> EXPERTISE </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-txt text-light" href="{{ url('/profile') }}"> TEAM </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-link-txt text-light " href="/contact"> CONTACT </a>
                    </li>
                </ul>

                <div class="row sub-sech no-gutters">
                    <form class="form-inline search-box my-lg-0  bg-warnin">
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

    <div class="image-section">
    </div>

    <!-- -------------------| Profile |------------------------ -->
    <div class="profile">

        <div class="profile-body">
            <div class="row no-gutters hr-line">
                <div class="col-xs-12 col-xl-6">
                    <div class="left-section ">
                        <div class="profile-txt">
                            Profile
                        </div>
                        <p>
                            SPAYSIS Architecture, Planning and Engineering Ltd is an international consulting firm that
                            provides expert services
                            necessary for a sustainable built environment. As a fully-integrated consultancy firm, our
                            services are sought by
                            governments, local and international organizations, and individuals seeking excellence in
                            the sophisticated and
                            competitive marketplace.
                        </p>

                        <p>
                            We operate in 6 main areas;
                            <ul class="lists-info ">
                                <li> <span class="list"> Infrastructure Planning and Engineering. </span> </li>
                                <li> <span class="list"> Architecture, Urban and Rural Planning. </span> </li>
                                <li> <span class="list"> Industrial Model Building and Animations. </span> </li>
                                <li> <span class="list"> Land, Property and Facilities management. </span> </li>
                                <li> <span class="list"> Barrier-free system Design and Management. </span> </li>
                                <li> <span class="list"> Range of other Consulting Services. </span> </li>
                            </ul>
                        </p>
                    </div>
                </div>
                <div class="col-xs-12 col-xl-6 ">
                    <div class="right-section">
                        <div class="vision_mission ">
                            <div class="vision">
                                <div class="vision-txt">
                                    Our Vision
                                </div>
                                <div class="vision-body">
                                    To grow and excel as a practice-centred business, and become the number one in
                                    Africa with a global impact in our areas
                                    of operation. We believe in excellence and are focused on delivering that to our
                                    clients.
                                </div>
                            </div>
                            <div class="mission">
                                <div class="mission-txt">
                                    Our Mission
                                </div>
                                <div class="mission-body">
                                    To become a one-stop consultancy firm in Africa with global aspiration driven by the
                                    passion to transform the built
                                    environment in Africa through a commitment to bespoke solutions, state of the art
                                    technology and a highly skilled and
                                    motivated workforce to make Africa an attractive and more habitable continent.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row no-gutters">
                <div class="col-xs-12 col-xl-6">
                    <div class="value">
                        <div class="value-txt">
                            Our Values
                        </div>
                        <div class="value-body">
                            <p>
                                Founded on the philosophy of ‘innovation, creativity and Excellence delivered’, we are
                                dedicated to building creative
                                and sustainable solutions in the community's best interests, without compromise our
                                clients’ goals and practice ethics.
                                We are also committed to excellence when providing knowledge and experience that best
                                suits our clients’ project.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-xl-6">
                    <div class="value-sub">
                        <p>
                            These principles are outlined in our Core Values:
                        </p>
                        <p>
                            Provide a sustainable built environment <span class="prof-seperate"> | </span> Strive for
                            innovation, creativity and technical excellence <span class="prof-seperate"> | </span>
                            Provide
                            responsive quality service <span class="prof-seperate"> | </span> Individual commitment for
                            mutual success <span class="prof-seperate"> | </span> Facilitate continuous professional
                            development <span class="prof-seperate"> | </span> Support professional and community
                            involvement.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ----------------------| Partners & Clients |----------------------- -->
    <div class="partner-client ">

        <div class="dropAppearance">
            <!-- <div id="accordion">
                <div class="card ">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                Collapsible Group Item #1
                            </button>
                        </h5>
                    </div>
            
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                            moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                            proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                            aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                Collapsible Group Item #2
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                            moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                            proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                            aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree"
                                aria-expanded="false" aria-controls="collapseThree">
                                Collapsible Group Item #3
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf
                            moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.
                            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
                            shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                            proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                            aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                        </div>
                    </div>
                </div>
            </div> -->
        </div>

        <div class="rowAppearance">
            <div class="row">

                <!-- Partners -->
                <div class="partners-space col-xs-12 col-sm-12 col-xl-8">
                    <span class="partner-head"> Our Partners </span>


                    <div class="row">
                        <!-- First Column -->
                        <div class="col-xs-12 col-sm-12 col-xl-6">
                            <div>
                                <!-- <span class="partner-head"> Our Partners </span> -->
                                <div class="partner-body">

                                    <div class="acon">
                                        <span class="partner-sub-title"> Associated Consults Ltd </span> <br>
                                        Engineering Support Services <br>
                                        Transportation Planning <br>
                                        <!-- Distribution, Transportation Etc <br> -->
                                        <a href="#"> associatedconsultantsltd.com.gh </a> <br>
                                        Tel: +233(0)302 23758/9 <br>
                                        info@associatedconsultantsltd.com.gh
                                    </div>


                                    <div class="build">
                                        <span class="partner-sub-title"> Build Form Ltd </span> <br>
                                        Construction & Procurement Services <br>
                                        <a href="#"> buildformltd.com </a> <br>
                                        Tel: +233(0)302 935966 <br>
                                        samuel@buildformltd.com <br>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Second Column -->
                        <div class="col-xs-12 col-sm-12 col-xl-6">
                            <div>
                                <div class="partner-body2">

                                    <div class="joeamah">
                                        <span class="partner-sub-title"> Joeamah Geomatic Consult Ltd. </span> <br>
                                        Planning & Evaluation Services <br>
                                        Survey & GIS Services <br>
                                        <a href="#"> joeamah.com </a> <br>
                                        Tel: +233(0)24 267 6865 <br>
                                        john@joeamah.com <br>
                                    </div>

                                    <div class="acon">
                                        <span class="partner-sub-title"> miniCREATiON Ltd </span> <br>
                                        You dream, We create! <br>
                                        <a href="#"> minicreation.com.gh </a> <br>
                                        Tel: +233(0)502105309 <br>
                                        amarful@yahoo.com
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

                <!-- Clients -->
                <div class="col-xs-12 col-sm-12 col-xl-4">
                    <div>
                        <span class="client-head"> Our Clients </span>
                        <div class="client-body">
                            <span class="valued-client"> Some of our valued clients include: </span> <br>
                            Kuwait Institute of Scientific Research (KISR), Kuwait <span class="seperate"> | </span>
                            FICHTNER GMBH Co. & KG, Germany <span class="seperate"> | </span> SOLENGCO
                            GMBH, Germany, King Edward School, Accra Ghana <span class="seperate"> | </span>
                            CLEAN-AFRICA e.V., Germany <span class="seperate"> | </span> Kwame Nkrumah
                            University of Science and Technology (KNUST) Kumasi-Ghana <span class="seperate"> | </span>
                            Catholic Church of Ghana <span class="seperate"> | </span> Eden Estates,
                            Ghana Ltd <span class="seperate"> | </span> Deeper Christian Life Ministry, Ghana <span
                                class="seperate"> | </span> Peak Impact Ltd, Accra <span class="seperate"> | </span>
                            Ministry of Food and Agriculture,
                            Government of Ghana <span class="seperate"> | </span> fhi360 <span class="seperate"> |
                            </span> Action Chapel International.
                        </div>
                    </div>
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