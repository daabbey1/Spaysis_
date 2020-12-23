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
                        <span class="individual-txt"> Dipl.-Ing. Maurice Migadde </span>

                        <div class="profile-body">
                            Dipl.-Ing. Maurice Migadde is the Project Manager for Sustainable Community Development at SPAYSIS-Ghana. He has over 7
                            years of professional work experience as a researcher, land resource management specialist and a developmental worker.
                            He has vast experience in both global and regional land management and tenure as well as developmental project
                            management. In the past he has served as a Project Officer at CLEAN-AFRICA e.V Stuttgart Germany where he successfully
                            implemented different projects, including; SDG4UNiS; a project which brings together Universities and University
                            students towards the realization of the SDGs, BRAIN GAIN 2017 and GGDS 2016. He also worked as a project manager at
                            CLEAN-Uganda, where he successfully supervised the implementation of MIPSIP-1. He also served as Trainee Surveyor with
                            the Lands Commission, Land Valuation Division and the Office of Administrator of Stool Lands, Kumasi where he
                            contributed on several land management and property valuation projects. Maurice Migadde holds a Masters in Land
                            Management and Land Tenure from the Technical University of Munich-Germany, a Bachelors in Land Economy from KNUST,
                            Kumasi-Ghana and a Diploma in Human Resource Management from Makerere University Business School, Kampala-Uganda. He has
                            working experience in Ghana, Germany, and Uganda.
                        </div>
                    </div>

                </div>
            </div>

            <!-- Second Column -->
            {{-- <div class="col-6 left-col bg-info"> --}}
            {{-- <div > --}}
            <img src="../images/dp/Maurice.JPG" class="alex-img col-5" alt="" srcset="">
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