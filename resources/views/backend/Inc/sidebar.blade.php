<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box mt-2">
        <!-- Dark Logo-->
        <a href="{{ route('panel.index') }}" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ asset( $config->logo) }}" alt="" width="100" height="100" >
            </span>
            <span class="logo-lg">
                <img src="{{ asset( $config->logo) }}" alt="" width="100" height="100">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="{{ route('panel.index') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ asset( $config->logo) }}" alt="" width="100" height="100">
            </span>
            <span class="logo-lg">
                <img src="{{ asset( $config->logo) }}" alt="" width="100" height="100">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div class="dropdown sidebar-user m-1 rounded">
        <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown" data-bs-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <span class="d-flex align-items-center gap-2">
                <img class="rounded header-profile-user" src="/assets/images/users/avatar-1.jpg"
                    alt="Header Avatar">
                <span class="text-start">
                    <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                    <span class="d-block fs-14 sidebar-user-name-sub-text"><i
                            class="ri ri-circle-fill fs-10 text-success align-baseline"></i> <span
                            class="align-middle">Online</span></span>
                </span>
            </span>
        </button>
        <div class="dropdown-menu dropdown-menu-end">
            <!-- item-->
            <h6 class="dropdown-header">Welcome Anna!</h6>
            <a class="dropdown-item" href="pages-profile.html"><i
                    class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                    class="align-middle">Profile</span></a>
            <a class="dropdown-item" href="apps-chat.html"><i
                    class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span
                    class="align-middle">Messages</span></a>
            <a class="dropdown-item" href="apps-tasks-kanban.html"><i
                    class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span
                    class="align-middle">Taskboard</span></a>
            <a class="dropdown-item" href="pages-faqs.html"><i
                    class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span
                    class="align-middle">Help</span></a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="pages-profile.html"><i
                    class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance :
                    <b>$5971.67</b></span></a>
            <a class="dropdown-item" href="pages-profile-settings.html"><span
                    class="badge bg-success-subtle text-success mt-1 float-end">New</span><i
                    class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                    class="align-middle">Settings</span></a>
            <a class="dropdown-item" href="auth-lockscreen-basic.html"><i
                    class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock
                    screen</span></a>
            <a class="dropdown-item" href="auth-logout-basic.html"><i
                    class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle"
                    data-key="t-logout">Logout</span></a>
        </div>
    </div>
    <div id="scrollbar">
        <div class="container-fluid">


            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span data-key="t-menu">Menü</span></li>
                <li class="menu-title"><span data-key="t-menu">Site Ayarları</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('panel.settings.index') }}">
                        <span data-key="t-dashboards">Ayarlar</span>
                    </a>
                </li>
                <li class="menu-title"><span data-key="t-menu">Slider İşlemleri</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <span data-key="t-dashboards">Slider</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('panel.slider.index') }}" class="nav-link" data-key="t-analytics">
                                    Slider </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('panel.slider.create') }}" class="nav-link" data-key="t-crm">
                                    Slider Ekle </a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="menu-title"><span data-key="t-menu">Menü İşlemleri</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarmenu" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <span data-key="t-dashboards">Menü</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarmenu">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('panel.menu.index') }}" class="nav-link" data-key="t-analytics">
                                    Menüler </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('panel.menu.create') }}" class="nav-link" data-key="t-crm">
                                    Menü Ekle </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-title"><span data-key="t-menu">Ürün İşlemleri</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarurun" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <span data-key="t-dashboards">Ürün</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarurun">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('panel.products.index') }}" class="nav-link"
                                    data-key="t-analytics">
                                    Ürünler </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('panel.products.create') }}" class="nav-link" data-key="t-crm">
                                    Ürün Ekle </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><span data-key="t-menu">Galeri İşlemleri</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebargaleri" data-bs-toggle="collapse" role="button"
                        aria-expanded="false" aria-controls="sidebarDashboards">
                        <span data-key="t-dashboards">Galeri</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebargaleri">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('panel.gallery.index') }}" class="nav-link"
                                    data-key="t-analytics">
                                    Galeri Resimleri </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('panel.gallery.create') }}" class="nav-link" data-key="t-crm">
                                    Galeri Ekle </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><span data-key="t-menu">Hakkımızda</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('panel.about.index') }}">
                        <span data-key="t-dashboards">Hakkımızda</span>
                    </a>
                </li>

                <li class="menu-title"><span data-key="t-menu">İletişim</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('panel.contact.index') }}">
                        <span data-key="t-dashboards">İletişim</span>
                    </a>
                </li>

                <li class="menu-title"><span data-key="t-menu">Rezervasyonlar</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{ route('panel.rezervation.index') }}">
                        <span data-key="t-dashboards">Rezervasyonlar</span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
</div>
