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
                        <span class="individual-txt"> Patrick Doh </span>

                        <div class="profile-body">
                            A Quantity Surveyor and Project Manager with 14 years of professional experience in
                            quantity surveying, commercial and project management in construction. He obtained
                            his MSc. in Construction Project Management from Loughborough University, UK. After
                            his MSc. he worked extensively with some top UK companies to gain international
                            exposure and experience in cost management and contract administration. Prior to his
                            MSc. he graduated with BSc. in Build-ing Technology, from Kwame Nkrumah University
                            of Science and Technology, Kumasi, Ghana. He is a partner at Spaysis Architectural,
                            Planning and Engineering Ltd After his BSc degree he worked as a Quantity Surveyor with
                            both contractors and consultants in Ghana. During his studies for his BSc, he worked as
                            a Trainee Quantity Surveyor with various contractors, estate developers and consultants
                            in Ghana to gain practical experience of the basic principles of construction and quantity
                            surveying .He has a wide spectrum of knowledge and experience in various types of
                            building and civil engineering works. He has worked extensively in Ghana and the United
                            Kingdom. He has knowledge in the use of FIDIC, ICE and NEC forms of contracts and also
                            familiar with the use of SMM7, CESMM and HWMM, methods of measurements.
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