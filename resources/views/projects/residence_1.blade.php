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
                <img class="d-block " src="../images/Projects/aa.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="../images/Projects/aa2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="../images/Projects/aa3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="../images/Projects/aa4.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="../images/Projects/aa4.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block" src="../images/Projects/aa6.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-ico" aria-hidden="true">
                <span style="color: white; font-size:30px;"> <i class="fas fa-chevron-left"></i> </span>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-ico" aria-hidden="true">
                <span style="color: white; font-size:3;"> <i class="fas fa-chevron-right"></i> </span>
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
                        <img class=" img-selection" src="../images/Projects/aa.jpg" alt="Card image cap">
                    </span>
                </td>
                <td>
                    <span data-target="#carouselExampleIndicators" data-slide-to="1">
                        <img class=" img-selection" src="../images/Projects/aa2.jpg" alt="Card image cap">
                    </span>
                </td>
                <td>
                    <span data-target="#carouselExampleIndicators" data-slide-to="2">
                        <img class=" img-selection" src="../images/Projects/aa3.jpg" alt="Card image cap">
                    </span>
                </td>
                <td>
                    <span data-target="#carouselExampleIndicators" data-slide-to="3">
                        <img class=" img-selection" src="../images/Projects/aa4.jpg" alt="Card image cap">
                    </span>
                </td>
                <td>
                    <span data-target="#carouselExampleIndicators" data-slide-to="4">
                        <img class=" img-selection" src="../images/Projects/aa4.jpg" alt="Card image cap">
                    </span>
                </td>
                <td>
                    <span data-target="#carouselExampleIndicators" data-slide-to="5">
                        <img class=" img-selection" src="../images/Projects/aa6.jpg" alt="Card image cap">
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
                    <span class="disc-main-head"> AA's Residence </span> 
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
                            <td> Pre Contract Stage complete </td>
                        </tr>
                        <tr>
                            <td> Area: </td>
                            <td>  </td>
                        </tr>
                        <tr>
                            <td> Location: </td>
                            <td> Accra, Ghana </td>
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