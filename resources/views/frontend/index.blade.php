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
                        <a class="active" href="{{route('frontend.home')}}">Beranda</a>
                    </li>
                    <li>
                        <a href="{{route('about.frontend')}}">Tentang</a>
                    </li>
                    <li>
                        <a href="{{route('price.frontend')}}">Harga</a>
                    </li>
            </ul>
        </div>
    </div>

</div>
<!-- Offcanvas End -->

<!-- Slider Start -->
<div class="slider-section-04 section">

            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-6">
                        <!-- Slider Start -->
                        <div class="slider-content">
                            <h2 class="title">Tempat Belajar Bahasa Inggris paling Interaktif!</h2>
                            <p>Dapatkan seluruh materi Grammar, Speaking, Listening, Writing, dan Reading secara lengkap hanya di OC. Cukup hanya dengan 3 bulan berlatih OC English Course membantu anda dapat mendengar secara jelas dan memahami Bahasa Inggris. Tidak perlu khawatir tentang dari mana memulainya. Ayo daftar sekarang dan ikuti gratis placement Test.</p> <br>
                            <h4><strong>PENDAFTARAN PERIODE GELOMBANG 1 TELAH DIBUKA !!!</strong></h4>
                            <a href="{{ route('login') }}" class="btn btn-primary btn-hover-heading-color">FREE PLACEMENT TEST !</a>
                        </div>
                        <!-- Slider End -->
                    </div>

                    <div class="col-md-6 col-sm-8">
                        <!-- Slider Images Start -->
                        <div class="slider-images-04">
                            <div class="image">
                                <img src="{{asset('education')}}/assets/images/hero-3.png" alt="Hero">
                            </div>
                        </div>
                        <!-- Slider Images End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Slider End -->
        
<!-- Feature Start -->
<div class="section counter-section feature-section">
    <div class="container">
        <!-- Feature Wrapper Start -->
        <div class="feature-wrapper">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col">
                    <!-- Feature Counter Start -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="{{asset('education')}}/assets/images/icon-8.png" alt="Icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Materi lengkap yang terstruktur</h4>
                            <p>Kami menyajikan materi grammar, speaking, listening, dan reading dari level beginner sampai advanced.</p>
                        </div>
                    </div>
                    <!-- Feature Counter End -->
                </div>
                <div class="col">
                    <!-- Feature Counter Start -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="{{asset('education')}}/assets/images/icon-9.png" alt="Icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Termotivasi untuk berkembang lebih cepat</h4>
                            <p>Misi kami adalah untuk membuat pembelajaran bahasa inggris dapat diakses oleh semua kalangan.</p>
                        </div>
                    </div>
                    <!-- Feature Counter End -->
                </div>
                <div class="col">
                    <!-- Feature Counter Start -->
                    <div class="single-feature">
                        <div class="feature-icon">
                            <img src="{{asset('education')}}/assets/images/icon-10.png" alt="Icon">
                        </div>
                        <div class="feature-content">
                            <h4 class="title">Harga terjangkau dan berkualitas</h4>
                            <p>Kami menawarkan harga termurah dengan kualitas yang terjamin kepada para siswa</p>
                        </div>
                    </div>
                    <!-- Feature Counter End -->
                </div>
            </div>
        </div>
        <!-- Feature Wrapper End -->
    </div>
</div>
<!-- Feature End -->

<!-- Feature Category Start -->
<div class="section section-padding feature-category-section">
    <div class="container">

        <!-- Feature Category Header Start -->
        <div class="feature-category-header">
            <!-- Section Title Start -->
            <div class="section-title">
                <h2 class="title">Topik Unggulan yang kami sajikan</h2>
            </div>
            <!-- Section Title End -->

            <!-- Feature Category Start -->
            <div class="feature-category-btn">
                <a href="{{route('about.frontend')}}" class="btn btn-outline-primary">Lebih Lanjut</a>
            </div>
            <!-- Feature Category End -->
        </div>
        <!-- Feature Category Header End -->

        <!-- Feature Category Body Start -->
        <div class="feature-category-body">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="{{asset('education')}}/assets/images/icon-19.png" alt="">
                            <span class="title">Reading</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="{{asset('education')}}/assets/images/icon-11.png" alt="">
                            <span class="title">Writing</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="{{asset('education')}}/assets/images/icon-20.png" alt="">
                            <span class="title">Listening</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                </div>
                <div class="col-lg-3 col-sm-6">
                    <!-- Category Item Start -->
                    <div class="single-category-item">
                        <a href="course-grid.html">
                            <img class="item-icon" src="{{asset('education')}}/assets/images/icon-21.png" alt="">
                            <span class="title">Speaking</span>
                        </a>
                    </div>
                    <!-- Category Item End -->
                </div>
            </div>
        </div>
        <!-- Feature Category Body End -->

    </div>
