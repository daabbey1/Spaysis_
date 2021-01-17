@extends('layouts.team_layout')

@section('content')
<div class="body-section">
    {{-- ********************| Individual Profile |************************* --}}
    <div class="individual-box bg-warnin">

        <!-- Individual Profile -->
        <div class="row row-height">

            <!-- First Column -->
            <img src="../images/dp/monica.jpg" class="alex-img col-xs-12 col-sm-4 col-md-5 col-xl-5" alt="" srcset="">


            {{-- Second Column --}}
            <div class="col-xs-12 col-sm-8 col-xl-7 col-md-7">
                <div class="right-profile">

                    <div class="energy">
                        <span class="individual-txt"> Monica Dapaah </span>

                        <div class="profile-body">
                            Ms. Dapaah is an Assistant Construction Manager with over 3 years of professional experience. She has formally worked
                            with ASIB Construction Limited and Architectural and Engineering Services Limited. She has also been an intern at Nature
                            Builds Consults Kumasi. She joined SPAYSIS Ltd in 2019 and she works as a liaison Expert between the Company and the
                            contractors. Ms. Dapaah holds MSc and BSc in Construction Technology and Management, KNUST, Kumasi. Currently she is
                            also persuing an M.Phil by Assessing The Causes Poor and Inappropriate Managerial Skills in the Construction Industry,
                            at the Department of Construction Technology And Management, KNUST.
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