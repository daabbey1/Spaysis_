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
                        <span class="individual-txt"> James Appah Dankyi </span>

                        <div class="profile-body">
                            James joined SPAYSIS in 2015 and presently the company’s design guru when it comes
                            to devising smart, efficient, highly functional and sustainable buildings. As one of our
                            Junior, he has a talent for picking up on the smallest details that are critical to a successful
                            project and execution. He is currently the Project Architect who is responsible for
                            managing, planning, organizing, directing, and evaluating all architectural research,
                            development, design and construction.
                            James Appah Dankyi holds a Master’s degree in Architecture from the Kwame Nkrumah
                            University of Science and Technology, Kumasi, Ghana. He has over 5 years of cumulative of
                            architectural design experience – working on small- to large-size mixed use, commercial,
                            residential, institutional and industrial projects for numerous clients and organizations.
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