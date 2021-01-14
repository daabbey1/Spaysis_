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
                <img class="d-block" src="../images/Projects/brice.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="../images/Projects/aa2.ng" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="../images/Projects/aa3.pg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="../images/Projects/aa4.pg" alt="Fourth slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="../images/Projects/aa4.pg" alt="Fifth slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="../images/Projects/aa6.pg" alt="Sixth slide">
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
    <div class="  py-2 selection-box" style=" background-color:#000022;">
        <table>
            <tr>
                <td>
                    <span data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                        <img class=" img-selection" src="../images/Projects/brice.jpg" alt="Card image cap">
                    </span>
                </td>
                <td>
                    <span data-target="#carouselExampleIndicators" data-slide-to="1">
                        <img class=" img-selection" src="../images/Projects/aa2.jp" alt="Card image cap">
                    </span>
                </td>
                <td>
                    <span data-target="#carouselExampleIndicators" data-slide-to="2">
                        <img class=" img-selection" src="../images/Projects/aa3.jp" alt="Card image cap">
                    </span>
                </td>
                <td>
                    <span data-target="#carouselExampleIndicators" data-slide-to="3">
                        <img class=" img-selection" src="../images/Projects/aa4.jp" alt="Card image cap">
                    </span>
                </td>
                <td>
                    <span data-target="#carouselExampleIndicators" data-slide-to="4">
                        <img class=" img-selection" src="../images/Projects/aa4.jp" alt="Card image cap">
                    </span>
                </td>
                <td>
                    <span data-target="#carouselExampleIndicators" data-slide-to="5">
                        <img class=" img-selection" src="../images/Projects/aa6.jp" alt="Card image cap">
                    </span>
                </td>
            </tr>
        </table>
    
    
    </div>

    {{-- Info about the project --}}
    <div class="row left-right-info">
        <div class="col-xs-12 col-lg-7 col-xl-7">
            <div class="discription">
                <div class="disc-head">
                    <span class="disc-main-head"> Mixed Use Facility </span>
                </div>
                <div class="disc-body">
                   This is facility consist of a restaurant on the ground floor with 3 bedroom apartments on the 1st and 2nd floor.
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-lg-5 col-xl-5">
            <div class="pro-info">
                <div class="pro-head">
                    <span class="pro-sub-head"> Project Information </span>
                </div>
                <div class="pro-body">
                    <table style="width:100%">
                        {{-- <caption>Monthlys</caption> --}}
                        <tr>
                            <td> Status: </td>
                            <td> Under Construction </td>
                        </tr>
                        <tr>
                            <td> Area: </td>
                            <td>  </td>
                        </tr>
                        <tr>
                            <td> Location: </td>
                            <td> Yaounde, Cameroon </td>
                        </tr>
                        <tr>
                            <td> Estimated Cost: </td>
                            <td>  </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection