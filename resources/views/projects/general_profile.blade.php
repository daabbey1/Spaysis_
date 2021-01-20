@extends('layouts.project_layout')

@section('general_profile')
<div class="body-section">
    
    {{-- Master Planning --}}
    <span class="gen-profile-head"> Master Planning </span>
    <div class="row no-gutter">
        {{-- <div class="col-3 col-box bg-inf"> --}}
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3  card" style="width: 100%;">
                    <a href="{{ url('/projects/ashrich') }}">
                    <img class="card-img-top" src="../images/Projects/ashrich.jpg" alt="Card image cap">
                    <span class="card-text"> ASHRICH </span>
                    </a>
                </div>
        {{-- </div> --}}
        {{-- <div class="col-3 col-box bg-dange"> --}}
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 card" style="width: 100%;">
                <a href="{{ url('/projects/jucap') }}">
                <img class="card-img-top" src="../images/Projects/jucap.jpg" alt="Card image cap">
                <span class="card-text"> JUCAP </span>
                </a>
            </div>
        {{-- </div> --}}
        {{-- <div class="col-3 col-box"> --}}
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3 card" style="width: 100%;">
                <a href="{{ url('/projects/motag') }}">
                <img class="card-img-top" src="../images/Projects/motag.jpg" alt="Card image cap">
                 <span class="card-text"> MOTAG </span>
                </a>
            </div>
        {{-- </div> --}}
        {{-- <div class="col-3 col-box"> --}}
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-3  card" style="width: 100%;">
                <img class="card-img-top" src="../images/Projects/ashrich.jpg" alt="Card image cap">
                <span class="card-text"> LOREM </span>
            </div>
        {{-- </div> --}}
    </div>

    
    {{-- Residential --}}
    <span class="gen-profile-head"> Residence </span>
    <div class="row no-gutter">
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/residence_1') }}">
            <img class="card-img-top" src="../images/Projects/aa.jpg" alt="Card image cap">
            <span class="card-text"> AA's Residence </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/residence_2') }}">
            <img class="card-img-top" src="../images/Projects/residence1.jpg" alt="Card image cap">
            <span class="card-text"> Prampram </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/residence_3') }}">
            <img class="card-img-top" src="../images/Projects/doh.jpg" alt="Card image cap">
            <span class="card-text"> Dr DOh </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/residence_4') }}">
            <img class="card-img-top" src="../images/Projects/marful.png" alt="Card image cap">
            <span class="card-text"> Dr Marful </span>
            </a>
        </div>
    </div>

    <div class="row no-gutter">
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/residence_5') }}">
            <img class="card-img-top" src="../images/Projects/addo.jpg" alt="Card image cap">
            <span class="card-text"> Mr. Addo </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/residence_6') }}">
            <img class="card-img-top" src="../images/Projects/sarpong.jpg" alt="Card image cap">
            <span class="card-text"> Mr. Saarpong </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/residence_7') }}">
            <img class="card-img-top" src="../images/Projects/zambian.jpg" alt="Card image cap">
            <span class="card-text"> Zambian </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/residence_8') }}">
            <img class="card-img-top" src="../images/Projects/patasi.jpg" alt="Card image cap">
            <span class="card-text"> Patasi </span>
            </a>
        </div>
    </div>

    {{-- Education --}}
    <span class="gen-profile-head"> Education </span>
    <div class="row no-gutter">
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/education_1') }}">
            <img class="card-img-top" src="../images/Projects/golden.jpg" alt="Card image cap">
            <span class="card-text"> Golden Elysee </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/education_2') }}">
            <img class="card-img-top" src="../images/Projects/king.jpg" alt="Card image cap">
            <span class="card-text"> King Edward School </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/education_3') }}">
            <img class="card-img-top" src="../images/Projects/anokye.jpg" alt="Card image cap">
            <span class="card-text"> Anokye Library </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/education_4') }}">
            <img class="card-img-top" src="../images/Projects/MIBSIP.JPG" alt="Card image cap">
            <span class="card-text"> MIBSIP </span>
            </a>
        </div>
    </div>

    {{-- Hostel --}}
    <span class="gen-profile-head"> Hostel </span>
    <div class="row no-gutter">
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/hostel_1') }}">
            <img class="card-img-top" src="../images/Projects/ablakwa.png" alt="Card image cap">
            <span class="card-text"> Ablakwa Hostel </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/hostel_2') }}">
            <img class="card-img-top" src="../images/Projects/anthony.jpg" alt="Card image cap">
            <span class="card-text"> St. Anthony Hostel </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/hostel_3') }}">
            <img class="card-img-top" src="../images/Projects/trom.jpg" alt="Card image cap">
            <span class="card-text"> Trom Hostel </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/hostel_4') }}">
            <img class="card-img-top" src="../images/Projects/ablakwa.png" alt="Card image cap">
            <span class="card-text"> Lorem </span>
            </a>
        </div>
    </div>

    {{-- Container Arch --}}
    <span class="gen-profile-head"> Container Houses </span>
    <div class="row no-gutter">
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/container_hse_1') }}">
            <img class="card-img-top" src="../images/Projects/Eseza.jpg" alt="Card image cap">
            <span class="card-text"> Eseza </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/container_hse_2') }}">
            <img class="card-img-top" src="../images/Projects/fda.jpg" alt="Card image cap">
            <span class="card-text"> FDA - Aflao </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/container_hse_3') }}">
            <img class="card-img-top" src="../images/Projects/ghacem.png" alt="Card image cap">
            <span class="card-text"> GHACEM </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/container_hse_4') }}">
            <img class="card-img-top" src="../images/Projects/house.jpg" alt="Card image cap">
            <span class="card-text"> House </span>
            </a>
        </div>
    </div>

    {{-- Office Building --}}
    <span class="gen-profile-head"> Office Building </span>
    <div class="row no-gutter">
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/office_1') }}">
            <img class="card-img-top" src="../images/Projects/capa.jpg" alt="Card image cap">
            <span class="card-text"> Capa Chemist </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/office_2') }}">
            <img class="card-img-top" src="../images/Projects/office.jpg" alt="Card image cap">
            <span class="card-text"> Space Remodel </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/office_3') }}">
            <img class="card-img-top" src="../images/Projects/Office2.jpg" alt="Card image cap">
            <span class="card-text"> Space Remodel </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/office_4') }}">
            <img class="card-img-top" src="../images/Projects/pharmaceutical.jpg" alt="Card image cap">
            <span class="card-text"> pharmaceutical Lab </span>
            </a>
        </div>
    </div>

    {{-- Idustrial --}}
    <span class="gen-profile-head"> Industrial </span>
    <div class="row no-gutter">
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/industry_1') }}">
            <img class="card-img-top" src="../images/Projects/industrial1.jpg" alt="Card image cap">
            <span class="card-text"> Industrial </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/industry_2') }}">
            <img class="card-img-top" src="../images/Projects/piggery1.jpg" alt="Card image cap">
            <span class="card-text"> Piggery </span>
            </a>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/industry_3') }}">
            <img class="card-img-top" src="../images/Projects/industrial3.jpg" alt="Card image cap">
            <span class="card-text"> Industrial </span>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-xl-3 card" style="width: 100%;">
            <a href="{{ url('/projects/industry_4') }}">
            <img class="card-img-top" src="../images/Projects/industrial4.jpg" alt="Card image cap">
            <span class="card-text"> Industrial </span>
            </a>
        </div>
    </div>
</div>
@endsection