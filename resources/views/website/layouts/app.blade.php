<!DOCTYPE html>
<html lang="en">

@include('website.partials.head')


<body>

  
    @include('website.layouts.topbar')
    
    {{-- @include('website.layouts.nav') --}}
    <!-- partial:partials/_sidebar.html -->
   
    <!-- partial: sideber end -->

     @yield('content')
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    @include('website.layouts.footer')
  <!-- plugins:js start-->
 @include('website.partials.script')
  <!-- End custom js for this page -->

  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset("backend/custom/js/delete_alert.js")}}"></script>
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
 @stack('js')
 
</body>

</html>