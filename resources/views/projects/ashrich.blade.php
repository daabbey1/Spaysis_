@extends('layouts.project_layout')

@section('general_profile')
    <div class="slide-section">
        {{-- Image Slider --}}
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="../images/Projects/ashrich1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../images/Projects/ashrich2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../images/Projects/ashrich3.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../images/Projects/ashrich4.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../images/Projects/ashrich5.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="../images/Projects/ashrich6.jpg" alt="Third slide">
                </div>
            </div>
            {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a> --}}
            {{-- <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a> --}}
        </div>

        {{-- Image Selector --}}
        <div class="row px-5 bg-light py-2 " style=" ">
            <div class="col-2 cards" style="width: 100%;">
                <span data-target="#carouselExampleIndicators" data-slide-to="0" class="active ">
                    <img class="card-img-top" src="../images/Projects/ashrich1.jpg" alt="Card image cap">
                </span>
            </div>
            <div class="col-2 cards" style="width: 100%;">
                <span data-target="#carouselExampleIndicators" data-slide-to="1">
                    <img class="card-img-top" src="../images/Projects/ashrich2.jpg" alt="Card image cap">
                </span>
            </div>
            <div class="col-2 cards" style="width: 100%;">
                <span data-target="#carouselExampleIndicators" data-slide-to="2">
                <img class="card-img-top" src="../images/Projects/ashrich3.jpg" alt="Card image cap">
                </span>
            </div>
            <div class="col-2 cards" style="width: 100%;">
                <span data-target="#carouselExampleIndicators" data-slide-to="3">
                 <img class="card-img-top" src="../images/Projects/ashrich4.jpg" alt="Card image cap">
                </span>
            </div>
            <div class="col-2 cards" style="width: 100%;">
                <span data-target="#carouselExampleIndicators" data-slide-to="4">
                <img class="card-img-top" src="../images/Projects/ashrich5.jpg" alt="Card image cap">
                </span>
            </div>
            <div class="col-2 cards" style="width: 100%;">
                <span data-target="#carouselExampleIndicators" data-slide-to="5">
                <img class="card-img-top" src="../images/Projects/ashrich6.jpg" alt="Card image cap">
                </span>
            </div>
        </div>

        {{-- Info about the project --}}
        <div class="row">
            <div class="col-6 text-center">
                Left Side Info
            </div>
            <div class="col-6 text-center">
                Right Side Info
            </div>
        </div>
    </div>
@endsection