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
                        <span class="individual-txt"> Ishmael Bekoe </span>

                        <div class="profile-body">
                            Ishmael is a young urban planner who holds a degree in BSc Human Settlement Planning and an MPhil Planning. He started
                            working with SPAYSIS in 2017 and has several years of experience. His career illustrates a proven track record of
                            delivering results on various forms of assignments in challenging circumstances. He has extensive experience in leading
                            integrated urban planning projects across several regions in Ghana. Ishmael’s significant knowledge in urban planning
                            and design, Social Policy and Sustainability, Geographic Information System (GIS) and Resilient Planning, together with
                            effective relationship and managerial skills have allowed him to be able to deliver pragmatic solutions to challenges
                            that arise with his assignments.
                        </div>
                    </div>

                </div>
            </div>

            <!-- Second Column -->
            {{-- <div class="col-6 left-col bg-info"> --}}
            {{-- <div > --}}
            <img src="../images/dp/ishmael.png" class="alex-img col-5" alt="" srcset="">
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