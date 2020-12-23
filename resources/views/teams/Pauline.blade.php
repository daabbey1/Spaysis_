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
                        <span class="individual-txt"> Pauline Ashiagbor </span>

                        <div class="profile-body">
                           When you go behind the scenes at SPAYSIS, you’ll find Pauline. She ensures that all administrative and human resource
                        activities run smoothly. She manages in-house and external company events, arranges official travels and accommodation,
                        and keep the team updated on both internal and external company procedures. Her strong organisational skills and
                        problem-solving skills, have grounded the SPAYSIS administrative procedures especially during the COVID-19 pandemic
                        period. While most Administrators focus solely on their company’s internal workings, Pauline’s administrative expertise
                        goes beyond that. she took the responsibility to review contracts, tender documents, proof reading of official documents
                        and assists with monitoring and evaluation of project activities. Prior to joining the SPAYSIS team, Pauline volunteered
                        as a program’s coordinator with CLEAN-AFRICA Ghana; a role she still plays. Under this role she has coordinated the
                        implementation of projects such as AfroMobitecture, LaNCoR+, among other. She holds a B. A Linguistics (English and
                        French) from the University of Ghana Legon and she is currently pursuing a Master of Science in Planning, Monitoring and
                        Evaluation at KNUST.
                        </div>
                    </div>

                </div>
            </div>

            <!-- Second Column -->
            {{-- <div class="col-6 left-col bg-info"> --}}
            {{-- <div > --}}
            <img src="../images/dp/Paurine.jpg" class="alex-img col-5" alt="" srcset="">
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