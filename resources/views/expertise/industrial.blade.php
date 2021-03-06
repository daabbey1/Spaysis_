@extends('layouts.Area_layout')

@section('industrial')
<div class="body-section">

        {{-- ************| Industrial |************************* --}}
        <div class="industrial-section">
            <div class="business">
                <span class="business-txt "> Industrial Model Building & Animations </span>
            </div>
        
            <!-- Industrial Profile -->
            <div class="infrastructure-profile">
                <div class="row">
        
                    <!-- First Column -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 left-col">
                        <div class="industrial-img col-12">
        
                        </div>
                    </div>
        
                    <!-- Second Column -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                        <div class="right-profile">
                            <!-- Industrial Model -->
                            <div class="energy">
                                <span class="profile-txt"> INDUSTRIAL MODEL BUILDING & ANIMATION </span>
                                <div class="profile-body">
                                    When telling any story, visual representation always creates a better understanding of
                                    your
                                    message. Model Building and
                                    Animation enables us to move beyond just diagrams, photographs and illustrations to
                                    create
                                    multi- dimensional
                                    simulations that bring projects to life and give the project stakeholders a clearer
                                    interpretation of the project
                                    concept. <br>
                                    We employ a full array of visualization tools, and full-motion animated sequences to
                                    provide
                                    dynamic capabilities for
                                    analysis, interaction and visualization. With our architectural background and vast
                                    experience in all styles of
                                    architectural models, we offer you unrivalled experience in this field. We talk your
                                    language, grasp your ideas and
                                    generally get to grips with understanding and reproducing even the most complicated
                                    building. <br>
                                    SPAYSIS Models are staffed with high skilled enthusiastic model makers’ prefect for
                                    execution or simultaneous project.
                                    We are dedicated to meet all your needs with superior scale model, delivered on
                                    schedule, at
                                    competitive price budgets.
                                </div>
                            </div>
        
                            <!-- SPAYSIS MODELS -->
                            <div class="transport">
                                <span class="profile-txt"> SPAYSIS MODELS </span>
                                <div class="profile-body">
                                    Our in-house laser cutting facilities allow us to achieve pinpoint accuracy and superb
                                    detailing. From the outset, we
                                    can help you design and plan your architectural model, identifying the most appropriate
                                    scale, style and level of detail
                                    for your particular project. The aim is to ensure your architectural model conveys all
                                    the
                                    relevant information in the
                                    most cost-effective way. The main services rendered by SPAYSIS Models are;<br>
                                    Architectural Renderings | Architectural Animation and Virtual Reality | Model Supplies
                                    |
                                    Architectural Models |Model
                                    Making Clinic for Schools.
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