@extends('layouts.team_layout')

@section('content')
<div class="body-section">
    {{-- ********************| Individual Profile |************************* --}}
    <div class="individual-box bg-warnin">
        
    
        <!-- Individual Profile -->
        {{-- <div class="individual-box"> --}}
            <div class="row row-height">
    
                <!-- First Column -->
                <img src="../images/dp/Marful.png" class="alex-img col-xs-12 col-sm-4 col-md-5 col-xl-5" alt="" srcset="">

                <!-- Second Column -->
                <div class="col-xs-12 col-sm-8 col-xl-7 col-md-7">
                    <div class="right-profile bg-inf">
                
                        <div class="energ">
                            <span class="individual-txt"> Dr. -Ing. Alexander B. Marful </span>
                            <div class="profile-body">
                                Dr.-Ing. Alexander Boakye Marful is an Architect and Infrastructure Planner with 16 years of professional experience. He
                                is the Principal Consultant at SPAYSIS Ltd and oversee the overall management of the company. He has previously worked
                                as a Consultant Infrastructure Planner at Fichtner GmbH & Co. KG, Stuttgart-Germany. His responsibilities included:
                                project development, master planning, analysis of the management of large Solar Power Plants being financed by the World
                                Bank, European Union, national and local governments and other reputable institutions. Prior to joining Fichtner, he
                                also worked at Predios Architects and Urban Designers as well as Ablakwa Development Ltd. Dr.-Ing. Marful is also
                                Lecturer at the Department Architecture KNUST, Kumasi Ghana. He has also been involved in over 37 academic publications
                                including peer-reviewed journal papers, book chapters, conference proceedings, and research reports. His research
                                interests are in the areas of Resilient and Smart Community Planning, Development of Universal Barrier-free Design,
                                Urbanism and Peri-urban circular community development especially for developing Countries. Dr.-Ing. Marful holds Ph.D.
                                in Energy Efficient City Planning and Master of Infrastructure Planning both from the University of Stuttgart, Germany;
                                and a Post Graduate Diploma and BSc Architecture both from KNUST, Kumasi Ghana. His working experience spans several
                                countries including: Ghana, Germany, Kuwait, Uganda, Sudan, Malawi, South Africa and USA.
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
        {{-- </div> --}}
    </div>
</div>
@endsection