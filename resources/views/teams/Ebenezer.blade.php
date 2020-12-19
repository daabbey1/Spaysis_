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
                        <span class="individual-txt"> Dr. -Ing. Ebenezer Adaku </span>

                        <div class="profile-body">
                            He is a Construction Cost Engineer and Infrastructure Planner with 9 years of professional
                            experience. He completed his PhD at the University of Stuttgart, Germany, in Infrastructure Development and Economics.
                            Before his PhD, he graduated from the Master
                            of Infrastructure Planning course where he obtained extra insight into the integrated
                            and regional planning. He obtained Bsc (Hons) in Building Technology from the Kwame
                            Nkrumah University of Science and Technology. He is a partner at Spaysis Architectural,
                            Planning and Engineering Ltd. He is currently a lecturer and consultant at the Ghana
                            Institute of Management and Public Administration (GIMPA) and runs training
                            programmes/workshops for institutions such as ECOWAS, Kofi Annan International
                            Peacekeeping Training Centre, Tema Oil Refinery, among others both in Ghana and
                            abroad. Prior to joining GIMPA, he worked with Predios Architects and Urban Designers.
                            At Predios Architects and Urban Designers, he worked on the Remodeling of the
                            former City Hotel, Kumasi now Golden Tulip Hotel, Kumasi as the Principal Project Cost
                            Engineer. He also trained in the usage of software such as AutoCAD and Arc View GIS
                            software which are applied to land suitability analysis and modelling for efficient landuse planning. He has working
                            experience in Ghana, Germany, Niger, Uganda and USA.
                            His research area is targeted at efficient urban patterns and associated infrastructure
                            costs as well as operations and project management.
                        </div>
                    </div>

                </div>
            </div>

            <!-- Second Column -->
            {{-- <div class="col-6 left-col bg-info"> --}}
            {{-- <div > --}}
            <img src="../images/dp/Adaku.png" class="alex-img col-5" alt="" srcset="">
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