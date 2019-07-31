<!DOCTYPE html>
<html>
<head>
    @include('layouts.user.styles')
</head>
<body class="hold-transition skin-blue sidebar-mini">

    <!-- Page Wrapper -->
  <div class="wrapper">

    @include('layouts.user.header')


    @include('layouts.user.sidebar')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">

      @yield('content')
        
    </div>

        <!-- End of Main Content -->
      @include('layouts.user.footer')

      @include('layouts.user.cont-sidebar')
         <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>

  </div>
    <!-- End of Content Wrapper -->

  @include('layouts.user.scripts')
</body>
</html>