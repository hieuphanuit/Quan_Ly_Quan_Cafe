@include('particals.header')
@include('particals.topnav')
<div id="wrapper">
  @include('particals.sidebarThuNgan')

  <div id="content-wrapper">

    <div class="container-fluid">

      <!-- Breadcrumbs-->
      @section('Breadcrumbs')
      
      @show
      <!-- Content-->
      @yield('Content')
      
      </div>

    </div>
    <!-- /.container-fluid -->
@include('particals.footer')

  