@extends('layouts.project_layout')

@section('general_profile')
    <div class="slide-section">
        {{-- Image Slider --}}
        <div id="carouselExampleIndicators" class="carousel slide" id="carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                {{-- <span style="color: white; font-size:60px;"> <i class="fas fa-chevron-down"></i> </span> --}}
                {{-- <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li> --}}
                {{-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
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
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-ico"  aria-hidden="true">
                    <span style="color: white; font-size:60px;"> <i class="fas fa-chevron-left"></i> </span>
                </span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-ico"   aria-hidden="true">
                    <span style="color: white; font-size:60px;"> <i class="fas fa-chevron-right"></i> </span>
                </span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        {{-- Image Selector --}}
        <div class="row px-5 py-2 " style=" background-color:#000022;">
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
        <div class="row left-right-info">
            <div class="col-7">
                <div class="discription">
                   <div class="disc-head ">
                       <span class="disc-main-head"> Ashrich Development Training Center </span> 
                   </div>
                   <div class="disc-body">
                       Ashrich Development training Centre is a first of its Kind IT based development training center that seeks to fill a
                        great need for
                        highly trained professional and technical people in various sectors of the economy.This Centre, which will is bilingual
                        (English & French) when completed will attract students from English and French-speaking countries in West and Central
                        Africa.
                   </div>
                </div>
            </div>
            <div class="col-5">
                <div class="pro-info">
                    <div class="pro-head">
                        <span class="pro-sub-head"> Project Information </span>
                    </div>
                    <div class="pro-body">
                        <table style="width:100%" >
                            {{-- <caption>Monthlys</caption> --}}
                            <tr>
                                <td> Status: </td>
                                <td> Design Stage-Complete </td>
                            </tr>
                            <tr>
                                <td> Area: </td>
                                <td> 10 acres </td>
                            </tr>
                            <tr>
                                <td> Location: </td>
                                <td>  Kpone, Tema </td>
                            </tr>
                            <tr>
                                <td> Estimated Cost: </td>
                                <td> USD 125,000,000 </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection