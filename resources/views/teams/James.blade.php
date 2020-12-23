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
                        <span class="individual-txt">Arc. James Appah Dankyi </span>

                        <div class="profile-body">
                            Arc. Dankyi is the Projects Architect and design guru. He has over 7 years of cumulative architectural design
                            experience; working on small to large-size mixed-use, commercial, residential, institutional and industrial projects for
                            numerous clients and organizations. Currently, he is the Project Architect responsible for managing, planning,
                            organizing, directing, and evaluating all architectural research, development, design and construction. As a projects
                            Architect, he has a special eye for picking up on the smallest details that are critical to a successful project design
                            and execution. He is an expert in devising smart, efficient, highly functional and sustainable buildings. He also has
                            hands-on experience in the use of architectural design software such as AutoCAD, Revit, Rhino, Photoshop, Arch GIS among
                            others. Arc. Dankyi holds a Master’s and BSc. Architecture from the KNUST, Kumasi, Ghana.
                        </div>
                    </div>

                </div>
            </div>

            <!-- Second Column -->
            {{-- <div class="col-6 left-col bg-info"> --}}
            {{-- <div > --}}
            <img src="../images/dp/James.jpg" class="alex-img col-5" alt="" srcset="">
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