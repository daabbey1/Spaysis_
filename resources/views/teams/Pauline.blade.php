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
                            When you go behind the scenes at SPAYSIS – behind the blueprints, you’ll find Pauline.
                            While most Administrative assistants focus solely on their company’s internal workings,
                            Pauline’s administrative expertise is put to work on client projects. In addition to
                            managing our administrative works, Pauline is also responsible for reviewing contracts,
                            tender documents and assisting with monitoring and evaluation activities.
                            She is currently pursuing a Master of Science in Planning, Monitoring and Evaluation at
                            KNUST. Prior to joining the SPAYSIS team, Pauline volunteered as a programs coordinator
                            with CLEAN-AFRICA Ghana; a role she still plays.
                        </div>
                    </div>

                </div>
            </div>

            <!-- Second Column -->
            {{-- <div class="col-6 left-col bg-info"> --}}
            {{-- <div > --}}
            <img src="../images/dp/Pauline.jpg" class="alex-img col-5" alt="" srcset="">
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