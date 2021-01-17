@extends('layouts.team_layout')

@section('content')
<div class="body-section">
    {{-- ********************| Individual Profile |************************* --}}
    <div class="individual-box bg-warnin">

        <!-- Individual Profile -->
        <div class="row row-height">

            <!-- First Column -->
            <img src="../images/dp/Prince.png" class="alex-img col-xs-12 col-sm-4 col-md-5 col-xl-5" alt="" srcset="">

            {{-- Second Column --}}
            <div class="col-xs-12 col-sm-8 col-xl-7 col-md-7">
                <div class="right-profile">

                    <div class="energy">
                        <span class="individual-txt"> Prince Ofosuhene Marful </span>

                        <div class="profile-body">
                            Prince Ofosuhene has worked with SPAYSIS Architecture since 2016, Prince has become an important member of the team,
                            being a key figure on many projects. As Site Superintendent he oversees the day-to-day operations on the various sites
                            and projects and control their short-term schedule. Prince also reports on important quality control and subcontractor
                            issues at site. Still developing his understanding of the various sectors, he seeks to further his role as a project
                            assistant with a graduate certificate in project management.
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