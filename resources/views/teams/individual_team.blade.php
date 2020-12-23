@extends('layouts.team_layout')

@section('individual_team')
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
                       kjk
                    </div>
                </div>
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