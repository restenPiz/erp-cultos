@role('member')
    {{-- Inicio da pagina principal do membro --}}

    <!doctype html>
    <html lang="en" data-layout="vertical" data-layout-style="detached" data-layout-position="fixed" data-topbar="light"
        data-sidebar="dark" data-sidebar-size="lg" data-layout-width="fluid">

    <head>

        <meta charset="utf-8" />
        <title>Detached Layout | Velzon - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Layout config Js -->
        <script src="assets/js/layout.js"></script>
        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />

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
                                <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-sm.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-dark.png" alt="" height="17">
                                    </span>
                                </a>

                                <a href="index.html" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="assets/images/logo-sm.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/logo-light.png" alt="" height="17">
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

                            <!-- App Search-->
                            <form class="app-search d-none d-md-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Search..." autocomplete="off"
                                        id="search-options" value="">
                                    <span class="mdi mdi-magnify search-widget-icon"></span>
                                    <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none"
                                        id="search-close-options"></span>
                                </div>
                                <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                                    <div data-simplebar style="max-height: 320px;">
                                        <!-- item-->
                                        <div class="dropdown-header">
                                            <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                                        </div>

                                        <div class="dropdown-item bg-transparent text-wrap">
                                            <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">how to
                                                setup <i class="mdi mdi-magnify ms-1"></i></a>
                                            <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons
                                                <i class="mdi mdi-magnify ms-1"></i></a>
                                        </div>
                                        <!-- item-->
                                        <div class="dropdown-header mt-2">
                                            <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                                        </div>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                                            <span>Analytics Dashboard</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                                            <span>Help Center</span>
                                        </a>

                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                                            <span>My account settings</span>
                                        </a>

                                        <!-- item-->
                                        <div class="dropdown-header mt-2">
                                            <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                                        </div>

                                        <div class="notification-list">
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-2.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="m-0">Angela Bernier</h6>
                                                        <span class="fs-11 mb-0 text-muted">Manager</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-3.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="m-0">David Grasso</h6>
                                                        <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                                    </div>
                                                </div>
                                            </a>
                                            <!-- item -->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                                                <div class="d-flex">
                                                    <img src="assets/images/users/avatar-5.jpg"
                                                        class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                    <div class="flex-1">
                                                        <h6 class="m-0">Mike Bunch</h6>
                                                        <span class="fs-11 mb-0 text-muted">React Developer</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="text-center pt-3 pb-1">
                                        <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All
                                            Results <i class="ri-arrow-right-line ms-1"></i></a>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="d-flex align-items-center">

                            <div class="dropdown d-md-none topbar-head-dropdown header-item">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                    id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="bx bx-search fs-22"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                    aria-labelledby="page-header-search-dropdown">
                                    <form class="p-3">
                                        <div class="form-group m-0">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Search ..."
                                                    aria-label="Recipient's username">
                                                <button class="btn btn-primary" type="submit"><i
                                                        class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            
                            <div class="ms-1 header-item d-none d-sm-flex">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                    data-toggle="fullscreen">
                                    <i class='bx bx-fullscreen fs-22'></i>
                                </button>
                            </div>

                            <div class="ms-1 header-item d-none d-sm-flex">
                                <button type="button"
                                    class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode">
                                    <i class='bx bx-moon fs-22'></i>
                                </button>
                            </div>

                            <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-bell fs-22'></i>
                                    <span
                                        class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span
                                            class="visually-hidden">unread messages</span></span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                    aria-labelledby="page-header-notifications-dropdown">

                                    <div class="dropdown-head bg-primary bg-pattern rounded-top">
                                        <div class="p-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                                                </div>
                                                <div class="col-auto dropdown-tabs">
                                                    <span class="badge badge-soft-light fs-13"> 4 New</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="px-2 pt-2">
                                            <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom"
                                                data-dropdown-tabs="true" id="notificationItemsTab" role="tablist">
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab"
                                                        role="tab" aria-selected="true">
                                                        All (4)
                                                    </a>
                                                </li>
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#messages-tab"
                                                        role="tab" aria-selected="false">
                                                        Messages
                                                    </a>
                                                </li>
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab"
                                                        role="tab" aria-selected="false">
                                                        Alerts
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="tab-content position-relative" id="notificationItemsTabContent">
                                        <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab"
                                            role="tabpanel">
                                            <div data-simplebar style="max-height: 300px;" class="pe-2">
                                                <div
                                                    class="text-reset notification-item d-block dropdown-item position-relative">
                                                    <div class="d-flex">
                                                        <div class="avatar-xs me-3">
                                                            <span
                                                                class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                                                                <i class="bx bx-badge-check"></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b> author
                                                                    Graphic
                                                                    Optimization <span class="text-secondary">reward</span>
                                                                    is
                                                                    ready!
                                                                </h6>
                                                            </a>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> Just 30 sec
                                                                    ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="all-notification-check01">
                                                                <label class="form-check-label"
                                                                    for="all-notification-check01"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-reset notification-item d-block dropdown-item position-relative">
                                                    <div class="d-flex">
                                                        <img src="assets/images/users/avatar-2.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">Answered to your comment on the cash flow
                                                                    forecast's
                                                                    graph 🔔.</p>
                                                            </div>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 48 min
                                                                    ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="all-notification-check02">
                                                                <label class="form-check-label"
                                                                    for="all-notification-check02"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-reset notification-item d-block dropdown-item position-relative">
                                                    <div class="d-flex">
                                                        <div class="avatar-xs me-3">
                                                            <span
                                                                class="avatar-title bg-soft-danger text-danger rounded-circle fs-16">
                                                                <i class='bx bx-message-square-dots'></i>
                                                            </span>
                                                        </div>
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-2 fs-13 lh-base">You have received <b
                                                                        class="text-success">20</b> new messages in the
                                                                    conversation
                                                                </h6>
                                                            </a>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 2 hrs
                                                                    ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="all-notification-check03">
                                                                <label class="form-check-label"
                                                                    for="all-notification-check03"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div
                                                    class="text-reset notification-item d-block dropdown-item position-relative">
                                                    <div class="d-flex">
                                                        <img src="assets/images/users/avatar-8.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">We talked about a project on linkedin.
                                                                </p>
                                                            </div>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 4 hrs
                                                                    ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="all-notification-check04">
                                                                <label class="form-check-label"
                                                                    for="all-notification-check04"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="my-3 text-center view-all">
                                                    <button type="button"
                                                        class="btn btn-soft-success waves-effect waves-light">View
                                                        All Notifications <i
                                                            class="ri-arrow-right-line align-middle"></i></button>
                                                </div>
                                            </div>

                                        </div>

                                        <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel"
                                            aria-labelledby="messages-tab">
                                            <div data-simplebar style="max-height: 300px;" class="pe-2">
                                                <div class="text-reset notification-item d-block dropdown-item">
                                                    <div class="d-flex">
                                                        <img src="assets/images/users/avatar-3.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">We talked about a project on linkedin.
                                                                </p>
                                                            </div>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 30 min
                                                                    ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="messages-notification-check01">
                                                                <label class="form-check-label"
                                                                    for="messages-notification-check01"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="text-reset notification-item d-block dropdown-item">
                                                    <div class="d-flex">
                                                        <img src="assets/images/users/avatar-2.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="#!" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">Answered to your comment on the cash flow
                                                                    forecast's
                                                                    graph 🔔.</p>
                                                            </div>
                                                            <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                                                <span><i class="mdi mdi-clock-outline"></i> 2 hrs
                                                                    ago</span>
                                                            </p>
                                                        </div>
                                                        <div class="px-2 fs-15">
                                                            <div class="form-check notification-check">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="messages-notification-check02">
                                                                <label class="form-check-label"
                                                                    for="messages-notification-check02"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="my-3 text-center view-all">
                                                    <button type="button"
                                                        class="btn btn-soft-success waves-effect waves-light">View
                                                        All Messages <i
                                                            class="ri-arrow-right-line align-middle"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel"
                                            aria-labelledby="alerts-tab"></div>

                                        <div class="notification-actions" id="notification-actions">
                                            <div class="d-flex text-muted justify-content-center">
                                                Select <div id="select-content" class="text-body fw-semibold px-1">0</div>
                                                Result <button type="button" class="btn btn-link link-danger p-0 ms-3"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#removeNotificationModal">Remove</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dropdown ms-sm-3 header-item topbar-user">
                                <button type="button" class="btn" id="page-header-user-dropdown"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="d-flex align-items-center">
                                        <img class="rounded-circle header-profile-user"
                                            src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                        <span class="text-start ms-xl-2">
                                            <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{Auth::user()->name}}</span>
                                            <span
                                                class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">{{Auth::user()->userType}}</span>
                                        </span>
                                    </span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <!-- item-->
                                    <h6 class="dropdown-header">Bem Vindo {{ Auth::user()->name }}!</h6>
                                <a class="dropdown-item" href="pages-profile.html"><i
                                        class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Perfil</span></a>
                                <a class="dropdown-item" href="pages-faqs.html"><i
                                        class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Ajuda</span></a>
                                <div class="dropdown-divider"></div>
                                {{-- <a class="dropdown-item" href="pages-profile-settings.html"><span
                                        class="badge bg-soft-success text-success mt-1 float-end">New</span><i
                                        class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Settings</span></a> --}}
                                <a class="dropdown-item" href="auth-lockscreen-basic.html"><i
                                        class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Lock screen</span></a>
                                <a class="dropdown-item" href="{{ route('logout') }}"><i
                                        class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle" data-key="t-logout">Logout</span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- removeNotificationModal -->
            <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                                id="NotificationModalbtn-close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mt-2 text-center">
                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                    colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px">
                                </lord-icon>
                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                    <h4>Are you sure ?</h4>
                                    <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
                                </div>
                            </div>
                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete
                                    It!</button>
                            </div>
                        </div>

                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!-- ========== App Menu ========== -->
            <div class="app-menu navbar-menu">
                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark.png" alt="" height="17">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <a href="index.html" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="assets/images/logo-sm.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-light.png" alt="" height="17">
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                        id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>

                <div id="scrollbar">
                    <div class="container-fluid">

                        <div id="two-column-menu">
                        </div>
                        <ul class="navbar-nav" id="navbar-nav">
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                                    <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarDashboards">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">
                                                Analytics </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-crm.html" class="nav-link" data-key="t-crm"> CRM </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="index.html" class="nav-link" data-key="t-ecommerce"> Ecommerce </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-crypto.html" class="nav-link" data-key="t-crypto"> Crypto
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-projects.html" class="nav-link" data-key="t-projects">
                                                Projects </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-nft.html" class="nav-link" data-key="t-nft"> NFT</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="dashboard-job.html" class="nav-link"><span
                                                    data-key="t-job">Job</span> <span class="badge badge-pill bg-success"
                                                    data-key="t-new">New</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li> <!-- end Dashboard Menu -->
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarApps">
                                    <i class="ri-apps-2-line"></i> <span data-key="t-apps">Apps</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarApps">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-calendar.html" class="nav-link" data-key="t-calendar"> Calendar
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-chat.html" class="nav-link" data-key="t-chat"> Chat </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarEmail" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarEmail"
                                                data-key="t-email">
                                                Email
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarEmail">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-mailbox.html" class="nav-link"
                                                            data-key="t-mailbox"> Mailbox </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#sidebaremailTemplates" class="nav-link"
                                                            data-bs-toggle="collapse" role="button"
                                                            aria-expanded="false" aria-controls="sidebaremailTemplates"
                                                            data-key="t-email-templates">
                                                            Email Templates
                                                        </a>
                                                        <div class="collapse menu-dropdown" id="sidebaremailTemplates">
                                                            <ul class="nav nav-sm flex-column">
                                                                <li class="nav-item">
                                                                    <a href="apps-email-basic.html" class="nav-link"
                                                                        data-key="t-basic-action"> Basic Action </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="apps-email-ecommerce.html" class="nav-link"
                                                                        data-key="t-ecommerce-action"> Ecommerce Action
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarEcommerce" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarEcommerce"
                                                data-key="t-ecommerce">
                                                Ecommerce
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarEcommerce">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-products.html" class="nav-link"
                                                            data-key="t-products"> Products </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-product-details.html" class="nav-link"
                                                            data-key="t-product-Details"> Product Details </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-add-product.html" class="nav-link"
                                                            data-key="t-create-product"> Create Product </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-orders.html" class="nav-link"
                                                            data-key="t-orders">
                                                            Orders </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-order-details.html" class="nav-link"
                                                            data-key="t-order-details"> Order Details </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-customers.html" class="nav-link"
                                                            data-key="t-customers"> Customers </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-cart.html" class="nav-link"
                                                            data-key="t-shopping-cart"> Shopping Cart </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-checkout.html" class="nav-link"
                                                            data-key="t-checkout"> Checkout </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-sellers.html" class="nav-link"
                                                            data-key="t-sellers">
                                                            Sellers </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-ecommerce-seller-details.html" class="nav-link"
                                                            data-key="t-sellers-details"> Seller Details </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarProjects" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarProjects"
                                                data-key="t-projects">
                                                Projects
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarProjects">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-projects-list.html" class="nav-link"
                                                            data-key="t-list"> List
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-projects-overview.html" class="nav-link"
                                                            data-key="t-overview"> Overview </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-projects-create.html" class="nav-link"
                                                            data-key="t-create-project"> Create Project </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarTasks" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarTasks"
                                                data-key="t-tasks"> Tasks
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarTasks">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-tasks-kanban.html" class="nav-link"
                                                            data-key="t-kanbanboard">
                                                            Kanban Board </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-tasks-list-view.html" class="nav-link"
                                                            data-key="t-list-view">
                                                            List View </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-tasks-details.html" class="nav-link"
                                                            data-key="t-task-details"> Task Details </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCRM" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarCRM"
                                                data-key="t-crm"> CRM
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCRM">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-crm-contacts.html" class="nav-link"
                                                            data-key="t-contacts">
                                                            Contacts </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-crm-companies.html" class="nav-link"
                                                            data-key="t-companies">
                                                            Companies </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-crm-deals.html" class="nav-link"
                                                            data-key="t-deals"> Deals
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-crm-leads.html" class="nav-link"
                                                            data-key="t-leads"> Leads
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCrypto" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarCrypto"
                                                data-key="t-crypto"> Crypto
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarCrypto">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-crypto-transactions.html" class="nav-link"
                                                            data-key="t-transactions"> Transactions </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-crypto-buy-sell.html" class="nav-link"
                                                            data-key="t-buy-sell">
                                                            Buy & Sell </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-crypto-orders.html" class="nav-link"
                                                            data-key="t-orders">
                                                            Orders </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-crypto-wallet.html" class="nav-link"
                                                            data-key="t-my-wallet">
                                                            My Wallet </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-crypto-ico.html" class="nav-link"
                                                            data-key="t-ico-list"> ICO
                                                            List </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-crypto-kyc.html" class="nav-link"
                                                            data-key="t-kyc-application"> KYC Application </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarInvoices" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarInvoices"
                                                data-key="t-invoices">
                                                Invoices
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarInvoices">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-invoices-list.html" class="nav-link"
                                                            data-key="t-list-view">
                                                            List View </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-invoices-details.html" class="nav-link"
                                                            data-key="t-details">
                                                            Details </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-invoices-create.html" class="nav-link"
                                                            data-key="t-create-invoice"> Create Invoice </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarTickets" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarTickets"
                                                data-key="t-supprt-tickets">
                                                Support Tickets
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarTickets">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-tickets-list.html" class="nav-link"
                                                            data-key="t-list-view">
                                                            List View </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-tickets-details.html" class="nav-link"
                                                            data-key="t-ticket-details"> Ticket Details </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarnft" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarnft"
                                                data-key="t-nft-marketplace">
                                                NFT Marketplace
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarnft">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-nft-marketplace.html" class="nav-link"
                                                            data-key="t-marketplace"> Marketplace </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-nft-explore.html" class="nav-link"
                                                            data-key="t-explore-now"> Explore Now </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-nft-auction.html" class="nav-link"
                                                            data-key="t-live-auction"> Live Auction </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-nft-item-details.html" class="nav-link"
                                                            data-key="t-item-details"> Item Details </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-nft-collections.html" class="nav-link"
                                                            data-key="t-collections"> Collections </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-nft-creators.html" class="nav-link"
                                                            data-key="t-creators"> Creators </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-nft-ranking.html" class="nav-link"
                                                            data-key="t-ranking"> Ranking </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-nft-wallet.html" class="nav-link"
                                                            data-key="t-wallet-connect"> Wallet Connect </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-nft-create.html" class="nav-link"
                                                            data-key="t-create-nft"> Create NFT </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-file-manager.html" class="nav-link"> <span
                                                    data-key="t-file-manager">File Manager</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-todo.html" class="nav-link"> <span data-key="t-to-do">To
                                                    Do</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarjobs" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarjobs">
                                                <span data-key="t-jobs">Jobs</span> <span
                                                    class="badge badge-pill bg-success" data-key="t-new">New</span></a>
                                            <div class="collapse menu-dropdown" id="sidebarjobs">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-job-statistics.html" class="nav-link"
                                                            data-key="t-candidate-list"> Statistics </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#sidebarJoblists" class="nav-link"
                                                            data-bs-toggle="collapse" role="button"
                                                            aria-expanded="false" aria-controls="sidebarJoblists"
                                                            data-key="t-job-lists">
                                                            Job Lists
                                                        </a>
                                                        <div class="collapse menu-dropdown" id="sidebarJoblists">
                                                            <ul class="nav nav-sm flex-column">
                                                                <li class="nav-item">
                                                                    <a href="apps-job-lists.html" class="nav-link"
                                                                        data-key="t-list"> List
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="apps-job-grid-lists.html" class="nav-link"
                                                                        data-key="t-grid"> Grid </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="apps-job-details.html" class="nav-link"
                                                                        data-key="t-overview"> Overview</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#sidebarCandidatelists" class="nav-link"
                                                            data-bs-toggle="collapse" role="button"
                                                            aria-expanded="false" aria-controls="sidebarCandidatelists"
                                                            data-key="t-candidate-lists">
                                                            Candidate Lists
                                                        </a>
                                                        <div class="collapse menu-dropdown" id="sidebarCandidatelists">
                                                            <ul class="nav nav-sm flex-column">
                                                                <li class="nav-item">
                                                                    <a href="apps-job-candidate-lists.html"
                                                                        class="nav-link" data-key="t-list-view"> List
                                                                        View
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="apps-job-candidate-grid.html"
                                                                        class="nav-link" data-key="t-grid-view"> Grid
                                                                        View</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-application.html" class="nav-link"
                                                            data-key="t-application"> Application </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-new.html" class="nav-link"
                                                            data-key="t-new-job"> New Job </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-companies-lists.html" class="nav-link"
                                                            data-key="t-companies-list"> Companies List </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-categories.html" class="nav-link"
                                                            data-key="t-job-categories"> Job Categories</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-api-key.html" class="nav-link"> <span
                                                    data-key="t-api-key">API Key</span> <span
                                                    class="badge badge-pill bg-success" data-key="t-new">New</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                                    <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Layouts</span> <span
                                        class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLayouts">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="layouts-horizontal.html" target="_blank" class="nav-link"
                                                data-key="t-horizontal">Horizontal</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="layouts-detached.html" target="_blank" class="nav-link"
                                                data-key="t-detached">Detached</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="layouts-two-column.html" target="_blank" class="nav-link"
                                                data-key="t-two-column">Two Column</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="layouts-vertical-hovered.html" target="_blank" class="nav-link"
                                                data-key="t-hovered">Hovered</a>
                                        </li>
                                    </ul>
                                </div>
                            </li> <!-- end Dashboard Menu -->

                            <li class="menu-title"><i class="ri-more-fill"></i> <span data-key="t-pages">Pages</span>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarAuth">
                                    <i class="ri-account-circle-line"></i> <span
                                        data-key="t-authentication">Authentication</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAuth">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#sidebarSignIn" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarSignIn"
                                                data-key="t-signin"> Sign In
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarSignIn">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-signin-basic.html" class="nav-link"
                                                            data-key="t-basic"> Basic
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-signin-cover.html" class="nav-link"
                                                            data-key="t-cover"> Cover
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarSignUp" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarSignUp"
                                                data-key="t-signup"> Sign Up
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarSignUp">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-signup-basic.html" class="nav-link"
                                                            data-key="t-basic"> Basic
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-signup-cover.html" class="nav-link"
                                                            data-key="t-cover"> Cover
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#sidebarResetPass" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarResetPass"
                                                data-key="t-password-reset">
                                                Password Reset
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarResetPass">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-pass-reset-basic.html" class="nav-link"
                                                            data-key="t-basic">
                                                            Basic </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-pass-reset-cover.html" class="nav-link"
                                                            data-key="t-cover">
                                                            Cover </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#sidebarchangePass" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarchangePass"
                                                data-key="t-password-create">
                                                Password Create
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarchangePass">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-pass-change-basic.html" class="nav-link"
                                                            data-key="t-basic">
                                                            Basic </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-pass-change-cover.html" class="nav-link"
                                                            data-key="t-cover">
                                                            Cover </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#sidebarLockScreen" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarLockScreen"
                                                data-key="t-lock-screen">
                                                Lock Screen
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarLockScreen">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-lockscreen-basic.html" class="nav-link"
                                                            data-key="t-basic">
                                                            Basic </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-lockscreen-cover.html" class="nav-link"
                                                            data-key="t-cover">
                                                            Cover </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a href="#sidebarLogout" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarLogout"
                                                data-key="t-logout"> Logout
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarLogout">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-logout-basic.html" class="nav-link"
                                                            data-key="t-basic"> Basic
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-logout-cover.html" class="nav-link"
                                                            data-key="t-cover"> Cover
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarSuccessMsg" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarSuccessMsg"
                                                data-key="t-success-message"> Success Message
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarSuccessMsg">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-success-msg-basic.html" class="nav-link"
                                                            data-key="t-basic">
                                                            Basic </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-success-msg-cover.html" class="nav-link"
                                                            data-key="t-cover">
                                                            Cover </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarTwoStep" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarTwoStep"
                                                data-key="t-two-step-verification"> Two Step Verification
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarTwoStep">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-twostep-basic.html" class="nav-link"
                                                            data-key="t-basic"> Basic
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-twostep-cover.html" class="nav-link"
                                                            data-key="t-cover"> Cover
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarErrors" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarErrors"
                                                data-key="t-errors"> Errors
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarErrors">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="auth-404-basic.html" class="nav-link"
                                                            data-key="t-404-basic"> 404
                                                            Basic </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-404-cover.html" class="nav-link"
                                                            data-key="t-404-cover"> 404
                                                            Cover </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-404-alt.html" class="nav-link"
                                                            data-key="t-404-alt"> 404 Alt
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-500.html" class="nav-link" data-key="t-500"> 500
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="auth-offline.html" class="nav-link"
                                                            data-key="t-offline-page"> Offline Page </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarPages">
                                    <i class="ri-pages-line"></i> <span data-key="t-pages">Pages</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarPages">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="pages-starter.html" class="nav-link" data-key="t-starter">
                                                Starter </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarProfile" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarProfile"
                                                data-key="t-profile"> Profile
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarProfile">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="pages-profile.html" class="nav-link"
                                                            data-key="t-simple-page">
                                                            Simple Page </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="pages-profile-settings.html" class="nav-link"
                                                            data-key="t-settings"> Settings </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-team.html" class="nav-link" data-key="t-team"> Team </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-timeline.html" class="nav-link" data-key="t-timeline">
                                                Timeline </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-faqs.html" class="nav-link" data-key="t-faqs"> FAQs </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-pricing.html" class="nav-link" data-key="t-pricing">
                                                Pricing </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-gallery.html" class="nav-link" data-key="t-gallery">
                                                Gallery </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-maintenance.html" class="nav-link"
                                                data-key="t-maintenance"> Maintenance
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-coming-soon.html" class="nav-link"
                                                data-key="t-coming-soon"> Coming Soon
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-sitemap.html" class="nav-link" data-key="t-sitemap">
                                                Sitemap </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-search-results.html" class="nav-link"
                                                data-key="t-search-results"> Search Results </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-privacy-policy.html" class="nav-link"><span
                                                    data-key="t-privacy-policy">Privacy Policy</span> <span
                                                    class="badge badge-pill bg-success" data-key="t-new">New</span></a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-term-conditions.html" class="nav-link"><span
                                                    data-key="t-term-conditions">Term & Conditions</span> <span
                                                    class="badge badge-pill bg-success" data-key="t-new">New</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarLanding" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarLanding">
                                    <i class="ri-rocket-line"></i> <span data-key="t-landing">Landing</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarLanding">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="landing.html" class="nav-link" data-key="t-one-page"> One Page
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="nft-landing.html" class="nav-link" data-key="t-nft-landing"> NFT
                                                Landing </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="job-landing.html" class="nav-link"><span
                                                    data-key="t-job">Job</span> <span
                                                    class="badge badge-pill bg-success" data-key="t-new">New</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="menu-title"><i class="ri-more-fill"></i> <span
                                    data-key="t-components">Components</span></li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarUI">
                                    <i class="ri-pencil-ruler-2-line"></i> <span data-key="t-base-ui">Base UI</span>
                                </a>
                                <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="ui-alerts.html" class="nav-link"
                                                        data-key="t-alerts">Alerts</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-badges.html" class="nav-link"
                                                        data-key="t-badges">Badges</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-buttons.html" class="nav-link"
                                                        data-key="t-buttons">Buttons</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-colors.html" class="nav-link"
                                                        data-key="t-colors">Colors</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-cards.html" class="nav-link"
                                                        data-key="t-cards">Cards</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-carousel.html" class="nav-link"
                                                        data-key="t-carousel">Carousel</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-dropdowns.html" class="nav-link"
                                                        data-key="t-dropdowns">Dropdowns</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-grid.html" class="nav-link" data-key="t-grid">Grid</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="ui-images.html" class="nav-link"
                                                        data-key="t-images">Images</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-tabs.html" class="nav-link" data-key="t-tabs">Tabs</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-accordions.html" class="nav-link"
                                                        data-key="t-accordion-collapse">Accordion & Collapse</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-modals.html" class="nav-link"
                                                        data-key="t-modals">Modals</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-offcanvas.html" class="nav-link"
                                                        data-key="t-offcanvas">Offcanvas</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-placeholders.html" class="nav-link"
                                                        data-key="t-placeholders">Placeholders</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-progress.html" class="nav-link"
                                                        data-key="t-progress">Progress</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-notifications.html" class="nav-link"
                                                        data-key="t-notifications">Notifications</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="ui-media.html" class="nav-link"
                                                        data-key="t-media-object">Media
                                                        object</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-embed-video.html" class="nav-link"
                                                        data-key="t-embed-video">Embed
                                                        Video</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-typography.html" class="nav-link"
                                                        data-key="t-typography">Typography</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-lists.html" class="nav-link"
                                                        data-key="t-lists">Lists</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-general.html" class="nav-link"
                                                        data-key="t-general">General</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-ribbons.html" class="nav-link"
                                                        data-key="t-ribbons">Ribbons</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="ui-utilities.html" class="nav-link"
                                                        data-key="t-utilities">Utilities</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                                    <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Advance UI</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="advance-ui-sweetalerts.html" class="nav-link"
                                                data-key="t-sweet-alerts">Sweet
                                                Alerts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="advance-ui-nestable.html" class="nav-link"
                                                data-key="t-nestable-list">Nestable
                                                List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="advance-ui-scrollbar.html" class="nav-link"
                                                data-key="t-scrollbar">Scrollbar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="advance-ui-animation.html" class="nav-link"
                                                data-key="t-animation">Animation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="advance-ui-tour.html" class="nav-link" data-key="t-tour">Tour</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="advance-ui-swiper.html" class="nav-link"
                                                data-key="t-swiper-slider">Swiper
                                                Slider</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="advance-ui-ratings.html" class="nav-link"
                                                data-key="t-ratings">Ratings</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="advance-ui-highlight.html" class="nav-link"
                                                data-key="t-highlight">Highlight</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="advance-ui-scrollspy.html" class="nav-link"
                                                data-key="t-scrollSpy">ScrollSpy</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="widgets.html">
                                    <i class="ri-honour-line"></i> <span data-key="t-widgets">Widgets</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarForms">
                                    <i class="ri-file-list-3-line"></i> <span data-key="t-forms">Forms</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarForms">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="forms-elements.html" class="nav-link"
                                                data-key="t-basic-elements">Basic
                                                Elements</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="forms-select.html" class="nav-link" data-key="t-form-select">
                                                Form Select </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="forms-checkboxs-radios.html" class="nav-link"
                                                data-key="t-checkboxs-radios">Checkboxs & Radios</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="forms-pickers.html" class="nav-link" data-key="t-pickers">
                                                Pickers </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="forms-masks.html" class="nav-link" data-key="t-input-masks">Input
                                                Masks</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="forms-advanced.html" class="nav-link"
                                                data-key="t-advanced">Advanced</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="forms-range-sliders.html" class="nav-link"
                                                data-key="t-range-slider"> Range
                                                Slider </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="forms-validation.html" class="nav-link"
                                                data-key="t-validation">Validation</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="forms-wizard.html" class="nav-link"
                                                data-key="t-wizard">Wizard</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="forms-editors.html" class="nav-link"
                                                data-key="t-editors">Editors</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="forms-file-uploads.html" class="nav-link"
                                                data-key="t-file-uploads">File
                                                Uploads</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="forms-layouts.html" class="nav-link"
                                                data-key="t-form-layouts">Form Layouts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="forms-select2.html" class="nav-link"
                                                data-key="t-select2">Select2</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarTables">
                                    <i class="ri-layout-grid-line"></i> <span data-key="t-tables">Tables</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarTables">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="tables-basic.html" class="nav-link"
                                                data-key="t-basic-tables">Basic Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="tables-gridjs.html" class="nav-link" data-key="t-grid-js">Grid
                                                Js</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="tables-listjs.html" class="nav-link" data-key="t-list-js">List
                                                Js</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="tables-datatables.html" class="nav-link"
                                                data-key="t-datatables">Datatables</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarCharts" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarCharts">
                                    <i class="ri-pie-chart-line"></i> <span data-key="t-charts">Charts</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarCharts">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#sidebarApexcharts" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarApexcharts"
                                                data-key="t-apexcharts">
                                                Apexcharts
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarApexcharts">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="charts-apex-line.html" class="nav-link"
                                                            data-key="t-line"> Line
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="charts-apex-area.html" class="nav-link"
                                                            data-key="t-area"> Area
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="charts-apex-column.html" class="nav-link"
                                                            data-key="t-column">
                                                            Column </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="charts-apex-bar.html" class="nav-link"
                                                            data-key="t-bar"> Bar </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="charts-apex-mixed.html" class="nav-link"
                                                            data-key="t-mixed"> Mixed
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="charts-apex-timeline.html" class="nav-link"
                                                            data-key="t-timeline">
                                                            Timeline </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="charts-apex-candlestick.html" class="nav-link"
                                                            data-key="t-candlstick"> Candlstick </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="charts-apex-boxplot.html" class="nav-link"
                                                            data-key="t-boxplot">
                                                            Boxplot </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="charts-apex-bubble.html" class="nav-link"
                                                            data-key="t-bubble">
                                                            Bubble </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="charts-apex-scatter.html" class="nav-link"
                                                            data-key="t-scatter">
                                                            Scatter </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="charts-apex-heatmap.html" class="nav-link"
                                                            data-key="t-heatmap">
                                                            Heatmap </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="charts-apex-treemap.html" class="nav-link"
                                                            data-key="t-treemap">
                                                            Treemap </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="charts-apex-pie.html" class="nav-link"
                                                            data-key="t-pie"> Pie </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="charts-apex-radialbar.html" class="nav-link"
                                                            data-key="t-radialbar"> Radialbar </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="charts-apex-radar.html" class="nav-link"
                                                            data-key="t-radar"> Radar
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="charts-apex-polar.html" class="nav-link"
                                                            data-key="t-polar-area">
                                                            Polar Area </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-chartjs.html" class="nav-link" data-key="t-chartjs">
                                                Chartjs </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-echarts.html" class="nav-link" data-key="t-echarts">
                                                Echarts </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarIcons">
                                    <i class="ri-compasses-2-line"></i> <span data-key="t-icons">Icons</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarIcons">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="icons-remix.html" class="nav-link" data-key="t-remix">Remix</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="icons-boxicons.html" class="nav-link"
                                                data-key="t-boxicons">Boxicons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="icons-materialdesign.html" class="nav-link"
                                                data-key="t-material-design">Material Design</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="icons-lineawesome.html" class="nav-link"
                                                data-key="t-line-awesome">Line
                                                Awesome</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="icons-feather.html" class="nav-link"
                                                data-key="t-feather">Feather</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="icons-crypto.html" class="nav-link"> <span
                                                    data-key="t-crypto-svg">Crypto SVG</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarMaps" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarMaps">
                                    <i class="ri-map-pin-line"></i> <span data-key="t-maps">Maps</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarMaps">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="maps-google.html" class="nav-link" data-key="t-google">
                                                Google
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="maps-vector.html" class="nav-link" data-key="t-vector">
                                                Vector
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="maps-leaflet.html" class="nav-link" data-key="t-leaflet">
                                                Leaflet
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                                    <i class="ri-share-line"></i> <span data-key="t-multi-level">Multi Level</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarMultilevel">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-level-1.1"> Level 1.1 </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarAccount" class="nav-link" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarAccount"
                                                data-key="t-level-1.2"> Level
                                                1.2
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarAccount">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-2.1">
                                                            Level 2.1 </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#sidebarCrm" class="nav-link"
                                                            data-bs-toggle="collapse" role="button"
                                                            aria-expanded="false" aria-controls="sidebarCrm"
                                                            data-key="t-level-2.2"> Level 2.2
                                                        </a>
                                                        <div class="collapse menu-dropdown" id="sidebarCrm">
                                                            <ul class="nav nav-sm flex-column">
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link"
                                                                        data-key="t-level-3.1"> Level 3.1
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="#" class="nav-link"
                                                                        data-key="t-level-3.2"> Level 3.2
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>

                <div class="sidebar-background"></div>
            </div>
            <!-- Left Sidebar End -->
            <!-- Vertical Overlay-->
            <div class="vertical-overlay"></div>

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">


                        @yield('content')

                    </div>
                </div>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
        <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
            <i class="ri-arrow-up-line"></i>
        </button>
        <!--end back-to-top-->

        <!-- JAVASCRIPT -->
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
        <script src="assets/js/plugins.js"></script>

        <!-- apexcharts -->
        <script src="assets/libs/apexcharts/apexcharts.min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/js/pages/dashboard-crm.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
    </body>
    </html>

    {{-- Fim da pagina principal do membro --}}
@endrole
