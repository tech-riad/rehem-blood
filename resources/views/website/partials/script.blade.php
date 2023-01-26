
        <!-- ==== js dependencies start ==== -->

        <!-- jquery -->
        <script src="{{asset('assets/vendor/jquery/jquery-3.6.0.min.js')}}"></script>
        <!-- bootstrap five js -->
        <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- nice select js -->
        <script src="{{asset('assets/vendor/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <!-- magnific popup js -->
        <script src="{{asset('assets/vendor/magnific-popup/js/jquery.magnific-popup.min.js')}}"></script>
        <!-- slick js -->
        <script src="{{asset('assets/vendor/slick/js/slick.js')}}"></script>
        <!-- odometer js -->
        <script src="{{asset('assets/vendor/odometer/js/odometer.min.js')}}"></script>
        <!-- viewport js -->
        <script src="{{asset('assets/vendor/viewport-js/viewport.jquery.js')}}"></script>
        <!-- owl carousel min js -->
        <script src="{{asset('assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>
        <!-- wow js -->
        <script src="{{asset('assets/vendor/wow/wow.min.js')}}"></script>

        <!-- ==== js dependencies end ==== -->

        <!-- plugin js -->
        <script src="{{asset('assets/js/plugin.js')}}"></script>
        <!-- main js -->
        <script src="{{asset('assets/js/main.js')}}"></script>

        <!--Notification-->
<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script>
    @if(Session::has('message'))
    var type = "{{Session::get('alert-type','info')}}"
    switch (type) {
    case 'info':
    toastr.info("{{ Session::get('message') }}");
    break;
    case 'success':
    toastr.success("{{ Session::get('message') }}");
    break;
    case 'warning':
    toastr.warning("{{ Session::get('message') }}");
    break;
    case 'error':
    toastr.error("{{ Session::get('message') }}");
    break;
}
@endif
</script>