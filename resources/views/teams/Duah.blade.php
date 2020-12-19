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
                            State University (specialization – Construction Management). Daniel lived in the United
                            Kingdom for four years and completed his MSc in Construction Management and
                            Economics from the University of Greenwich with a research focused on the concept
                            of build ability in the built environment and also taught Building Studies at Barnfield
                            College in Luton during the period. Prior to his MSc studies, Daniel completed his Post
                            Graduate Diploma and Bachelor of Science degrees both in Architecture from KNUST in
                            Ghana.
                            He joined the Department of Architecture in 2006 as a lecturer and is currently a Senior
                            Lecturer, the Chair of the Senior Staff Housing Committee of KNUST, the Chair of the...
                            Quality Assurance Sub- Committee of the College of Art and Built Environment, the
                            Assistant Examinations Officer of the College, and the Coordinator of Undergraduate
                            Programmes at the Department of Architecture, KNUST. Daniel has been involved in
                            over 40 academic publications including peer-reviewed journal publications, peerreviewed conference proceedings, book
                            chapters, and research reports. His research
                            interests include: sustainable planning, design, and construction; construction project
                            management; energy efficiency in existing and new buildings; barrier free and smart
                            environments; and economic design and construction. In addition to teaching and
                            research, Dr. Duah is a practicing Architect and a Construction Management Consultant
                            and has been involved in a number of residential, religious, and commercial projects for
                            various clients.
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