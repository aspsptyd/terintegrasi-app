<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="{{ asset('sneat') }}/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>{{ env('APP_NAME') }}</title>

    <meta name="description" content="" />

    <!-- Hide Favicon  -->
    {{-- <link rel="icon" type="image/x-icon" href="{{ asset('sneat') }}/assets/img/favicon/favicon.ico" /> --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{ asset('sneat') }}/assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{ asset('sneat') }}/assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('sneat') }}/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('sneat') }}/assets/css/production.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('sneat') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="{{ asset('sneat') }}/assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="{{ asset('sneat') }}/assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{ asset('sneat') }}/assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="#" class="app-brand-link">
              <span class="app-brand-text demo menu-text fw-bolder ms-0">{{ config('app.name') }} {{ env('APP_VERSION') }}</span>
            </a>
          </div>
          <div class="app-brand">
            <a href="#" class="app-brand-link">
              <span class="app-brand-text sub menu-text">{{ env('INSTITUTION_NAME') }}</span>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard v1.0 -->
            {{-- <li class="menu-item">
              <a href="{{ route('administrator.beranda') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard v1.0</div>
              </a>
            </li> --}}

            <!-- Dashboard v2.0 -->
            <li class="menu-item {{ Route::is('administrator.*') ? 'open' : null }}">
              <a href="{{ route('administrator.beranda_index_v2') }}" class="menu-link">
                <i class="menu-icon tf-icons bx {{ Route::is('administrator.*') ? 'bxs-home-circle' : 'bx-home-circle' }}"></i>
                <div class="{{ Route::is('administrator.*') ? 'active-menu-set' : null }}">
                  {{ env('DASHBOARD_VERSION') }}
                </div>
              </a>
            </li>

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Management</span>
            </li>

            <!-- Master Data -->
            <li class="menu-item mt-1 {{ Route::is('user.*') ? 'open' : null }}">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx {{ Route::is('user.*') ? 'bxs-box' : 'bx-box' }}"></i>
                <div class="{{ Route::is('user.*') ? 'active-menu-set' : null }}">
                  Master Data
                </div>
              </a>

              <ul class="menu-sub">
                <li>
                  <a href="{{ route('user.index') }}" class="menu-link {{ Route::is('user.*') ? 'active' : null }}" style="margin-left: 13px">
                    <i class="menu-icon tf-icons bx {{ Route::is('user.*') ? 'bxs-user' : 'bx-user' }}"></i>
                    <div class="mx-2 {{ Route::is('user.*') ? 'active-menu-set' : null }}">
                      Siswa
                    </div>
                  </a>
                </li>
                <li>
                  <a href="layouts-without-navbar.html" class="menu-link" style="margin-left: 13px">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div class="mx-2">Guru</div>
                  </a>
                </li>
                <li>
                  <a href="layouts-container.html" class="menu-link" style="margin-left: 13px">
                    <i class="menu-icon tf-icons bx bx-user"></i>
                    <div class="mx-2">Staff</div>
                  </a>
                </li>
                <li>
                  <a href="layouts-fluid.html" class="menu-link" style="margin-left: 13px">
                    <i class="menu-icon tf-icons bx bx-book"></i>
                    <div class="mx-2">Mata Pelajaran</div>
                  </a>
                </li>
                <li>
                  <a href="layouts-blank.html" class="menu-link" style="margin-left: 13px">
                    <i class="menu-icon tf-icons bx bx-bookmark-alt"></i>
                    <div class="mx-2">Jurusan</div>
                  </a>
                </li>
                <li>
                  <a href="layouts-blank.html" class="menu-link" style="margin-left: 13px">
                    <i class="menu-icon tf-icons bx bx-box"></i>
                    <div class="mx-2">Kelas</div>
                  </a>
                </li>
                <li>
                  <a href="layouts-blank.html" class="menu-link" style="margin-left: 13px">
                    <i class="menu-icon tf-icons bx bx-archive"></i>
                    <div class="mx-2">Ruangan</div>
                  </a>
                </li>
              </ul>
            </li>
            <!-- Master Data -->

            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Settings</span>
            </li>

            <li class="menu-item">
              <a href="{{ route('logout') }}" class="menu-link">
                <i class="bx bx-power-off me-2"></i>
                <div data-i18n="Tables">Logout</div>
              </a>
            </li>

          </ul>
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  Template Admin {{ env('TEMPLATE_ADMIN_VERSION') }}
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="{{ asset('sneat') }}/assets/img/avatars/profile-pic.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3 my-1">
                            <div class="avatar avatar-online">
                              <img src="{{ asset('sneat') }}/assets/img/avatars/profile-pic.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex">
                            <span class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                            <small class="text-muted">{{ auth()->user()->roles === 'wali' ? 'Wali Murid' : (auth()->user()->roles === 'administrator' ? 'Administrator' : 'Undefined') }}</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user me-2"></i>
                        <span class="align-middle">Profile</span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="{{ route('logout') }}">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Logout</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">


          <div class="container-fluid mt-4" style="margin-bottom: -15px">
            @include('flash::message')
          </div>
          @yield('content')

          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{ asset('sneat') }}/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="{{ asset('sneat') }}/assets/vendor/libs/popper/popper.js"></script>
    <script src="{{ asset('sneat') }}/assets/vendor/js/bootstrap.js"></script>
    <script src="{{ asset('sneat') }}/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="{{ asset('sneat') }}/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{ asset('sneat') }}/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="{{ asset('sneat') }}/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="{{ asset('sneat') }}/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
