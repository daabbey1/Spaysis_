@extends('layouts.Area_layout')

@section('range')
<div class="body-section">
    {{-- *******************| Range |************************* --}}
    <div class="range-section">
        <div class="business ">
            <span class="business-txt "> Range Of Other Consulting Service </span>
        </div>
    
        <!-- Industrial Profile -->
        <div class="infrastructure-profile">
            <div class="row">
    
                <!-- First Column -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 left-col">
                    <div class="range-img col-12">
    
                    </div>
                </div>
    
                <!-- Second Column -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="right-profile">
                        <!-- Core Services -->
                        <div class="energy">
                            <span class="profile-txt"> ANALYSIS AND CONCEPTUAL DESIGN </span>
                            <div class="profile-body">
                                Feasibility Studies |Environmental Impact & Siting Studies |Economic and Technical
                                Analyses
                                |Masterplans |Integrated
                                Infrastructure Concepts| Plant Concepts| Preliminary | Planning & Conceptual Engineering
                                |
                                Operation Management Concepts.
                            </div>
                        </div>
    
                        <!-- ENGINEERING AND CONTRACT AWARD -->
                        <div class="transport">
                            <span class="profile-txt"> ENGINEERING AND CONTRACT AWARD </span>
                            <div class="profile-body">
                                General Planning | Basic Engineering | Permit Engineering | Detail Engineering | Plant &
                                Functional Specifications|
                                Tendering | Bid Evaluation | Contract Award Recommendation | Contractual Negotiations|
                                Contract formulation.
                            </div>
                        </div>
    
                        <!-- IMPLEMENTATION -->
                        <div class="consulting">
                            <span class="profile-txt"> IMPLEMENTATION
                            </span>
                            <div class="profile-body">
                                Check of drawings| Shop Acceptances| Specialist Site Management & Supervision |
                                Coordination
                                of Commissioning |Final
                                Acceptance | Documentation | Trial Operation & Warranty Support | Interface Coordination
                                |
                                Project Steering | General
                                Project Supervision |Health & Safety Coordination | Staff Training.
                            </div>
                        </div>
    
                        <!-- OPERATION -->
                        <div class="consulting">
                            <span class="profile-txt"> OPERATION
                            </span>
                            <div class="profile-body">
                                Process Optimization | Environmental, Risk & Quality Management | Maintenance Scheduling
                                |
                                Optimization of Deployment
                                Operation, Management & Environmental Information Systems.
                            </div>
                        </div>
    
                        <!-- BUSINESS CONSULTANCY -->
                        <div class="consulting">
                            <span class="profile-txt"> BUSINESS CONSULTANCY
                            </span>
                            <div class="profile-body">
                                Market Analyses| Tariff studies| Project Development | Strategy & Organization |
                                Financial
                                Modelling | Project Financing
                                Project Management | Lender’s Engineering | Due Diligence.
                            </div>
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
@endsection