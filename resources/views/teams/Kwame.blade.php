@extends('layouts.team_layout')

@section('content')
<div class="body-section">
    {{-- ********************| Individual Profile |************************* --}}
    <div class="individual-box bg-warnin">

        <!-- Individual Profile -->
        <div class="row row-height">

            <!-- First Column -->
            <img src="../images/dp/Kwame.png" class="alex-img col-xs-12 col-sm-4 col-md-5 col-xl-5" alt="" srcset="">

            {{-- Second column --}}
            <div class="col-xs-12 col-sm-8 col-xl-7 col-md-7">
                <div class="right-profile">

                    <div class="energy">
                        <span class="individual-txt"> Kwame Nkrumah </span>

                        <div class="profile-body">
                            As the senior AutoCAD technician, Kwame Nkrumah is in charge of production drawing and site supervision Kwame Nkrumah
                            brings over 10 years of hands-on experience across a variety of sectors, with a particular passion for innovative house
                            designs, large scale redevelopment and Residential buildings. Outside of work Nkrumah tutors AutoCAD at IPMC and Home
                            Image.
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- Profile Link --}}
        <div class="p-link">
            <div class="row">
                <div class="col-4 ">
                    <a href="{{ url('/teams/profile') }}">
                        <i class="fas fa-angle-double-left"></i>
                        Back
                    </a>
                </div>
                <div class="col-4">
                    <a href="#">
                        {{-- View Projects --}}
                    </a>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ url('#') }}">
                        All
                        <i class="fas fa-angle-double-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection