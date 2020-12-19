@extends('layouts.project_layout')

@section('general_profile')
<div class="body-section">
    
    {{-- Master Planning --}}
    <span class="gen-profile-head"> Master Planning </span>
    <div class="row no-gutter">
        {{-- <div class="col-3 col-box bg-inf"> --}}
                <div class="col-3 card" style="width: 100%;">
                    <a href="{{ url('/projects/ashrich') }}">
                    <img class="card-img-top" src="../images/Projects/ashrich.jpg" alt="Card image cap">
                    <span class="card-text"> ASHRICH </span>
                    </a>
                </div>
        {{-- </div> --}}
        {{-- <div class="col-3 col-box bg-dange"> --}}
            <div class="col-3 card" style="width: 100%;">
                <a href="{{ url('/projects/jucap') }}">
                <img class="card-img-top" src="../images/Projects/jucap.jpg" alt="Card image cap">
                <span class="card-text"> JUCAP </span>
                </a>
            </div>
        {{-- </div> --}}
        {{-- <div class="col-3 col-box"> --}}
            <div class="col-3 card" style="width: 100%;">
                <a href="{{ url('/projects/motag') }}">
                <img class="card-img-top" src="../images/Projects/motag.jpg" alt="Card image cap">
                 <span class="card-text"> MOTAG </span>
                </a>
            </div>
        {{-- </div> --}}
        {{-- <div class="col-3 col-box"> --}}
            <div class="col-3 card" style="width: 100%;">
                <img class="card-img-top" src="../images/Projects/ashrich.jpg" alt="Card image cap">
                <span class="card-text"> LOREM </span>
            </div>
        {{-- </div> --}}
    </div>

    
    {{-- Residential --}}
    <span class="gen-profile-head"> Residence </span>
    <div class="row no-gutter">
        <div class="col-3 card" style="width: 100%;">
            <a href="{{ url('/projects/residence_1') }}">
            <img class="card-img-top" src="../images/Projects/aa.png" alt="Card image cap">
            <span class="card-text"> AA's Residence </span>
            </a>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <a href="{{ url('/projects/residence_2') }}">
            <img class="card-img-top" src="../images/Projects/brice.jpg" alt="Card image cap">
            <span class="card-text"> Brice </span>
            </a>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/doh.jpg" alt="Card image cap">
            <span class="card-text"> Dr DOh </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/marful.png" alt="Card image cap">
            <span class="card-text"> Dr Marful </span>
        </div>
    </div>

    <div class="row no-gutter">
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/addo.png" alt="Card image cap">
            <span class="card-text"> Mr. Addo </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/sarpong.jpg" alt="Card image cap">
            <span class="card-text"> Mr. Saarpong </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/zambian.jpg" alt="Card image cap">
            <span class="card-text"> Zambian </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/patasi.jpg" alt="Card image cap">
            <span class="card-text"> Patasi </span>
        </div>
    </div>

    {{-- Education --}}
    <span class="gen-profile-head"> Education </span>
    <div class="row no-gutter">
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/golden.jpg" alt="Card image cap">
            <span class="card-text"> Golden Elysee </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/king.jpg" alt="Card image cap">
            <span class="card-text"> King Edward School </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/anokye.jpg" alt="Card image cap">
            <span class="card-text"> Anokye Library </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/MIBSIP.JPG" alt="Card image cap">
            <span class="card-text"> MIBSIP </span>
        </div>
    </div>

    {{-- Hostel --}}
    <span class="gen-profile-head"> Hostel </span>
    <div class="row no-gutter">
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/ablakwa.png" alt="Card image cap">
            <span class="card-text"> Ablakea Hostel </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/anthony.jpg" alt="Card image cap">
            <span class="card-text"> St. Anthony Hostel </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/trom.jpg" alt="Card image cap">
            <span class="card-text"> Trom Hostel </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/ablakwa.png" alt="Card image cap">
            <span class="card-text"> Lorem </span>
        </div>
    </div>

    {{-- Container Arch --}}
    <span class="gen-profile-head"> Container Houses </span>
    <div class="row no-gutter">
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/Eseza.png" alt="Card image cap">
            <span class="card-text"> Eseza </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/fda.png" alt="Card image cap">
            <span class="card-text"> FDA - Aflao </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/ghacem.png" alt="Card image cap">
            <span class="card-text"> GHACEM </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/house.jpg" alt="Card image cap">
            <span class="card-text"> House </span>
        </div>
    </div>

    {{-- Office Building --}}
    <span class="gen-profile-head"> Office Building </span>
    <div class="row no-gutter">
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/capa.jpg" alt="Card image cap">
            <span class="card-text"> Capa Chemist </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/office.jpg" alt="Card image cap">
            <span class="card-text"> Space Remodel </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/Office2.jpg" alt="Card image cap">
            <span class="card-text"> Space Remodel </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/pharmaceutical.jpg" alt="Card image cap">
            <span class="card-text"> pharmaceutical Lab </span>
        </div>
    </div>

    {{-- Idustrial --}}
    <span class="gen-profile-head"> Industrial </span>
    <div class="row no-gutter">
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/industrial1.jpg" alt="Card image cap">
            <span class="card-text"> Industrial </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/industrial2.jpg" alt="Card image cap">
            <span class="card-text"> Industrial </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/industrial3.jpg" alt="Card image cap">
            <span class="card-text"> Industrial </span>
        </div>
        <div class="col-3 card" style="width: 100%;">
            <img class="card-img-top" src="../images/Projects/industrial4.jpg" alt="Card image cap">
            <span class="card-text"> Industrial </span>
        </div>
    </div>
</div>
@endsection