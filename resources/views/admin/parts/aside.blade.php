  {{-- Brand Logo --}}
  <a href="#" class="brand-link">
    <img src="{{asset('admin/images/AdminLTELogo.png')}}"fhome
         alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">Quản trị admin</span>
  </a>

  {{-- Sidebar --}}
  <div class="sidebar">
    {{-- Sidebar user panel (optional) --}}
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img  src="{{asset('admin/images/user__admin.png')}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Tên admin quản trị</a>
      </div>
    </div>

    {{-- SidebarSearch Form --}}
    <div class="form-inline">
      {{-- <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div> --}}
    </div>

    {{-- Sidebar Menu --}}
    <nav class="mt-2">
      <ul
        class="nav nav-pills nav-sidebar flex-column"
        data-widget="treeview"
        role="menu"
        data-accordion="false"
      >
        {{-- Add icons to the links using the .nav-icon class
         with font-awesome or any other icon font library --}}
         <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fab fa-product-hunt"></i>
            <p>
              Sản phẩm
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách sản phẩm</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới sản phẩm</p>
              </a>
            </li>

          </ul>
        </li>
         <li class="nav-item">
          <a href=# class="nav-link">
            <i class="fas fa-comments-dollar"></i>
            <p>
              Danh mục
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách danh mục</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới danh mục</p>
              </a>
            </li>
          </ul>
        </li>

    {{-- /.sidebar-menu --}}
  </div>
  {{-- /.sidebar --}}
