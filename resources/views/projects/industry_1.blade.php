@extends('layouts.project_layout')

@section('general_profile')
<div class="slide-section">
    {{-- Image Slider --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            {{-- <span style="color: white; font-size:60px;"> <i class="fas fa-chevron-down"></i> </span> --}}
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../images/Projects/pharmaceutil.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/Projects/pharmaceical2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/Projects/eza3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/Projects/a4.pg" alt="Fourth slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/Projects/a4.pg" alt="Fifth slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/Projects/a6.pg" alt="Sixth slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-ico" aria-hidden="true">
                <span style="color: white; font-size:60px;"> <i class="fas fa-chevron-left"></i> </span>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-ico" aria-hidden="true">
                <span style="color: white; font-size:60px;"> <i class="fas fa-chevron-right"></i> </span>
            </span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    {{-- Image Selector --}}
    <div class="row px-5 py-2 " style=" background-color:#000022;">
        <div class="col-2 cards" style="width: 100%;">
            <span data-target="#carouselExampleIndicators" data-slide-to="0" class="active ">
                <img class="card-img-top" src="../images/Projects/pharceutical.jpg" alt="Card image cap">
            </span>
        </div>
        <div class="col-2 cards" style="width: 100%;">
            <span data-target="#carouselExampleIndicators" data-slide-to="1">
                <img class="card-img-top" src="../images/Projects/pharmaceucal2.jpg" alt="image">
            </span>
        </div>
        <div class="col-2 cards" style="width: 100%;">
            <span data-target="#carouselExampleIndicators" data-slide-to="2">
                <img class="card-img-top" src="../images/Projects/Ese3.jpg" alt="image">
            </span>
        </div>
        <div class="col-2 cards" style="width: 100%;">
            <span data-target="#carouselExampleIndicators" data-slide-to="3">
                <img class="card-img-top" src="../images/Projects/a.pg" alt="image">
            </span>
        </div>
        <div class="col-2 cards" style="width: 100%;">
            <span data-target="#carouselExampleIndicators" data-slide-to="4">
                <img class="card-img-top" src="../images/Projects/a4.png" alt="image">
            </span>
        </div>
        <div class="col-2 cards" style="width: 100%;">
            <span data-target="#carouselExampleIndicators" data-slide-to="5">
                <img class="card-img-top" src="../images/Projects/a6.png" alt="image">
            </span>
        </div>
    </div>

    {{-- Info about the project --}}
    <div class="row left-right-info">
        <div class="col-7">
            <div class="discription">
                <div class="disc-head">
                    <span class="disc-main-head"> </span>
                </div>
                <div class="disc-body">

                </div>
            </div>
        </div>
        <div class="col-5">
            <div class="pro-info">
                <div class="pro-head">
                    <span class="pro-sub-head"> Project Information </span>
                </div>
                <div class="pro-body">
                    <table style="width:100%">
                        {{-- <caption>Monthlys</caption> --}}
                        <tr>
                            <td> Status: </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td> Area: </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td> Location: </td>
                            <td> </td>
                        </tr>
                        <tr>
                            <td> Estimated Cost: </td>
                            <td> </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection