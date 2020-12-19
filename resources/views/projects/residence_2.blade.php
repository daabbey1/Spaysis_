@extends('layouts.project_layout')

@section('general_profile')
<div class="slide-section">
    {{-- Image Slider --}}
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <span style="color: white; font-size:60px;"> <i class="fas fa-chevron-down"></i> </span>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../images/Projects/brice.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/Projects/aa2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/Projects/aa3.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/Projects/aa4.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/Projects/aa4.png" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="../images/Projects/aa6.png" alt="Third slide">
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
    <div class="row px-5 py-2 " style=" background-color:#000022;">
        <div class="col-2 cards" style="width: 100%;">
            <span data-target="#carouselExampleIndicators" data-slide-to="0" class="active ">
                <img class="card-img-top" src="../images/Projects/brice.jpg" alt="Card image cap">
            </span>
        </div>
        <div class="col-2 cards" style="width: 100%;">
            <span data-target="#carouselExampleIndicators" data-slide-to="1">
                <img class="card-img-top" src="../images/Projects/aa2.png" alt="Card image cap">
            </span>
        </div>
        <div class="col-2 cards" style="width: 100%;">
            <span data-target="#carouselExampleIndicators" data-slide-to="2">
                <img class="card-img-top" src="../images/Projects/aa3.png" alt="Card image cap">
            </span>
        </div>
        <div class="col-2 cards" style="width: 100%;">
            <span data-target="#carouselExampleIndicators" data-slide-to="3">
                <img class="card-img-top" src="../images/Projects/aa4.png" alt="Card image cap">
            </span>
        </div>
        <div class="col-2 cards" style="width: 100%;">
            <span data-target="#carouselExampleIndicators" data-slide-to="4">
                <img class="card-img-top" src="../images/Projects/aa4.png" alt="Card image cap">
            </span>
        </div>
        <div class="col-2 cards" style="width: 100%;">
            <span data-target="#carouselExampleIndicators" data-slide-to="5">
                <img class="card-img-top" src="../images/Projects/aa6.png" alt="Card image cap">
            </span>
        </div>
    </div>

    {{-- Info about the project --}}
    <div class="row left-right-info">
        <div class="col-7">
            <div class="discription">
                <div class="disc-head">
                    <span class="disc-main-head"> AA's Residence </span> <br>
                    <span class="disc-sub-head"> Accra, Ghana </span>
                </div>
                <div class="disc-body">
                    The Master Plan was prepared to guide the development of a religious ground to meet international
                    standards for
                    congregational and camp meetings during its 18 years of development. The Plan is to coordinate
                    future development
                    ensuring that developments are carried out in the appropriate manner. Consequently, it is expected
                    that MoTCaG (DCLM)
                    will see to the execution of the plan.
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
                            <td> Pre Contract Stage complete </td>
                        </tr>
                        <tr>
                            <td> Area: </td>
                            <td> 10 acres </td>
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