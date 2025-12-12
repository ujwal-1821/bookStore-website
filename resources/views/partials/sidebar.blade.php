<aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">

    <!-- Brand -->
    <div class="sidebar-brand">
        <a href="{{ asset('admin/dist/pages/index.html')}}" class="brand-link">
            <img src="{{ asset('admin/dist/assets/img/AdminLTELogo.png') }}"
                 alt="AdminLTE Logo"
                 class="brand-image opacity-75 shadow" />

            <span class="brand-text fw-light">FreeBooks-Backend</span>
        </a>
    </div>

    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column"
                data-lte-toggle="treeview"
                role="menu"
                data-accordion="false">

                <!-- Books Management -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon bi bi-speedometer"></i>
                        <p>
                            Books Managements
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>

                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('guest')}}" class="nav-link active">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Category</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('guest')}}" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Books</p>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Permission</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- Testimonial -->
                <li class="nav-item">
                    <a href="{{route('testimonial.index')}}" class="nav-link">
                        <i class="nav-icon bi bi-circle"></i>
                        <p>Testimonial</p>
                    </a>
                </li>

            </ul>
        </nav>
    </div>
</aside>
