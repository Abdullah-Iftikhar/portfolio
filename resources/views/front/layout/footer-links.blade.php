<!-- Global Vendor, plugins JS -->

<!-- JS Files
============================================ -->
<!-- Global Vendor, plugins JS -->

<!-- Vendor JS -->
<!-- <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
<script src="assets/js/vendor/bootstrap.bundle.min.js"></script> -->

<!--Plugins JS-->
<!-- <script src="assets/js/plugins/swiper-bundle.min.js"></script>
<script src="assets/js/plugins/jquery.appear.min.js"></script>
<script src="assets/js/plugins/venobox.min.js"></script>
<script src="assets/js/plugins/jquery.waypoints.js"></script>
<script src="assets/js/plugins/images-loaded.min.js"></script>
<script src="assets/js/plugins/isotope.pkgd.min.js"></script>
<script src="assets/js/plugins/counter.js"></script>
<script src="assets/js/plugins/ajax-mail.js"></script>
<script src="assets/js/plugins/material-scrolltop.js"></script> -->

<!-- Minify Version -->
<script src="{{asset('front-assets/js/vendor.min.js')}}"></script>
<script src="{{asset('front-assets/js/plugins.min.js')}}"></script>

<!--Main JS (Common Activation Codes)-->
<script src="{{asset('front-assets/js/main.js')}}"></script>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-V0XXFJQQNL"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-V0XXFJQQNL');
</script>
<!-- Google tag (gtag.js) -->

@stack('custom-script')