</div>
<!-- Feature Category End -->

<!-- Call To Action Start -->
<div class="section bg-color-2 call-to-action-bg">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-md-6">
                <!-- Call To Action Content Start -->
                <div class="call-to-action-content-02 section-padding">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h2 class="title">Mengapa OC English Course?</h2>
                    </div>
                    <!-- Section Title End -->
                    <p>OC English Course adalah Lembaga pelatihan yang hadir untuk menyediakan layanan pembelajaran Bahasa Inggris yang berkualitas untuk kamu yang ingin Belajar Bahasa Inggris dari 0 Banget sampai mahir. Seluruh kelas disusun secara tersistem dan berurutan mulai dari Level Beginner, Intermediate, dan Advance berdasarkan kurikulum yang sudah diriset termasuk materi Grammar, Writing, Reading, Listening dan Speaking.</p>
                    <a href="#" class="btn btn-primary btn-hover-heading-color">Pelajari Lebih Lanjut</a>
                </div>
                <!-- Call To Action Content End -->
            </div>
            <div class="col-md-6">
                <!-- Call To Action Content Start -->
                <div class="call-to-action-images-02 text-center text-lg-end d-none d-md-block">

                    <div class="call-to-images-shape-01"></div>

                    <div class="image">
                        <div class="call-to-action-shape-01"></div>
                        <img src="{{asset('education')}}/assets/images/cta-1.png" alt="Call To Action">
                    </div>
                </div>
                <!-- Call To Action Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Call To Action End -->

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

<!-- Steps Start -->
<div class="section section-padding-02">
    <div class="container">
        <!-- Section Title Start -->
        <div class="section-title text-center">
            <h2 class="title">Langkah Cepat untuk Memulai OC English Course</h2>
        </div>
        <!-- Section Title End -->
    </div>

    <div class="testimonial-wrapper-02 testimonial-active-02">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <!-- Single Testimonial Start -->
                    <div class="single-testimonial-02">
                        <div class="testimonial-thumb">
                            <img src="{{asset('education')}}/assets/images/steps/signup.jpg" alt="Author">
                        </div>
                        <div class="testimonial-meta">
                            <div class="meta-content">
                                <h5 class="name">Daftar Akun</h5>
                                <p class="designation">Step 1</p>
                            </div>
                        </div>

                    </div>
                    <!-- Single Testimonial End -->
                </div>
                <div class="swiper-slide">
                    <!-- Single Testimonial Start -->
                    <div class="single-testimonial-02">
                        <div class="testimonial-thumb">
                            <img src="{{asset('education')}}/assets/images/steps/register.jpg" alt="Author">
                        </div>
                        <div class="testimonial-meta">
                            <div class="meta-content">
                                <h5 class="name">Mengisi Form Pendaftaran</h5>
                                <p class="designation">Step 2</p>
                            </div>
                        </div>

                    </div>
                    <!-- Single Testimonial End -->
                </div>
                <div class="swiper-slide">
                    <!-- Single Testimonial Start -->
                    <div class="single-testimonial-02">
                        <div class="testimonial-thumb">
                            <img src="{{asset('education')}}/assets/images/steps/test.jpg" alt="Author">
                        </div>
                        <div class="testimonial-meta">
                            <div class="meta-content">
                                <h5 class="name">Klik Mulai Placement Test</h5>
                                <p class="designation">Step 3</p>
                            </div>
                        </div>

                    </div>
                    <!-- Single Testimonial End -->
                </div>
                <div class="swiper-slide">
                    <!-- Single Testimonial Start -->
                    <div class="single-testimonial-02">
                        <div class="testimonial-thumb">
                            <img src="{{asset('education')}}/assets/images/steps/result.jpg" alt="Author">
                        </div>
                        <div class="testimonial-meta">
                            <div class="meta-content">
                                <h5 class="name">Dapatkan Hasil Tes</h5>
                                <p class="designation">Step 4</p>
                            </div>
                        </div>

                    </div>
                    <!-- Single Testimonial End -->
                </div>
                 <div class="swiper-slide">
                    <!-- Single Testimonial Start -->
                    <div class="single-testimonial-02">
                        <div class="testimonial-thumb">
                            <img src="{{asset('education')}}/assets/images/steps/call.jpg" alt="Author">
                        </div>
                        <div class="testimonial-meta">
                            <div class="meta-content">
                                <h5 class="name">Tim OC akan Menghubungi via WA</h5>
                                <p class="designation">Step 5</p>
                            </div>
                        </div>

                    </div>
                    <!-- Single Testimonial End -->
                </div>
            </div>

            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>
