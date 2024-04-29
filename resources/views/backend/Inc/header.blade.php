@php
    $currentUrl = request()->path();
@endphp
<header id="{{ $currentUrl != 'login' ? 'page-topbar' : '' }}">
    <div class="layout-width">
        <div class="{{ $currentUrl != 'login' ? 'navbar-header' : '' }}">

            <div class="d-flex">

                <div class="navbar-brand-box horizontal-logo mt-2">
                    <!-- Dark Logo-->
                    <a href="{{ route('panel.index') }}" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="{{ asset($config->logo) }}" alt="" width="70" height="70">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset($config->logo) }}" alt="" width="70" height="70">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href="{{ route('panel.index') }}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="{{ asset($config->logo) }}" alt="" width="70" height="70">
                        </span>
                        <span class="logo-lg">
                            <img src="{{ asset($config->logo) }}" alt="" width="70" height="70">
                        </span>
                    </a>

                </div>

            </div>

            <div class="d-flex align-items-center">
                <div class="ms-1 header-item d-none d-sm-flex">
                    <button type="button"
                        class="btn btn-icon btn-topbar material-shadow-none btn-ghost-secondary rounded-circle light-dark-mode">
                        <i class='bx bx-moon fs-22'></i>
                    </button>
                </div>

                <div class="dropdown ms-sm-3 header-item topbar-user">
                    <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="d-flex align-items-center">
                            <img class="rounded-circle header-profile-user" src="{{ asset($config->logo) }}"
                                alt="Header Avatar">
                            <span class="text-start ms-xl-2">
                                <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Anna
                                    Adame</span>
                                <span class="d-none d-xl-block ms-1 fs-12 user-name-sub-text">Founder</span>
                            </span>
                        </span>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="auth-logout-basic.html"><i
                                class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                class="align-middle" data-key="t-logout">Logout</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
