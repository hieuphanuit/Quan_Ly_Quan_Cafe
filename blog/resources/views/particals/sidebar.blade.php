<!-- Sidebar -->
<ul class="sidebar navbar-nav">
  <li class="nav-item  {{Request::is('dashboard') ? 'active' : null}}">
    <a class="nav-link" href="/dashboard">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>
  <li class="nav-item {{Request::is('nhanvien') ? 'active' : null}}">
    <a class="nav-link" href="/nhanvien">
      <i class="fas fa-fw fa-folder"></i>
      <span>Nhân Viên</span>
    </a>
  </li>
  <li class="nav-item {{Request::is('khachhangthanthiet') ? 'active' : null}}">
    <a class="nav-link" href="/khachhangthanthiet">
      <i class="fas fa-fw fa-folder"></i>
      <span>Khách Hàng</span>
    </a>
  </li>
  <li class="nav-item {{Request::is('thucdon') ? 'active' : null}}">
    <a class="nav-link" href="/thucdon">
      <i class="fas fa-fw fa-folder"></i>
      <span>Thực Đơn</span>
    </a>
  </li>
  <li class="nav-item {{Request::is('kho') ? 'active' : null}}">
    <a class="nav-link" href="/kho">
      <i class="fas fa-fw fa-folder"></i>
      <span>Kho</span>
    </a>
  </li>
  <li class="nav-item dropdown {{Request::is('hoadon/*') ||  Request::is('hoadongoimon/*') ? 'show' : null}}">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Hóa Đơn</span>
    </a>
    <div class="dropdown-menu {{Request::is('hoadon/*') ||  Request::is('hoadongoimon/*') ? 'show' : null}}" aria-labelledby="pagesDropdown">
      <h6 class="dropdown-header">Hóa đơn nguyên liệu:</h6>
      <a class="dropdown-item {{Request::is('hoadon/danhsachhoadonnguyenlieu') ? 'active' : null}}" href="/hoadon/danhsachhoadonnguyenlieu">Danh sách</a>
      <div class="dropdown-divider"></div>
      <h6 class="dropdown-header">Hóa đơn gọi món:</h6>
      <a class="dropdown-item {{Request::is('hoadongoimon/danhsachhoadongoimon') ? 'active' : null}}" href="/hoadongoimon/danhsachhoadongoimon">Danh sách</a>
    </div>
  </li>
  <li class="nav-item dropdown {{Request::is('thongke/*') ? 'show' : null}}">
    <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Thống Kê</span>
    </a>
    <div class="dropdown-menu {{Request::is('thongke/*') ? 'show' : null}}" aria-labelledby="pagesDropdown">
      <a class="dropdown-item {{Request::is('thongke/thongketheoca') ? 'active' : null}}" href="/thongke/thongketheoca">Thống kê ca</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item {{Request::is('thongke/thongketheongay') ? 'active' : null}}" href="/thongke/thongketheongay">Thống kê ngày</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item {{Request::is('thongke/thongketheothang') ? 'active' : null}}" href="/thongke/thongketheothang">Thống kê tháng</a>
    </div>
  </li>
</ul>