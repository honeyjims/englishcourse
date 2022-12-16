<!-- Header Start  -->
<div id="header" class="header section">
    <div class="container">

        <!-- Header Wrapper Start  -->
        <div class="header-wrapper">

            <!-- Header Logo Start -->
            <div class="header-logo">
                <a href="{{route('frontend.home')}}"><img src="{{asset('education')}}/assets/images/logo.png" alt=""></a>
            </div>
            <!-- Header Logo End -->

            <!-- Header Menu Start -->
            <div class="header-menu d-none d-lg-block">
                <ul class="main-menu">
                    <li>
                        <a href="{{route('frontend.home')}}">Beranda</a>
                    </li>
                    <li>
                        <a href="{{route('about.frontend')}}">Tentang</a>
                    </li>
                    <li>
                        <a href="{{route('price.frontend')}}">Harga</a>
                    </li>
                </ul>
            </div>
            <!-- Header Menu End -->

            <!-- Header Meta Start -->
                <div class="header-login d-none d-lg-flex">
                    <a class="link" href="{{ route('login') }}"><i class="fa fa-user-o"></i> Masuk</a>
                    <a class="link" href="{{ route('register') }}">Daftar</a>
                </div>

                <div class="header-toggle d-lg-none">
                    <button data-bs-toggle="offcanvas" data-bs-target="#offcanvasMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                </div>

            </div>
            <!-- Header Meta End -->

        </div>
        <!-- Header Wrapper End -->

    </div>
</div>
<!-- Header End -->