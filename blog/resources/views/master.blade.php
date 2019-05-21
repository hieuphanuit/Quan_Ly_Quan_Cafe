@include('particals.header')
@include('particals.topnav')
<div id="wrapper">
  @if (Auth::user()->Role=="QuanLy")
    @include('particals.sidebar')
  @else
    @include('particals.sidebarThuNgan')
  @endif
  

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

  