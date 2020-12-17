@extends('layouts.Area_layout')

@section('architecture')
<div class="body-section bg-primary">

    {{-- ************| Architecture |************************* --}}
    <div class="architecture-section">
        <div class="business mx-5">
            <span class="business-txt "> Architecture, Urban & Rural Planning </span>
        </div>
    
        <!-- Infrastructure Profile -->
        <div class="infrastructure-profile">
            <div class="row">
    
                <!-- First Column -->
                <div class="col-6 left-col">
                    <div class="architecture-img col-12">
    
                    </div>
                </div>
    
                <!-- Second Column -->
                <div class="col-6">
                    <div class="right-profile">
                        <!-- Energy -->
                        <div class="energy">
                            <span class="profile-txt"> PLANNING AND EVALUATION SERVICES </span>
                            <div class="profile-body">
                                Programming | Space schematics and flow diagrams | Existing facilities surveys |
                                Economic feasibility studies |
                                Marketing studies | Project financing | Site analysis and selection | Site development
                                planning | Detailed site
                                utilization studies| On-site utility studies Off-site utility studies| Environmental
                                studies and reports| Energy studies
                                and reports| Zoning processing assistance | Geotechnical engineering | Site surveying.
                            </div>
                        </div>
    
                        <!-- Energy -->
                        <div class="transport">
                            <span class="profile-txt"> DESIGN SERVICES </span>
                            <div class="profile-body">
                                Architectural design | Structural design | Mechanical design | Electrical design | Civil
                                design | Interior design |
                                Landscape design Graphic design | Special design | Material research and specifications|
                                Special furnishings design.
                            </div>
                        </div>
    
                        <!-- Consulting -->
                        <div class="consulting">
                            <span class="profile-txt"> CONTRACT ADMINISTRATION SERVICES FACILITY OPERATION SERVICES
                            </span>
                            <div class="profile-body">
                                General administration Submittal services| Site visitation |On-site project
                                representation | Payment certification |
                                Administration of testing and inspection | Supplemental documentation | Administration
                                of changes in the work |
                                Interpretations and decisions Project close-out | Construction management; Maintenance
                                and operational programming |
                                Start-up assistance | Record drawings. Warranty review | Facility operations and
                                performance meeting |Post- contract
                                evaluation | Tenant-related services | Project promotion.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            {{-- Profile Link --}}
            <div class="p-link">
                <div class="row">
                    <div class="col-4">
                    <a href="{{ url('/expertise') }}">
                            <i class="fas fa-angle-double-left"></i>
                             Go back 
                        </a>
                    </div>
                    <div class="col-4">
                        <a href="#">
                            View Projects 
                        </a>
                    </div>
                    <div class="col-4">
                    <a href="{{ url('/business_profiles') }}">
                            View all Business Profiles
                            <i class="fas fa-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection