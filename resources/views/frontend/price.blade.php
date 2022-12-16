@extends('frontend.partials.master')
@section('content')
<!-- Offcanvas Start -->
<div class="offcanvas offcanvas-start" id="offcanvasMenu">
    <div class="offcanvas-header">
        <!-- Offcanvas Logo Start -->
        <div class="offcanvas-logo">
            <a href="{{route('frontend.home')}}"><img src="{{asset('education')}}/assets/images/logo.png" alt=""></a>
        </div>
        <!-- Offcanvas Logo End -->
        <button class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
        <div class="offcanvas-menu">
            <ul class="main-menu">
                    <li>
                        <a href="{{route('frontend.home')}}">Beranda</a>
                    </li>
                    <li>
                        <a href="{{route('about.frontend')}}">Tentang</a>
                    </li>
                    <li>
                        <a class="active" href="{{route('price.frontend')}}">Harga</a>
                    </li>
                </ul>
        </div>
    </div>
</div>
<!-- Offcanvas End -->
<!-- Page Banner Start -->
        <div class="section page-banner-section bg-color-1">
            <img class="shape-1" src="{{asset('education')}}/assets/images/shape/shape-5.png" alt="shape">
            <img class="shape-2" src="{{asset('education')}}/assets/images/shape/shape-6.png" alt="shape">
            <img class="shape-3" src="{{asset('education')}}/assets/images/shape/shape-7.png" alt="shape">
            <img class="shape-4" src="{{asset('education')}}/assets/images/shape/shape-21.png" alt="shape">
            <img class="shape-5" src="{{asset('education')}}/assets/images/shape/shape-21.png" alt="shape">
            <div class="container">
                <!-- Page Banner Content Start -->
                <div class="page-banner-content">
                    <h2 class="title">Harga</h2>
                    <ul class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('frontend.home')}}">Beranda</a></li>
                        <li class="breadcrumb-item active">Harga</li>
                    </ul>
                </div>
                <!-- Page Banner Content End -->
            </div>
        </div>
        <!-- Page Banner End -->
<!-- Pricing Start -->
        <div class="section section-padding">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h2 class="title">Rencanakan <span>Levelmu</span> dan mulai Tes Gratis !!!</h2>
                </div>
                <!-- Section Title End -->
                <!-- Pricing Wrapper End -->
                <div class="pricing-wrapper">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="annual">
                            <div class="row justify-content-center gx-0">
                                <div class="col-lg-4 col-md-8">
                                    <!-- Single Pricing Start -->
                                    <div class="single-pricing">
                                        <div class="pricig-header">
                                            <h3 class="title">Beginner</h3>
                                            <p>Rp<span>1.500.000</span>/3bulan</p>
                                            <a class="btn btn-primary btn-hover-heading-color" href="{{ route('register') }}">Mulai Tes</a>
                                        </div>
                                        <div class="pricig-body">
                                            <ul class="pricig-list">
                                                <li><span>2</span> Kelas fleksibel per Minggu</li>
                                                <li><span>24</span> Pertemuan selama 3 Bulan</li>
                                                <li><span>Free</span> Placement Test</li>
                                                <li><span>Unlimited</span> Konsultasi Mentor</li>
                                                <li><span>General</span> Introduction to English</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Single Pricing End -->
                                </div>
                                <div class="col-lg-4 col-md-8">
                                    <!-- Single Pricing Start -->
                                    <div class="single-pricing active">
                                        <div class="pricig-header">
                                            <h3 class="title">Advanced</h3>
                                            <p>Rp<span>2.000.000</span>/3bulan</p>
                                            <a class="btn btn-white btn-hover-heading-color" href="{{ route('register') }}">Mulai Tes</a>
                                        </div>
                                        <div class="pricig-body">
                                            <ul class="pricig-list">
                                                <li><span>3</span> Kelas fleksibel per Minggu</li>
                                                <li><span>36</span> Pertemuan selama 3 Bulan</li>
                                                <li><span>Free</span> Placement Test</li>
                                                <li><span>Unlimited</span> Konsultasi Mentor</li>
                                                <li><span>Improve</span> Confidence in English</li>
                                                <li><span>Free</span> TOEFL Preparation</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Single Pricing End -->
                                </div>
                                <div class="col-lg-4 col-md-8">
                                    <!-- Single Pricing Start -->
                                    <div class="single-pricing">
                                        <div class="pricig-header">
                                            <h3 class="title">Intermediate</h3>
                                            <p>Rp<span>1.800.000</span>/3month</p>
                                            <a class="btn btn-primary btn-hover-heading-color" href="{{ route('register') }}">Mulai Tes</a>
                                        </div>
                                        <div class="pricig-body">
                                            <ul class="pricig-list">
                                                <li><span>2</span> Kelas fleksibel per Minggu</li>
                                                <li><span>24</span> Pertemuan selama 3 Bulan</li>
                                                <li><span>Free</span> Placement Test</li>
                                                <li><span>Unlimited</span> Konsultasi Mentor</li>
                                                <li><span>Meningkatkan</span> Skill Grammar</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Single Pricing End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Pricing Wrapper End -->
            </div>
        </div>
        <!-- Pricing End --> 
@endsection