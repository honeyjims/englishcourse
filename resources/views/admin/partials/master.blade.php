<!DOCTYPE html>
<html lang="en">

@include('admin.partials.head')

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
        @include('admin.partials.navbar')
        @include('admin.partials.sidebar')
            <section class="content">
                @yield('content')
            </section>
    </div>
        

    </div>
    @include('admin.partials.script')
    @yield('script')
</body>
</html>