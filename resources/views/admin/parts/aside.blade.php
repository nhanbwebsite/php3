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
        <a href="#" class="d-block">Nguyễn Bá Nha</a>
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
              <a href="{{route('amin.products.list')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách sản phẩm</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('amin.products.addGet')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới sản phẩm</p>
              </a>
            </li>

          </ul>
        </li>
{{-- Danh mục --}}
         <li class="nav-item">
          <a href=# class="nav-link">
            <i class="fas fa-list-alt"></i>
            <p>
              Danh mục
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('amin.category.list')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách danh mục</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('amin.category.addGet')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm mới danh mục</p>
              </a>
            </li>
          </ul>
        </li>

    {{-- Post --}}
        <li class="nav-item">
            <a href=# class="nav-link">
                <i class="fas fa-newspaper"></i>
            <p>
                Bài viết
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('amin.post.list')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách bài viết</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('amin.post.addGet')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm bài viết</p>
                </a>
            </li>
            </ul>
        </li>
        {{-- Người dùng --}}

        <li class="nav-item">
            <a href=# class="nav-link">
                <i class="fas fa-users"></i>
            <p>
                Người dùng
                <i class="right fas fa-angle-left"></i>
            </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('amin.post.list')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách người dùng</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('amin.post.addGet')}}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm người dùng</p>
                </a>
            </li>
            </ul>
        </li>

{{-- Hóa đơn --}}
<li class="nav-item">
    <a href=# class="nav-link">
      <i class="fas fa-money-check-alt"></i>
    <p>
       Hóa Đơn
        <i class="right fas fa-angle-left"></i>
    </p>
    </a>
    <ul class="nav nav-treeview">
    <li class="nav-item">
        <a href="{{route('admin.order.list')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Danh sách hóa đơn</p>
        </a>
    </li>
    </ul>
</li>
    {{-- /.sidebar-menu --}}
  </div>
  {{-- /.sidebar --}}

