<!doctype html>
<html lang="en" data-layout="vertical" data-layout-style="default" data-layout-position="fixed" data-topbar="light"
    data-sidebar="dark" data-sidebar-size="lg" data-layout-width="fluid">


<!-- Mirrored from themesbrand.com/velzon/docs/laravel/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Feb 2026 17:20:43 GMT -->

<head>

    <meta charset="utf-8" />
        <title>@yield('title', 'Velzon Laravel Docs')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Velzon Laravel 9 Premium Multipurpose Admin & Dashboard Template Documentation" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="https://themesbrand.com/velzon/docs/assets/images/favicon.ico">
    <!-- Layout config Js -->
    <script src="/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Remix Icon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="/assets/css/icon-fixes.css" rel="stylesheet" type="text/css" />
    <style>
        /* Keep docs sidebar stable even if runtime state switches to detached/twocolumn. */
        html[data-layout="vertical"] .navbar-menu {
            left: 0;
            right: auto;
        }

        html[data-layout="vertical"] .main-content {
            margin-left: 250px;
        }

        @media (max-width: 767.98px) {
            html[data-layout="vertical"] .main-content {
                margin-left: 0;
            }

            html[data-layout="vertical"] .app-menu {
                margin-left: -100%;
            }

            body.vertical-sidebar-enable .app-menu {
                margin-left: 0 !important;
            }
        }
    </style>

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="/assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="/assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="/assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="/assets/images/logo-light.png" alt="" height="17">
                                </span>
                            </a>
                        </div>

                        <button type="button"
                            class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger"
                            id="topnav-hamburger-icon">
                            <span class="hamburger-icon">
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </button>

                        <div class="header-item ms-2">
                            <div class="avatar-sm me-1 me-md-2 flex-shrink-0">
                                <div class="avatar-title bg-white rounded-circle border">
                                    <img src="/assets/images/brand-logos/laravel.png" alt="" height="23">
                                </div>
                            </div>
                            <span class="h5 mb-0">Laravel Docs</span>
                        </div>
                    </div>

                    <div class="d-flex align-items-center">

                        <div class="header-item me-1 me-md-3">
                            <a href="https://1.envato.market/velzon-support" target="_blank" class="btn btn-success"><i
                                    class="ri-lifebuoy-line me-1 align-middle"></i> Support</a>
                        </div>

                        <div class="header-item">
                            <a href="https://1.envato.market/velzon-admin" target="_blank" class="btn btn-primary"><i
                                    class="ri-shopping-basket-2-line me-1 align-middle"></i> Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="/assets/images/logo-dark.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="/assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="/assets/images/logo-light.png" alt="" height="17"> <span
                            class="badge badge-soft-danger fs-14 ms-1">LARAVEL</span>
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div id="scrollbar">
                <div class="container-fluid">

                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span>Menu</span></li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="index">
                                <i class="ri-honour-line"></i> <span>Introduction</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="folder-structure">
                                <i class="ri-folder-2-line"></i> <span>Folder Structure</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="getting-started">
                                <i class="ri-settings-6-line"></i> <span>Getting Started</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#customization" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="customization">
                                <i class="ri-equalizer-line"></i> <span>Customization</span>
                            </a>
                            <div class="collapse menu-dropdown" id="customization">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="css" class="nav-link">CSS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="scss" class="nav-link">SASS</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript" class="nav-link">Javascript</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- end Dashboard Menu -->
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="layout-setup">
                                <i class="ri-code-line"></i> <span>Layout Setup</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="laravel-structure">
                                <i class=" ri-contrast-2-fill"></i> <span>Create New Page</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="laravel-passport">
                                <i class="ri-plug-line"></i> <span>Laravel Passport</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="laravel-acl">
                                <i class="ri-code-box-line"></i> <span>Laravel ACL</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="starter-kit">
                                <i class="ri-rocket-line"></i> <span>Starter Kit vs Full Admin</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="theme-setup">
                                <i class="ri-paint-line"></i> <span>Theme Setup</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarLayouts">
                                <i class="ri-layout-3-line"></i> <span>Layouts</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarLayouts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="vertical" class="nav-link">Vertical</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="horizontal" class="nav-link">Horizontal</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="detached" class="nav-link">Detached</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="two-column" class="nav-link">Two Column</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="hovered" class="nav-link">Hovered</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="semibox" class="nav-link">Semibox</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="multi-language">
                                <i class="ri-global-line"></i> <span>Multi Language</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="dark-mode">
                                <i class="ri-contrast-2-line"></i> <span>Dark Mode</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="rtl">
                                <i class="ri-layout-right-2-line"></i> <span>RTL Version</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="sources">
                                <i class="ri-pantone-line"></i> <span>Sources & Credits</span>
                            </a>
                        </li>

                        <!-- <li class="nav-item">
                        <a class="nav-link menu-link" href="upgrade">
                            <i class="ri-server-line"></i> <span>Upgrade</span>
                        </a>
                    </li> -->

                        <!-- <li class="nav-item">
                        <a class="nav-link menu-link" href="changelog">
                            <i class="ri-draft-line"></i> <span>Change Log</span>
                        </a>
                    </li> -->

                        <!-- <li class="nav-item">
                        <a class="nav-link menu-link" href="github">
                            <i class="ri-github-line"></i> <span>Github Access</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link menu-link" href="">
                            <i class="ri-discuss-line"></i> <span>Suggestions</span>
                        </a>
                    </li>-->

                        <li class="menu-title"><i class="ri-more-fill"></i> <span>Components</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="bootstrap-ui">
                                <i class="ri-pencil-ruler-2-line"></i> <span>Bootstrap UI</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="icons">
                                <i class="ri-compasses-2-line"></i> <span>Icons</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse"
                                role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                                <i class="ri-stack-line"></i> <span>Advance UI</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="sweetalert2" class="nav-link">Sweetalert2</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="sortablejs" class="nav-link">Sortablejs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="simplebar" class="nav-link">Simplebar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="animation" class="nav-link">Aos Animation</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="shepherdjs-tour" class="nav-link">Shepherd Js - Tour</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="swiper-slider" class="nav-link">Swiper Slider</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ratings" class="nav-link">Raterjs - Ratings</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="prismjs-highlight" class="nav-link">Prismjs - Highlight</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="glightbox" class="nav-link">Glightbox</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarForms">
                                <i class="ri-file-list-3-line"></i> <span>Forms</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarForms">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="choices" class="nav-link">Choices</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="flatpickr" class="nav-link"> Flatpickr </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="colorpicker" class="nav-link">Pickr - Colorpicker</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="input-mask" class="nav-link"> Cleavejs - Input Mask</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="multi-js" class="nav-link">Multi Js</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="autocomplete" class="nav-link">Autocomplete</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="input-spin" class="nav-link"> Input Spin </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="nouislider" class="nav-link">Nouislider - Range</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="wizard" class="nav-link">Wizard</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ckeditor" class="nav-link">Ckeditor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="quilljs" class="nav-link">Quilljs Editor</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="dropzone" class="nav-link">Dropzone - File Uploads</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="filepond" class="nav-link">Filepond - File Uploads</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="select2" class="nav-link">Select 2</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarTables">
                                <i class="ri-layout-grid-line"></i> <span>Tables</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarTables">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="gridjs" class="nav-link">Grid Js</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="listjs" class="nav-link">List Js</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="datatables" class="nav-link">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarCharts" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarCharts">
                                <i class="ri-pie-chart-line"></i> <span>Charts</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarCharts">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="apexcharts" class="nav-link"> Apexcharts </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="chartjs" class="nav-link"> Chartjs </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="echarts" class="nav-link"> Echarts </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse" role="button"
                                aria-expanded="false" aria-controls="sidebarMaps">
                                <i class="ri-map-pin-line"></i> <span>Maps</span>
                            </a>
                            <div class="collapse menu-dropdown" id="sidebarMaps">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="google-maps" class="nav-link">
                                            Google
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="jsvectormap" class="nav-link">
                                            Jsvectormap
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="leaflet" class="nav-link">
                                            Leaflet
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
                <!-- Sidebar -->
            </div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
                <div class="main-content">

            @yield('content')

<footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>document.write(new Date().getFullYear())</script> © Velzon.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Design & Develop by Themesbrand
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!-- JAVASCRIPT -->
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/libs/node-waves/waves.min.js"></script>
    <script src="/assets/libs/feather-icons/feather.min.js"></script>
    <script src="/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="/assets/libs/prismjs/prism.js"></script>
    <script src="/assets/js/sidebar-focus.js"></script>
    @yield('scripts')

    <script>
        (function () {
            var root = document.documentElement;
            var stable = {
                "data-layout": "vertical",
                "data-layout-style": "default",
                "data-sidebar-size": "lg",
                "data-layout-position": "fixed",
                "data-layout-width": "fluid"
            };

            Object.keys(stable).forEach(function (key) {
                root.setAttribute(key, stable[key]);
            });

            try {
                Object.keys(stable).forEach(function (key) {
                    sessionStorage.setItem(key, stable[key]);
                });

                var raw = sessionStorage.getItem("defaultAttribute");
                if (raw) {
                    var attrs = JSON.parse(raw);
                    Object.keys(stable).forEach(function (key) {
                        attrs[key] = stable[key];
                    });
                    sessionStorage.setItem("defaultAttribute", JSON.stringify(attrs));
                }
            } catch (e) {
                // Ignore session storage issues and continue with inline attributes.
            }
        })();
    </script>

    <!-- App js -->
    <script src="/assets/js/app.js"></script>

</body>


<!-- Mirrored from themesbrand.com/velzon/docs/laravel/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Feb 2026 17:21:03 GMT -->

</html>









