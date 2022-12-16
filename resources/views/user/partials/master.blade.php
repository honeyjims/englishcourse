<!DOCTYPE html>
<html lang="en">

@include('user.partials.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @if (isset($time))
            @include('user.partials.navbar-timer')
        @else
            @include('user.partials.navbar')
        @endif
        @include('user.partials.sidebar')
            <section class="content mt-5">
                @yield('content')
            </section>
    </div>
        

    </div>
    @include('user.partials.script')
    @yield('script')
    @include('sweetalert::alert')
</body>
</html>