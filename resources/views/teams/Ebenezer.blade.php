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
                            Dr. -Ing. Ebenezer Adaku is a Construction Cost Engineer and Infrastructure Planner with more than 12 years of
                            professional work experience. He is a partner at SPAYSIS Ltd and has more than 30 executed projects on his CV. He is
                            also a lecturer and consultant at the Ghana Institute of Management and Public Administration (GIMPA). Dr. -Ing. Adaku
                            also runs training programmes/workshops for institutions such as ECOWAS, Kofi Annan International Peacekeeping Training
                            Centre, Tema Oil Refinery, among other. Before joining GIMPA, he worked with Predios Architects and Urban Designers.
                            During this time, worked on the Remodeling of the former City Hotel, and now Golden Tulip Hotel, Kumasi as the Principal
                            Project Cost Engineer. He is also trained in the usage of software such as AutoCAD and Arc View GIS software which are
                            applied to land suitability analysis and modelling for efficient land use planning. He is also a researcher with 17
                            publications in his name. His research area is targeted at efficient urban patterns and associated infrastructure costs
                            as well as operations and project management. Dr. -Ing. Adaku holds a PhD in Infrastructure Development and Economics
                            and a Master of Infrastructure Planning from the University of Stuttgart, Germany. He also holds a BSc (Hons) in
                            Building Technology from the KNUST-Kumasi Ghana. He has working experience in Ghana, Germany, Niger, Uganda and USA.
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
                    <a href="{{ url('/teams/profile') }}">
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