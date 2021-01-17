@extends('layouts.team_layout')

@section('content')
<div class="body-section">
    {{-- ********************| Individual Profile |************************* --}}
    <div class="individual-box bg-warnin">

        <!-- Individual Profile -->
        <div class="row row-height">

            <!-- First Column -->
            <img src="../images/dp/Joe1.jpg" class="alex-img col-xs-12 col-sm-4 col-md-5 col-xl-5" alt="" srcset="">

            <!-- Second Column -->
            <div class="col-xs-12 col-sm-8 col-xl-7 col-md-7">
                <div class="right-profile">

                    <div class="energy">
                        <span class="individual-txt"> Arc. Joseph Adjei Danquah </span>

                        <div class="profile-body">
                            Arc. Danquah is SPAYSIS’s senior research scientist, project architect and barrier-free expert with over 15 years of
                            industry experience. He has worked across a wide range of different sectors including building and road research, retail
                            and community projects whilst maintaining a particular interest in barrier-free systems and sustainable smart
                            architecture. His diverse portfolio includes overseeing a number of projects for VRA- Takoradi Thermal Power Station at
                            Aboadze, as well as numerous successful residential remodels and new developments. He is working for Council for
                            Scientific and Industrial Research – Building and Road Research Institute (CSIR – BRRI) as the Head of Architecture
                            Department. Arc. Danquah holds a Master’s, Postgraduate Diploma and BSc in Architecture from KNUST Kumasi Ghana. He also
                            has an Advanced Post Graduate Diploma in Shelter Design Development & Management from HDM, Lund Sweden & Philippines. He
                            has also completed his PhD (waiting for defence) in barrier-free environments and smart cities at the department of
                            Architecture, KNUST. His working experience spans several regions in Ghana.
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