@auth
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ asset('dist/img/user2-160x160.jpg', []) }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->us_name }}</a>
        </div>
    </div>
@endauth

<nav class="mt-2">
    <ul class="nav nav-pills nav-compact nav-sidebar flex-column" data-widget="treeview" role="menu"
        data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
    with font-awesome or any other icon font library -->

        <li class="nav-item  {{ request()->is('master/*') ? 'menu-open ' : '' }} ">
            <a href="#" class="nav-link  {{ request()->is('master/*') ? 'active' : '' }} ">
                <i class="nav-icon fas fa-copy"></i>
                <p>
                    Master Data
                    <i class="fas fa-angle-left right"></i>
                    <span class="badge badge-info right">6</span>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('pd.index') }} "
                        class="nav-link {{ request()->segment(2) == 'profil-desa' ? 'active' : '' }} ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pofil Desa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('kd.index') }}"
                        class="nav-link {{ request()->segment(2) == 'kontak-desa' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Kontak Desa</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('pmd.index') }}"
                        class="nav-link {{ request()->segment(2) == 'pemerintahan-desa' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Pemerintahan</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../layout/fixed-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Sidebar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../layout/fixed-sidebar-custom.html" class="nav-link ">
                        <i class="far fa-circle nav-icon"></i>
                        <p class="">Fixed Sidebar<small> + Custom Area</small></p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../layout/fixed-topnav.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Navbar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../layout/fixed-footer.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Fixed Footer</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="../layout/collapsed-sidebar.html" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Collapsed Sidebar</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  {{ request()->is('berita/*') ? 'menu-open ' : '' }} ">
            <a href="#" class="nav-link {{ request()->is('berita/*') ? 'active ' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Berita
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('berita.index') }}"
                        class="nav-link {{ request()->segment(2) == 'berita' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Berita</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href=" {{ route('kategori.index') }}"
                        class="nav-link {{ request()->segment(2) == 'kategori' ? 'active' : '' }} ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Kategori</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  {{ request()->is('settings/*') ? 'menu-open ' : '' }} ">
            <a href="#" class="nav-link {{ request()->is('settings/*') ? 'active ' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Settings
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('users.index') }}"
                        class="nav-link {{ request()->segment(2) == 'users' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href=" {{ route('roles.index') }}"
                        class="nav-link {{ request()->segment(2) == 'roles' ? 'active' : '' }} ">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Roles</p>
                    </a>
                </li>
            </ul>
        </li>
        <br>
        <div class="sidebar-custom">
            <li class="nav-item">
                <form action="/logout" method="post" class="form-inline">
                    @csrf
                    <button type="submit" class="nav-link btn-sidebar"><i class="nav-icon fas fa-lock">
                            Logout
                        </i> </button>
                </form>
            </li>
        </div>

    </ul>
</nav>
