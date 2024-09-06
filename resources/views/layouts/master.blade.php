<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>

     <!-- START Wrapper -->
     <div class="wrapper">

          <!-- ========== Topbar Start ========== -->
          
          @include('partials.header')

          <!-- Activity Timeline -->
          

          <!-- Right Sidebar (Theme Settings) -->
         
          <!-- ========== Topbar End ========== -->

          @yield('body')

          <!-- ========== App Menu Start ========== -->
          
          @include('partials.nav')

          <!-- ========== App Menu End ========== -->

          <!-- ==================================================== -->
          <!-- Start right Content here -->
          <!-- ==================================================== -->
          
               <!-- ========== Footer Start ========== -->
               
               @include('partials.footer')

               <!-- ========== Footer End ========== -->

          <!-- ==================================================== -->
          <!-- End Page Content -->
          <!-- ==================================================== -->

     </div>
     <!-- END Wrapper -->

    @include('partials.script')
</body>

</html>