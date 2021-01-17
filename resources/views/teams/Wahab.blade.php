@extends('layouts.team_layout')

@section('content')
<div class="body-section">
    {{-- ********************| Individual Profile |************************* --}}
    <div class="individual-box bg-warnin">

        <!-- Individual Profile -->
        <div class="row row-height">

            <!-- First Column -->
            <img src="../images/dp/Wahab.jpg" class="alex-img col-xs-12 col-sm-4 col-md-5 col-xl-5" alt="" srcset="">

            {{-- Second column --}}
            <div class="col-xs-12 col-sm-8 col-xl-7 col-md-7">
                <div class="right-profile">

                    <div class="energy">
                        <span class="individual-txt"> Ishmael Wahab </span>

                        <div class="profile-body">
                            When it comes to your project, you can count on Ishmael to have everything under control. Ishmael has at least five
                            years of business development management and urban planning experience. Since joining SPAYSIS, he has been overseeing
                            and managing projects for key organizations, government ministries and upmarket clients. Ishmael is adept at developing
                            strategic and feasibility studies, facilitating permit submissions and approval from various municipalities, as well as
                            providing construction support and coordinating inspections monitoring and evaluation. Prior to joining SPAYSIS, he
                            worked as a Data Security Specialist at the Ministry of Finance and Economic planning. He holds a degree in Social
                            Sciences and an MPhil in Geography and Regional Planning from the University of Cape Coast.
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