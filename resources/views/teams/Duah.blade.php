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
                        <span class="individual-txt"> Dr Daniel Duah </span>

                        <div class="profile-body">
                            Dr. Daniel Duah is a Senior Project Architect, Construction Manager, and Sustainability expert at SPAYSIS Ltd with more
                            than 15 year of professional work experience. He has been involved in a number of residential, religious, and commercial
                            projects for various clients such as Government of Sierra Leone, Asanko Mining Company, the Church of Pentecost
                            especially in the Ashanti region, Juaben Municipal Assembly among others. He is also a Senior Lecturer at the Department
                            of Architecture, KNUST and has served in various capacities at both Departmental, College and University levels. Dr.
                            Duah has been involved in over 40 academic publications including peer-reviewed journal articles, conference
                            proceedings, book chapters, and research reports. His research interests include: sustainable planning, and design;
                            construction project management; energy efficiency in existing and new buildings; barrier-free and smart environments,
                            economic design and construction, sustainable community development among others. Dr. Duah holds a Ph.D. in Planning,
                            Design, and Construction (specialization – Construction Management) from Michigan State University, USA. He also holds a
                            MSc in Construction Management and Economics from the University of Greenwich UK; and a Post Graduate Diploma and BSc
                            Architecture both from KNUST, Ghana. His work experience spans several countries including; Ghana, USA, UK, and Sierra
                            Leone.
                        </div>
                    </div>

                </div>
            </div>

            <!-- Second Column -->
            {{-- <div class="col-6 left-col bg-info"> --}}
            {{-- <div > --}}
            <img src="../images/dp/Duah.jpg" class="alex-img col-5" alt="" srcset="">
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