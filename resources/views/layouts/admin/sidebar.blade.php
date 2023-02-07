<nav class="mt-2">
    <ul class="nav nav-pills  nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
                    <a href="{{ route('jb.index') }}"
                        class="nav-link {{ request()->segment(2) == 'jabatan' ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Jabatan</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item  {{ request()->is('berita') || request()->is('berita/*') ? 'menu-open ' : '' }} ">
            <a href="#"
                class="nav-link {{ request()->is('berita') || request()->is('berita/*') ? 'active ' : '' }}">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Pengaturan Berita
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('berita.index') }}"
                        class="nav-link {{ request()->is('berita') ? 'active' : '' }}">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Berita</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href=" {{ route('kategori.index') }}"
                        class="nav-link {{ request()->segment(2) == 'kategori' ? 'active' : '' }}">
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
    </ul>
</nav>
