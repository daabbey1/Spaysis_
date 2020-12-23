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
                        <span class="individual-txt">Serv. Patrick Doh </span>

                        <div class="profile-body">
                            Serv. Doh is a Quantity Surveyor and Construction Projects Manager with 19 years of professional experience in quantity
                            surveying, commercial and project management in construction. He is a partner at SPAYSIS Ltd. He has a wide spectrum of
                            knowledge and experience in various types of building and civil engineering works. He has worked extensively in Ghana
                            and the United Kingdom, with more than 40 medium and largescale projects on his CV. Serv. Doh has hands-on experience in
                            use of FIDIC, ICE and NEC forms of contracts. He is also an expert in the use of SMM7, CESMM and HWMM, methods of
                            measurements. He has also worked extensively with some top UK companies to gain international exposure and experience in
                            cost management and contract administration. Serv. Doh holds a MSc. in Construction Project Management from Loughborough
                            University, UK. He also holds BSc. Building Technology from KNUST, Ghana. His work experience spans several countries
                            including; Ghana, UK, and Uganda.
                        </div>
                    </div>

                </div>
            </div>

            <!-- Second Column -->
            {{-- <div class="col-6 left-col bg-info"> --}}
            {{-- <div > --}}
            <img src="../images/dp/Doh.png" class="alex-img col-5" alt="" srcset="">
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