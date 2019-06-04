<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="/dashboard">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item {{Request::is('khachhangthanthiet') ? 'active' : null}}">
    <a class="nav-link" href="/khachhangthanthiet">
      <i class="fas fa-fw fa-folder"></i>
      <span>Khách Hàng</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/hoadongoimon/danhsachhoadongoimon">
      <i class="fas fa-fw fa-folder"></i>
      Hóa Đơn
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/thongke/thongketheoca">
      <i class="fas fa-fw fa-folder"></i>
      Thống kê
    </a>
  </li>
</ul>