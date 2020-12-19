@extends('layouts.team_layout')

@section('content')
<div class="body-section">
    {{-- ********************| Individual Profile |************************* --}}
    <div class="individual-box bg-warnin">

        <!-- Individual Profile -->
        <div class="row row-height">

            <!-- First Column -->
            <div class="col-7">
                <div class="right-profile">

                    <div class="energy">
                        <span class="individual-txt"> Arc Joe Danquah </span>

                        <div class="profile-body">
                            Joseph Adjei Danquah is SPAYSIS’s senior research scientist and project architect with over
                            15 years of industry experience. Arc. Danquah has worked across a wide range of different
                            sectors including building and road research, retail and community projects whilst
                            maintaining a particular interest in barrier free systems and sustainable architecture.
                            His diverse portfolio includes overseeing a number of projects for VRA- Takoradi Thermal
                            Power Station at Aboadze, Takoradi as well as numerous successful residential remodels
                            and new developments.
                            He obtained his Master’s degree in Architecture, Postgraduate Diploma in Architecture
                            and Bachelors at the Kwame Nkrumah University of Science and Technology, Kumasi –
                            Ghana. He has an Advanced Post Graduate Diploma in Shelter Design Development &
                            Management and Development, HDM, Lund Sweden & Philippines. He has since been
                            working for Council for Scientific and Industrial Research – Building and Road Research
                            Institute (CSIR – BRRI) as the Head of Architecture Department. He is currently pursuing
                            his PhD in barrier free environments and smart cities at the department of Architecture,
                            KNUST.
                        </div>
                    </div>

                </div>
            </div>

            <!-- Second Column -->
            {{-- <div class="col-6 left-col bg-info"> --}}
            {{-- <div > --}}
            <img src="../images/dp/Joe1.jpg" class="alex-img col-5" alt="" srcset="">
            {{-- </div> --}}
            {{-- </div> --}}

        </div>

        {{-- Profile Link --}}
        <div class="p-link">
            <div class="row">
                <div class="col-4">
                    <a href="{{ url('/profile') }}">
                        <i class="fas fa-angle-double-left"></i>
                        Go back
                    </a>
                </div>
                <div class="col-4">
                    <a href="#">
                        {{-- View Projects --}}
                    </a>
                </div>
                <div class="col-4 text-right">
                    <a href="{{ url('#') }}">
                        View all Team Profiles
                        <i class="fas fa-angle-double-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection