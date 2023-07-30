    <!-- page loader begin -->
    @include('layouts.site.loader')
    <!-- page loader end -->

    <!-- header begin -->
    @if (url()->current() === url('/'))
        @include('layouts.site.header')
    @else
        @include('layouts.site.header-two')
    @endif
    <!-- header end -->

    <!-- Content section -->
    @yield('content')

    <!-- footer begin -->
    @include('layouts.site.footer')
    <!-- footer end -->
