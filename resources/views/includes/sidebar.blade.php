<aside class="main-sidebar sidebar-dark-primary elevation-4 sidebarColor">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
        <img src="{{asset('/assets/back-end/img/logo.png')}}" alt="Deikha Jan Logo"
             href="{{route('home')}}"
             class="brand-image img-circle elevation-3"
             style="">
        <span class="brand-text font-weight-light">Deikha Jan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar client panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="" class="img-circle elevation-2 profile-avatar-style"
                     alt="User Image">
            </div>

        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                            <span class="right badge badge-danger"></span>
                        </p>
                    </a>
                </li>
                    <li class="nav-item">
                        <a href="{{route('category.index')}}" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Category
                                <span class="right badge badge-danger"></span>
                            </p>
                        </a>
                    </li>
            </ul>
        </nav>

    </div>
</aside>
