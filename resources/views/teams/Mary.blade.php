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
                        <span class="individual-txt">Mary Amoah </span>

                        <div class="profile-body">
                            Mrs. Amoah is a Developmental planner and has been with SPAYSIS for the last 3 years. she brought to the company a
                            hands-on experience in developmental planning. As a development planner, she has worked on various local and
                            international projects from research, capacity building as well as the management of physical community development
                            projects all over. She has also inspired and trained lot of young people on the need for change and development through
                            lectures and community improvement programs in Ghana. She is also a part-time lecture at Wisconsin International
                            University College, Kumasi. Currently, she is pursuing a Ph.D. in Development Studies at the Department of Planning
                            KNUST Kumasi Ghana. She also holds a Master’s in Development Policy Planning and a BSc Land Economy from KNUST Kumasi
                            Ghana.
                        </div>
                    </div>

                </div>
            </div>

            <!-- Second Column -->
            {{-- <div class="col-6 left-col bg-info"> --}}
            {{-- <div > --}}
            <img src="../images/dp/ishmael.pg" class="alex-img col-5" alt="image" srcset="">
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