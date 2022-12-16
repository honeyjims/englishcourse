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
                        <a class="active" href="{{route('about.frontend')}}">Tentang</a>
                    </li>
                    <li>
                        <a href="{{route('price.frontend')}}">Harga</a>
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
                    <h2 class="title">Tentang</h2>
                    <ul class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a href="{{route('frontend.home')}}">Beranda</a></li>
                        <li class="breadcrumb-item active">Tentang</li>
                    </ul>
                </div>
                <!-- Page Banner Content End -->
            </div>
        </div>
        <!-- Page Banner End -->
        <!-- About Start -->
        <div class="section section-padding">
            <div class="container">
                <!-- About Wrapper Start -->
                <div class="about-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <!-- About Images Start -->
                            <div class="about-images">

                                <div class="row align-items-center">
                                    <div class="col-6">
                                        <!-- Single Image Start -->
                                        <div class="single-image">
                                            <img src="{{asset('education')}}/assets/images/about-1.jpg" alt="About">
                                        </div>
                                        <!-- Single Image End -->
                                    </div>
                                    <div class="col-6">
                                        <!-- Single Image Start -->
                                        <div class="single-image">
                                            <img src="{{asset('education')}}/assets/images/about-2.jpg" alt="About">
                                        </div>
                                        <!-- Single Image End -->
                                        <!-- Single Image Start -->
                                        <div class="single-image">
                                            <img src="{{asset('education')}}/assets/images/about-3.jpg" alt="About">
                                        </div>
                                        <!-- Single Image End -->
                                    </div>
                                </div>
                            </div>
                            <!-- About Images End -->
                        </div>
                        <div class="col-lg-6">
                            <!-- About Images Start -->
                            <div class="about-content">
                                <h3 class="title">Mengapa OC English Course?</h3>
                                <p>OC English Course adalah Lembaga pelatihan yang hadir untuk menyediakan layanan pembelajaran Bahasa Inggris yang berkualitas untuk kamu yang ingin Belajar Bahasa Inggris dari 0 Banget sampai mahir. Seluruh kelas disusun secara tersistem dan berurutan mulai dari Level Beginner, Intermediate, dan Advance berdasarkan kurikulum yang sudah diriset termasuk materi Grammar, Writing, Reading, Listening dan Speaking.</p>
                                <ul>
                                    <li>Harga terjangkau dan berkualitas </li>
                                    <li>Materi lengkap yang terstruktur </li>
                                    <li>Mentor dan Team berpengalaman </li>
                                    <li>Termotivasi untuk berkembang lebih cepat </li>
                                </ul>
                            </div>
                            <!-- About Images End -->
                        </div>
                    </div>
                </div>
                <!-- About Wrapper End -->
            </div>
        </div>
        <!-- About End -->
        <!-- Testimonial Start -->
        <div class="section">
            <div class="container">
                <!-- Testimonial Wrapper Start -->
                <div class="testimonial-wrapper">

                    <!-- Testimonial Author Start -->
                    <div class="testimonial-author">
                        <!-- Testimonial Author Wrapper Start -->
                        <div class="testimonial-author-wrapper">
                            <div class="author-images-wrapper author-images-active">
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide author-image">
                                            <img src="{{asset('education')}}/assets/images/author-10.jpg" alt="Author">
                                        </div>
                                        <div class="swiper-slide author-image">
                                            <img src="{{asset('education')}}/assets/images/author-11.jpg" alt="Author">
                                        </div>
                                        <div class="swiper-slide author-image">
                                            <img src="{{asset('education')}}/assets/images/author-8.jpg" alt="Author">
                                        </div>
                                        <div class="swiper-slide author-image">
                                            <img src="{{asset('education')}}/assets/images/author-9.jpg" alt="Author">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Testimonial Author Wrapper End -->
                    </div>
                    <!-- Testimonial Author End -->
                    <!-- Testimonial Content Start -->
                    <div class="testimonial-content testimonial-content-active">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide single-testimonial-content">
                                    <p>Saat membaca teks bahasa Inggris, kamu akan menemukan kosakata yang mungkin tidak pernah kamu ketahui sebelumnya. Semakin kamu terbiasa dengan kosakata tersebut, kamu pun tidak akan terasa asing saat mendengarkan kosakata tersebut digunakan orang lain dalam percakapan, atau saat kamu ingin menggunakannya di tulisanmu yang lain.</p>
                                    <h4 class="name">Reading</h4>
                                </div>
                                <div class="swiper-slide single-testimonial-content">
                                    <p>Semakin sering Anda terbiasa menggunakan otak untuk mengolah kalimat dan paragraf dalam tulisan, maka semakin “akrab” pikiran Anda dengan bahasa Inggris. Hal ini akan membuat Anda lebih mudah berbicara. Namun, kemampuan writing juga akan didukung oleh kemampuan reading. Karena semakin banyak membaca, kamu akan semakin banyak menyerap kosakata yang bisa kamu gunakan dalam kalimat-kalimat yang kamu susun dalam tulisanmu.</p>
                                    <h4 class="name">Writing</h4>
                                </div>
                                <div class="swiper-slide single-testimonial-content">
                                    <p>Listening atau mendengar dalam belajar bahasa inggris, skill yang harus kita kuasai adalah mendengar sebelum kita berbicara. Hal ini sangat penting untuk di kuasai terlebih dahulu karena sebelum kita bernbicara kita mendengarkan Native Speaker lalu berbicara mengikuti cara Native Speaker itu mengucapkan suatu kata.</p>
                                    <h4 class="name">Listening</h4>
                                </div>
                                <div class="swiper-slide single-testimonial-content">
                                    <p> Salah satu tips belajar Inggris yang cepat dalam waktu singkat adalah menguasai kemampuan ini. Speaking dalam bahasa Inggris dapat membantu kamu dalam aspek listening. Pasalnya, tanpa disadari, saat kamu speaking, kamu juga mendengarkan ucapanmu dan lawan bicaramu.</p>
                                    <h4 class="name">Speaking</h4>
                                </div>
                            </div>

                            <div class="swiper-pagination"></div>
                        </div>
                    </div>
                    <!-- Testimonial Content End -->

                </div>
                <!-- Testimonial Wrapper End -->
            </div>
        </div>
        <!-- Testimonial End -->
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
@endsection