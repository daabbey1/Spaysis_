@extends('layouts.Area_layout')

@section('land')
<div class="body-section">

    {{-- ************| Land |************************* --}}
    <div class="land-section">
        <div class="business mx-5">
            <span class="business-txt "> Land, Property & Facility Management </span>
        </div>
    
        <!-- Industrial Profile -->
        <div class="infrastructure-profile">
            <div class="row">
    
                <!-- First Column -->
                <div class="col-6 left-col">
                    <div class="land-img col-12">
    
                    </div>
                </div>
    
                <!-- Second Column -->
                <div class="col-6">
                    <div class="right-profile">
                        <!-- Core Services -->
                        <div class="energy">
                            <span class="profile-txt"> Core Services </span>
                            <div class="profile-body">
                                Property Management | Site Management | Property Consultancy/ Advisory | Property
                                Development and investment | Property
                                Marketing | Brokerage | Debt Recovery.
                            </div>
                        </div>
    
                        <!-- Property Management -->
                        <div class="transport">
                            <span class="profile-txt"> PROPER MANAGEMENT </span>
                            <div class="profile-body">
                                SPAYSIS Ltd provides developers, landlords, and investors a full range of property
                                management services through a
                                professional property services team and property managers. Our objective is to handle
                                the
                                day―to day needs of your
                                property, minimize vacancies and maximize your bottom line. Accordingly, a good
                                management
                                will also ensure that your
                                asset is maintained and costs and revenues are budgeted and accounted for. Our property
                                management services include:
                                Property Marketing and Leasing | Tenant Screening | Preparing and Documenting Lease
                                Agreement | Lease Coordination and
                                Management | Around Clock Property Maintenance Services | Rent Collection and Financial
                                Reporting | Cleaning and
                                Security Services.
                            </div>
                        </div>
    
                        <!-- PROPERTY CONSULTANCY/ ADVISORY -->
                        <div class="consulting">
                            <span class="profile-txt"> PROPERTY CONSULTANCY/ ADVISORY
                            </span>
                            <div class="profile-body">
                                SPAYSIS Ltd Advisory unit provides independent and objective advisory and consultancy
                                services to property owners,
                                developers, builders, lenders, and investors on all property related aspects, covering a
                                wide range of issues concerning
                                site locations, demographics, high and best use, master planning and conceptualization.
                                Our
                                advisory services also
                                include the following: Investment Appraisals | Market Intelligence Reports | Market
                                Analysis
                                | Projects Comprehensive
                                Analysis | Project Development and Management.
                            </div>
                        </div>
    
                        <!-- PROPERTY DEVELOPMENT AND INVESTMENT -->
                        <div class="consulting">
                            <span class="profile-txt"> PROPERTY DEVELOPMENT AND INVESTMENT
                            </span>
                            <div class="profile-body">
                                SPAYSIS Ltd engages in selected property developments and acquisitions in different
                                property
                                segments. In addition, we
                                invest in acquiring distressed properties, renovate them and manage them profitably.
                            </div>
                        </div>
    
                        <!-- PROPERTY MARKETING -->
                        <div class="consulting">
                            <span class="profile-txt"> PROPERTY MARKETING
                            </span>
                            <div class="profile-body">
                                Our online property portal provides one of the largest property databases in Uganda,
                                with an
                                extensive range of
                                commercial and residential property listings, attracting a large number of knowledges of
                                the
                                local market supported by
                                aggressive and Innovative Marketing Solutions including the following: E–Marketing |
                                Social
                                Media Networks | SMS Marketing | Periodical Newsletters | Brochures,
                                Exhibitions, and Signage’s | Property Virtual Tours and Walkthrough.
                            </div>
                        </div>
    
                        <!-- PROPERTY MAINTENANCE -->
                        <div class="consulting">
                            <span class="profile-txt"> PROPERTY MAINTENANCE
                            </span>
                            <div class="profile-body">
                                We provide full property maintenance and cleaning services through our cleaning and
                                maintenance
                                division Home Care
                                Services include: Cleaning Services | Electrical | Plumbing and Drainage | Carpentry and
                                Painting | General Maintenance
                                | Removals and Storage.
                            </div>
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
@endsection