@extends('layouts.Area_layout')


@section('infrastructure')
    <div class="body-section">

        {{-- ************| Infrastructure |************************* --}}
        <div class="infrastructure-section">
            <div class="business">
                <span class="business-txt"> Infrastructure Planning & Engineering </span>
            </div>
            
            <!-- Infrastructure Profile -->
            <div class="infrastructure-profile">
                <div class="row">
            
                    <!-- First Column -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6  left-col bg-dange" style="padding: 0px !important">
                        <div class="infrastructure-img col-12">
            
                        </div>
                    </div>
            
                    <!-- Second Column -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 bg-inf" style="padding: 0px !important">
                        <div class="right-profile">
                            <!-- Energy -->
                            <div class="energy">
                                <span class="profile-txt"> ENERGY </span>
                                <div class="profile-body">
                                    Energy economics | Power plants | Renewables | Energy transmission and distribution |
                                    I&C and power system technology |
                                    Energy management | Energy-purchasing portfolio management.
                                </div>
                            </div>
            
                            <!-- Energy -->
                            <div class="transport">
                                <span class="profile-txt"> WATER & CIVIL AND TRANSPORT INFRASTRUCTURE </span>
                                <div class="profile-body">
                                    Total Water Management | Drinking Water Supply & Sanitation | Surface & Engineering
                                    Structures | Traffic, Transportation
                                    & Civil Engineering | Mining & Mineral Economics| Industrial Planning | Integrated
                                    Infrastructure Concepts.
                                </div>
                            </div>
            
                            <!-- Consulting -->
                            <div class="consulting">
                                <span class="profile-txt"> CONSULTING & PROJECT DEVELOPMENT </span>
                                <div class="profile-body">
                                    Studies| Organization and Strategy Consultancy | Project Management | Financial
                                    Modelling | Infrastructure Management |
                                    Geo-spatial Solutions
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
                {{-- Profile Link --}}
                <div class="p-link">
                    <div class="row">
                        <div class="col-4 text-left bg-inf">
                            <a href="{{ url('expertise/index') }}">
                                <i class="fas fa-angle-double-left"></i>
                                 Back
                            </a>
                        </div>
                        <div class="col-4 text-center">
                            <a href="/projects/general_profile">
                                Projects
                            </a>
                        </div>
                        <div class="col-4 text-right">
                            <a href="{{ url('/business_profiles') }}">
                                All
                                <i class="fas fa-angle-double-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection

