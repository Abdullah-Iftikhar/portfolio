<!DOCTYPE html>
<html lang="zxx">
<!-- Mirrored from htmldemo.net/lendex/lendex/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Apr 2023 02:59:20 GMT -->
@include('front.layout.header-links')

<body>

<main class="main-wrapper">
    @include('front.layout.header')

   @yield('content')

    @include('front.layout.footer')
</main>
@include('front.layout.footer-links')
</body>
</html>