<!-- Steps End -->

<!-- Testimonial Start -->
        <div class="section section-padding border-bottom">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h2 class="title">Apa kata <span>learners kami ?</span></h2>
                </div>
                <!-- Section Title End -->

                <div class="testimonial-wrapper-02 testimonial-active-04">
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <!-- Testimonial Start -->
                                <div class="testimonial-content-05">
                                    <div class="testimonial-quote">
                                        <i class="flaticon-left-quotes-sign"></i>
                                    </div>
                                    <p>Tempat les terbaik dengan harga affordable, diajarin dari 0 sampe akhir, ditambah gurunya yang asik dan easy going!</p>
                                    <div class="meta-content">
                                        <h5 class="name">Pradizzia Triane Intan</h5>
                                        <div class="single-course">
                                            <div class="courses-meta">
                                                <p class="student">Rating</p>
                                                <div class="rating">
                                                    <div class="rating-star">
                                                        <div class="rating-active" style="width: 100%;"></div>
                                                    </div>
                                                    <span>(5.0)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Testimonial Start -->
                                <div class="testimonial-content-05">
                                    <div class="testimonial-quote">
                                        <i class="flaticon-left-quotes-sign"></i>
                                    </div>
                                    <p>Merasa beruntung bisa les di oc karna saya jadi bisa lebih percaya diri untuk speaking dalam bahasa inggris dengan orang lain. Gurunya selalu memberi semangat positif.</p>
                                    <div class="meta-content">
                                        <h5 class="name">Zahratunnisa</h5>
                                       <div class="single-course">
                                            <div class="courses-meta">
                                                <p class="student">Rating</p>
                                                <div class="rating">
                                                    <div class="rating-star">
                                                        <div class="rating-active" style="width: 100%;"></div>
                                                    </div>
                                                    <span>(5.0)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Testimonial Start -->
                                <div class="testimonial-content-05">
                                    <div class="testimonial-quote">
                                        <i class="flaticon-left-quotes-sign"></i>
                                    </div>
                                    <p>OC is good, because disini saya dapat belajar dengan baik dan tanpa harus tertekan karena gurunya sangat asik. Dalam proses mengajarnya sangat mudah dipahami.</p>
                                    <div class="meta-content">
                                        <h5 class="name">Fiowidya Saputri</h5>
                                        <div class="single-course">
                                            <div class="courses-meta">
                                                <p class="student">Rating</p>
                                                <div class="rating">
                                                    <div class="rating-star">
                                                        <div class="rating-active" style="width: 100%;"></div>
                                                    </div>
                                                    <span>(5.0)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Testimonial Start -->
                                <div class="testimonial-content-05">
                                    <div class="testimonial-quote">
                                        <i class="flaticon-left-quotes-sign"></i>
                                    </div>
                                    <p>Disini saya bisa belajar dengan baik dan santai tanpa harus tertekan dan gurunya sangat asik dalam proses mengajarnya membuat saya menyukai pelajaran bahasa inggris.</p>
                                    <div class="meta-content">
                                        <h5 class="name">Diva Maharani</h5>
                                        <div class="single-course">
                                            <div class="courses-meta">
                                                <p class="student">Rating</p>
                                                <div class="rating">
                                                    <div class="rating-star">
                                                        <div class="rating-active" style="width: 100%;"></div>
                                                    </div>
                                                    <span>(5.0)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial End -->
                            </div>
                            <div class="swiper-slide">
                                <!-- Testimonial Start -->
                                <div class="testimonial-content-05">
                                    <div class="testimonial-quote">
                                        <i class="flaticon-left-quotes-sign"></i>
                                    </div>
                                    <p>Guru nya luar biasa, harga terjangkau dan lokasi yg strategis menurut saya</p>
                                    <div class="meta-content">
                                        <h5 class="name">Lidya Purnamasari</h5>
                                        <div class="single-course">
                                            <div class="courses-meta">
                                                <p class="student">Rating</p>
                                                <div class="rating">
                                                    <div class="rating-star">
                                                        <div class="rating-active" style="width: 100%;"></div>
                                                    </div>
                                                    <span>(5.0)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial End -->
                            </div>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </div>
        <!-- Testimonial End -->
@endsection