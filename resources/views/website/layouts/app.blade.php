<!DOCTYPE html>
<html lang="en">

@include('website.partials.head')

<body>

  
    @include('website.layouts.topbar')
    @include('website.layouts.nav')
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
 @stack('js')
 
</body>

</html>