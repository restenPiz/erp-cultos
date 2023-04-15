<!doctype html>
<html lang="pt" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>Erp-Cultos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="../assets/images/favicon.ico">

    <link href="..assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Layout config Js -->
    <script src="../assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="../assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="../assets/css/custom.min.css" rel="stylesheet" type="text/css" />

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
                                    <img src="../assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="../assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="../assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="../assets/images/logo-light.png" alt="" height="17">
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

                        @role('admin')
                            {{-- Inicio da parte que vai mostrar as notificacoes --}}

                            <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                                <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown"
                                    data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                    <i class='bx bx-bell fs-22'></i>
                                    {{--<span
                                        class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">{{ $total }}<span
                                            class="visually-hidden">unread messages</span></span>--}}
                                </button>
                                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                    aria-labelledby="page-header-notifications-dropdown">

                                    <div class="dropdown-head bg-primary bg-pattern rounded-top">
                                        <div class="p-3">
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <h6 class="m-0 fs-16 fw-semibold text-white"> Relatorio de Actividades
                                                    </h6>
                                                </div>
                                                {{-- -<div class="col-auto dropdown-tabs">
                                                <span class="badge badge-soft-light fs-13"> 4 New</span>
                                            </div> --}}
                                            </div>
                                        </div>

                                        <div class="px-2 pt-2">
                                            <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom"
                                                data-dropdown-tabs="true" id="notificationItemsTab" role="tablist">
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab"
                                                        role="tab" aria-selected="true">
                                                        Comunicados
                                                    </a>
                                                </li>
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#messages-tab"
                                                        role="tab" aria-selected="false">
                                                        Actividades
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="tab-content position-relative" id="notificationItemsTabContent">
                                        <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab"
                                            role="tabpanel">
                                            {{---<div data-simplebar style="max-height: 300px;" class="pe-2">
                                                @foreach ($announcements as $announcement)
                                                    
                                                <div
                                                    class="text-reset notification-item d-block dropdown-item position-relative">
                                                    <div class="d-flex">
                                                        <img src="assets/images/users/avatar-8.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="{{route('showAnnouncements',['id'=>$announcement->id])}}" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">{{$announcement->Type}}</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">{{$announcement->Description}}
                                                                </p>
                                                            </div>
                                                            {{---<p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
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
                                                @endforeach
                                                
                                            </div>--}}

                                        </div>

                                        {{---<div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel"
                                            aria-labelledby="messages-tab">
                                            <div data-simplebar style="max-height: 300px;" class="pe-2">
                                                
                                                @foreach ($activities as $activity)
                                                    <div class="text-reset notification-item d-block dropdown-item">
                                                        <div class="d-flex">
                                                            <img src="assets/images/users/avatar-3.jpg"
                                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                            <div class="flex-1">
                                                                <a href="{{route('dashboard')}}" class="stretched-link">
                                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">{{$activity->users->name}}</h6>
                                                                </a>
                                                                <div class="fs-13 text-muted">
                                                                    <p class="mb-1">{{$activity->Title}}
                                                                    </p>
                                                                </div>
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
                                                @endforeach
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
                                    </div>--}}
                                </div>
                            </div>

                            {{-- Fim do modal da parte de notificacoes --}}
                        @endrole

                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    <img class="rounded-circle header-profile-user"
                                        src="../assets/images/users/avatar-1.jpg" alt="Header Avatar">
                                    <span class="text-start ms-xl-2">
                                        <span
                                            class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">{{ Auth::user()->name }}</span>
                                        <span
                                            class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">{{ Auth::user()->userType }}</span>
                                    </span>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <h6 class="dropdown-header">Welcome {{ Auth::user()->name }}!</h6>
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

        @role('admin')
            <div class="app-menu navbar-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <!-- Dark Logo-->
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/a1.png" alt="" height="22">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/a1.png" alt="" height="17">
                        </span>
                    </a>
                    <!-- Light Logo-->
                    <br><a href="{{ route('dashboard') }}" class="logo logo-light">
                        <span class="logo-sm">
                            <img src="../assets/images/a1.png" alt="" height="30">
                        </span>
                        <span class="logo-lg">
                            <img src="../assets/images/a1.png" alt="" height="30">
                        </span>
                    </a>
                    <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                        id="vertical-hover">
                        <i class="ri-record-circle-line"></i>
                    </button>
                </div>
            @endrole

            @role('treasurer')
                <div class="app-menu navbar-menu">

                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <!-- Dark Logo-->
                        <a href="index.html" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="assets/images/a1.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/a1.png" alt="" height="17">
                            </span>
                        </a>
                        <!-- Light Logo-->
                        <br><a href="{{ route('dashboard') }}" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="../assets/images/a1.png" alt="" height="30">
                            </span>
                            <span class="logo-lg">
                                <img src="../assets/images/a1.png" alt="" height="30">
                            </span>
                        </a>
                        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                            id="vertical-hover">
                            <i class="ri-record-circle-line"></i>
                        </button>
                    </div>
                @endrole

                @role('shepherd')
                    <div class="app-menu navbar-menu">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <!-- Dark Logo-->
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/a1.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/a1.png" alt="" height="17">
                                </span>
                            </a>
                            <!-- Light Logo-->
                            <br><a href="{{ route('dashboard') }}" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="../assets/images/a1.png" alt="" height="30">
                                </span>
                                <span class="logo-lg">
                                    <img src="../assets/images/a1.png" alt="" height="30">
                                </span>
                            </a>
                            <button type="button"
                                class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                                id="vertical-hover">
                                <i class="ri-record-circle-line"></i>
                            </button>
                        </div>
                    @endrole

                    @role('worship_leader')
                        <div class="app-menu navbar-menu">
                            <!-- LOGO -->
                            <div class="navbar-brand-box">
                                <!-- Dark Logo-->
                                <a href="index.html" class="logo logo-dark">
                                    <span class="logo-sm">
                                        <img src="assets/images/a1.png" alt="" height="22">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="assets/images/a1.png" alt="" height="17">
                                    </span>
                                </a>
                                <!-- Light Logo-->
                                <br><a href="{{ route('allFile') }}" class="logo logo-light">
                                    <span class="logo-sm">
                                        <img src="../assets/images/a1.png" alt="" height="30">
                                    </span>
                                    <span class="logo-lg">
                                        <img src="../assets/images/a1.png" alt="" height="30">
                                    </span>
                                </a>
                                <button type="button"
                                    class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                                    id="vertical-hover">
                                    <i class="ri-record-circle-line"></i>
                                </button>
                            </div>
                        @endrole

                        <div id="scrollbar">
                            <div class="container-fluid">

                                <div id="two-column-menu">
                                </div>
                                @role('admin')
                                    <ul class="navbar-nav" id="navbar-nav">
                                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                                        <li class="nav-item">
                                            <a class="nav-link menu-link active" href="{{ route('dashboard') }}" role="button">
                                                <i class="ri-dashboard-2-line"></i> <span
                                                    data-key="t-dashboards">Index</span>
                                            </a>
                                        </li> <!-- end Dashboard Menu -->
                                        <li class="nav-item">
                                            <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarApps">
                                                <i class="ri-apps-2-line"></i> <span data-key="t-apps">Actividades</span>
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarApps">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('addActivity') }}" class="nav-link"
                                                            data-key="t-calendar">
                                                            Adicionar actividades
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('allActivity') }}" class="nav-link"
                                                            data-key="t-chat">
                                                            Todas
                                                            actividades </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarPages">
                                                <i class="ri-pages-line"></i> <span data-key="t-pages">Mensagem</span>
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarPages">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="pages-starter.html" class="nav-link"
                                                            data-key="t-starter">
                                                            Compor
                                                            mensagem
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link menu-link" href="#sidebarAdvanceUI"
                                                data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                aria-controls="sidebarAdvanceUI">
                                                <i class="ri-stack-line"></i> <span
                                                    data-key="t-advance-ui">Patrimonio</span>
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('addPatrimony') }}" class="nav-link"
                                                            data-key="t-sweet-alerts">Adicionar patrimonio</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('allPatrimony') }}" class="nav-link"
                                                            data-key="t-nestable-list">Todo patrimonio da igreja</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link menu-link" href="#sidebarAppsa" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarApps">
                                                <i class="ri-apps-2-line"></i> <span
                                                    data-key="t-apps">Departamentos</span>
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarAppsa">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('addDepartment') }}" class="nav-link"
                                                            data-key="t-calendar">
                                                            Adicionar Departamento
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="collapse menu-dropdown" id="sidebarAppsa">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('allDepartment') }}" class="nav-link"
                                                            data-key="t-calendar">
                                                            Todos Departamentos
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarForms">
                                                <i class="ri-file-list-3-line"></i> <span data-key="t-forms">Culto</span>
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarForms">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('addCult') }}" class="nav-link"
                                                            data-key="t-basic-elements">Adicionar culto</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('allCult') }}" class="nav-link"
                                                            data-key="t-form-select">Detalhes do culto</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link menu-link" href="#sidebarTables" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarTables">
                                                <i class="ri-layout-grid-line"></i> <span
                                                    data-key="t-tables">Filiais</span>
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarTables">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('addBranches') }}" class="nav-link"
                                                            data-key="t-basic-tables">Adicionar filiais</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('allBranches') }}" class="nav-link"
                                                            data-key="t-grid-js">Todas
                                                            filiais</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        {{-- Inicio dos links contendo os caminhos dos usuarios --}}
                                        <li class="menu-title"><span data-key="t-menu">Usuarios</span></li>
                                        <li class="nav-item">
                                            <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarIcons">
                                                <i class="ri-compasses-2-line"></i> <span data-key="t-icons">Pastor
                                                    Auxiliar</span>
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarIcons">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('addShepherd') }}" class="nav-link"
                                                            data-key="t-remix">Adicionar pastor</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('allShepherd') }}" class="nav-link"
                                                            data-key="t-boxicons">Todos
                                                            pastores</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarUI">
                                                <i class="ri-pencil-ruler-2-line"></i> <span
                                                    data-key="t-base-ui">Tesoureiros</span>
                                            </a>
                                            <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                                                <div class="row">
                                                    <div class="col-lg-4">
                                                        <ul class="nav nav-sm flex-column">
                                                            <li class="nav-item">
                                                                <a href="{{ route('addTreasurer') }}" class="nav-link"
                                                                    data-key="t-alerts">Adicionar Tesoureiro</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a href="{{ route('allTreasurer') }}" class="nav-link"
                                                                    data-key="t-badges">Todos
                                                                    tesoureiros</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link menu-link" href="#sidebarMultilevel"
                                                data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                aria-controls="sidebarMultilevel">
                                                <i class="ri-share-line"></i> <span data-key="t-multi-level">Lider de
                                                    louvor</span>
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarMultilevel">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="{{ route('addWorship_leader') }}" class="nav-link"
                                                            data-key="t-level-1.1">Adicionar lider de
                                                            louvor</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="{{ route('allWorship_leader') }}" class="nav-link"
                                                            data-key="t-level-1.1">
                                                            Detalhes</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li class="nav-item">
                                            <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse"
                                                role="button" aria-expanded="false" aria-controls="sidebarAuth">
                                                <i class="ri-account-circle-line"></i> <span
                                                    data-key="t-authentication">Membros</span>
                                            </a>
                                            <div class="collapse menu-dropdown" id="sidebarAuth">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="#sidebarSignIn" class="nav-link"> Adicionar membro
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#sidebarSignUp" class="nav-link"> Todos membros
                                                        </a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </li>
                                    @endrole

                                    @role('shepherd')
                                        {{-- Inicio do menu da parte de pastor --}}

                                        <ul class="navbar-nav" id="navbar-nav">
                                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                                            <li class="nav-item">
                                                <a class="nav-link menu-link" href="{{ route('dashboard') }}"
                                                    role="button">
                                                    <i class="ri-dashboard-2-line"></i> <span
                                                        data-key="t-dashboards">Index</span>
                                                </a>
                                            </li> <!-- end Dashboard Menu -->
                                            <li class="nav-item">
                                                <a class="nav-link menu-link" href="#sidebarApps"
                                                    data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                    aria-controls="sidebarApps">
                                                    <i class="ri-apps-2-line"></i> <span
                                                        data-key="t-apps">Actividades</span>
                                                </a>
                                                <div class="collapse menu-dropdown" id="sidebarApps">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="{{ route('addActivity') }}" class="nav-link"
                                                                data-key="t-calendar">
                                                                Adicionar actividades
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{ route('allActivity') }}" class="nav-link"
                                                                data-key="t-chat"> Todas
                                                                actividades </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse"
                                                    role="button" aria-expanded="false" aria-controls="sidebarUI">
                                                    <i class="ri-pencil-ruler-2-line"></i> <span
                                                        data-key="t-base-ui">Crentes</span>
                                                </a>
                                                <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <ul class="nav nav-sm flex-column">
                                                                <li class="nav-item">
                                                                    <a href="{{ route('addTreasurer') }}"
                                                                        class="nav-link" data-key="t-alerts">Todos
                                                                        Crentes</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link menu-link" href="#sidebarPages"
                                                    data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                    aria-controls="sidebarPages">
                                                    <i class="ri-pages-line"></i> <span
                                                        data-key="t-pages">Comunicado</span>
                                                </a>
                                                <div class="collapse menu-dropdown" id="sidebarPages">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="{{ route('addAnnouncement') }}" class="nav-link"
                                                                data-key="t-starter"> Inserir Comunicado
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>

                                                <div class="collapse menu-dropdown" id="sidebarPages">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="{{ route('allAnnouncement') }}" class="nav-link"
                                                                data-key="t-starter">Todos Comunicados
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link menu-link" href="#sidebarAuth"
                                                    data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                    aria-controls="sidebarAuth">
                                                    <i class="ri-account-circle-line"></i> <span
                                                        data-key="t-authentication">Pedidos de Oracao</span>
                                                </a>
                                                <div class="collapse menu-dropdown" id="sidebarAuth">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="#sidebarSignIn" class="nav-link"> Mais Detalhes
                                                            </a>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link menu-link" href="#sidebarAdvanceUI"
                                                    data-bs-toggle="collapse" role="button" aria-expanded="false"
                                                    aria-controls="sidebarAdvanceUI">
                                                    <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Relatorio
                                                        de
                                                        Actividades</span>
                                                </a>
                                                <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                                                    <ul class="nav nav-sm flex-column">
                                                        <li class="nav-item">
                                                            <a href="{{ route('addReportActivities') }}" class="nav-link"
                                                                data-key="t-sweet-alerts">Adicionar Relatorio de
                                                                Actividades</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="{{ route('allReportActivities') }}" class="nav-link"
                                                                data-key="t-nestable-list">Detalhes de Relatorio de
                                                                Actividades</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>

                                            {{-- Fim do menu da parte de pastor --}}
                                        @endrole


                                        @role('worship_leader')
                                            {{-- Inicio do menu da parte de pastor --}}

                                            <ul class="navbar-nav" id="navbar-nav">
                                                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                                                <li class="nav-item">
                                                    <a class="nav-link menu-link" href="{{ route('allFile') }}"
                                                        role="button">
                                                        <i class="ri-dashboard-2-line"></i> <span
                                                            data-key="t-dashboards">Index</span>
                                                    </a>
                                                </li> <!-- end Dashboard Menu -->

                                                {{-- Fim do menu da parte de pastor --}}
                                            @endrole

                                            @role('treasurer')
                                                {{-- Inicio do menu da parte de pastor --}}

                                                <ul class="navbar-nav" id="navbar-nav">
                                                    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                                                    <li class="nav-item">
                                                        <a class="nav-link menu-link" href="{{ route('dashboard') }}"
                                                            role="button">
                                                            <i class="ri-dashboard-2-line"></i> <span
                                                                data-key="t-dashboards">Index</span>
                                                        </a>
                                                    </li> <!-- end Dashboard Menu -->
                                                    <li class="nav-item">
                                                        <a class="nav-link menu-link" href="#sidebarApps"
                                                            data-bs-toggle="collapse" role="button"
                                                            aria-expanded="false" aria-controls="sidebarApps">
                                                            <i class="ri-apps-2-line"></i> <span
                                                                data-key="t-apps">Entradas</span>
                                                        </a>
                                                        <div class="collapse menu-dropdown" id="sidebarApps">
                                                            <ul class="nav nav-sm flex-column">
                                                                <li class="nav-item">
                                                                    <a href="{{ route('addInput') }}" class="nav-link"
                                                                        data-key="t-calendar">
                                                                        Inserir Entradas
                                                                    </a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="{{ route('allInput') }}" class="nav-link"
                                                                        data-key="t-chat"> Detalhes das Entradas </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link menu-link" href="#sidebarAdvanceUI"
                                                            data-bs-toggle="collapse" role="button"
                                                            aria-expanded="false" aria-controls="sidebarAdvanceUI">
                                                            <i class="ri-stack-line"></i> <span
                                                                data-key="t-advance-ui">Saidas</span>
                                                        </a>
                                                        <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                                                            <ul class="nav nav-sm flex-column">
                                                                <li class="nav-item">
                                                                    <a href="{{ route('addOutput') }}" class="nav-link"
                                                                        data-key="t-sweet-alerts">Adicionar Saidas da
                                                                        Igreja</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a href="{{ route('allOutput') }}" class="nav-link"
                                                                        data-key="t-nestable-list">Detalhes das Saidas</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>

                                                    {{-- Fim do menu da parte de pastor --}}
                                                @endrole


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

     <!-- start page title -->
     <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Erp-Cultos</h4>

                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Paginas</a>
                        </li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->

    {{--Inicio do conteudo do meu sistema--}}

    <div class="row">
        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Igrejas Filhas</p>
                        </div>
                        {{--<div class="flex-shrink-0">
                            <h5 class="text-success fs-14 mb-0">
                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +89.24 %
                            </h5>
                        </div>--}}
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{$count_branches}}">0</span></h4>
                            {{--<span class="badge bg-warning me-1">2,258</span> <span class="text-muted">Invoices sent</span>--}}
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light rounded fs-3">
                                <i data-feather="file-text" class="text-success icon-dual-success"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Todas as Actividades</p>
                        </div>
                        {{---<div class="flex-shrink-0">
                            <h5 class="text-danger fs-14 mb-0">
                                <i class="ri-arrow-right-down-line fs-13 align-middle"></i> +8.09 %
                            </h5>
                        </div>---}}
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{$count_activities}}">0</span></h4>
                            {{--<span class="badge bg-warning me-1">1,958</span> <span class="text-muted">Paid by clients</span>--}}
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light rounded fs-3">
                                <i data-feather="check-square" class="text-success icon-dual-success"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Numero de Cultos</p>
                        </div>
                        {{---<div class="flex-shrink-0">
                            <h5 class="text-danger fs-14 mb-0">
                                <i class="ri-arrow-right-down-line fs-13 align-middle"></i> +9.01 %
                            </h5>
                        </div>---}}
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{$count_cults}}">0</span></h4>
                            {{---<span class="badge bg-warning me-1">338</span> <span class="text-muted">Unpaid by clients</span>--}}
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light rounded fs-3">
                                <i data-feather="clock" class="text-success icon-dual-success"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->

        <div class="col-xl-3 col-md-6">
            <!-- card -->
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="flex-grow-1">
                            <p class="text-uppercase fw-medium text-muted mb-0">Todos Pastores Auxiliares</p>
                        </div>
                        {{---<div class="flex-shrink-0">
                            <h5 class="text-success fs-14 mb-0">
                                <i class="ri-arrow-right-up-line fs-13 align-middle"></i> +7.55 %
                            </h5>
                        </div>--}}
                    </div>
                    <div class="d-flex align-items-end justify-content-between mt-4">
                        <div>
                            <h4 class="fs-22 fw-semibold ff-secondary mb-4"><span class="counter-value" data-target="{{$count_shepherds}}">0</span></h4>
                            {{---<span class="badge bg-warning me-1">502</span> <span class="text-muted">Cancelled by clients</span>--}}
                        </div>
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light rounded fs-3">
                                <i data-feather="x-octagon" class="text-success icon-dual-success"></i>
                            </span>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div><!-- end card -->
        </div><!-- end col -->
    </div> <!-- end row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title mb-0">Todas Igrejas Filhas</h4>
                </div><!-- end card header -->

                <div class="card-body">
                    <div id="customerList">
                        <div class="row g-4 mb-3">
                            <div class="col-sm-auto">
                                <div>
                                    <a href="{{ route('addBranches') }}" class="btn btn-success add-btn"><i
                                            class="ri-add-line align-bottom me-1"></i> Adicionar</a>
                                </div>
                            </div>
                            <div class="col-sm">
                                <div class="d-flex justify-content-sm-end">
                                    <div class="search-box ms-2">
                                        <input type="text" class="form-control search" placeholder="Search...">
                                        <i class="ri-search-line search-icon"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive table-card mt-3 mb-1">
                            <table class="table align-middle table-nowrap" id="customerTable">
                                <thead class="table-light">
                                    <tr>
                                        {{-- <th scope="col" style="width: 50px;">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="checkAll"
                                                    value="option">
                                            </div>
                                        </th> --}}
                                        <th class="sort" data-sort="customer_nam"></th>
                                        <th class="sort" data-sort="customer_name">Nome da Filial</th>
                                        <th class="sort" data-sort="email">Ano de Criacao</th>
                                        <th class="sort" data-sort="phone">Endereco</th>
                                        <th class="sort" data-sort="date">Numero de Membros</th>
                                        <th class="sort" data-sort="status">Nome do Responsavel</th>
                                        <th class="sort" data-sort="actio"></th>
                                    </tr>
                                </thead>
                                <tbody class="list form-check-all">
                                    @foreach ($branches as $branche)
                                        <tr>
                                            <td class="customer_nam">{{ $branche->id }}</td>
                                            <td class="customer_name">{{ $branche->Name }}</td>
                                            <td class="email">{{ $branche->Creation_year }}</td>
                                            <td class="phone">{{ $branche->Address }}</td>
                                            <td class="date">{{ $branche->Number_of_members }}</td>
                                            <td class="dat">{{ $branche->name($branche->Id_user) }}</td>
                                            <td class="actio">
                                                <div class="d-flex gap-2">
                                                    <div class="edit">
                                                        <button class="btn btn-sm btn-success edit-item-btn"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#showModal{{ $branche->id }}">Editar</button>
                                                    </div>
                                                    <div class="remove">
                                                        <button class="btn btn-sm btn-danger remove-item-btn"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#deleteRecordModal{{ $branche->id }}">Eliminar</button>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                        {{-- Inicio do modal para editar o pastor --}}
                                        <div class="modal fade" id="showModal{{ $branche->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header bg-light p-3">
                                                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close" id="close-modal"></button>
                                                    </div>
                                                    <form class="tablelist-form" autocomplete="off"
                                                        action="{{ route('updateBranches', ['id' => $branche->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="mb-3" id="modal-id">
                                                                <label for="customername-field"
                                                                    class="form-label">Nome da Filial</label>
                                                                <input type="text" id="id-field" name="Name"
                                                                    class="form-control" value="{{ $branche->Name }}"
                                                                    required />
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="customername-field"
                                                                    class="form-label">Ano de Criacao</label>
                                                                <input type="date" id="customername-field"
                                                                    class="form-control" value="{{ $branche->Creation_year }}"
                                                                    name="Creation_year" required />
                                                                <div class="invalid-feedback">Por favor escreva bem o seu
                                                                    nome
                                                                </div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="email-field" class="form-label">Endereco</label>
                                                                <input type="text" id="email-field"
                                                                    class="form-control" value="{{ $branche->Address }}"
                                                                    name="Address" required />
                                                                <div class="invalid-feedback">Digite o seu email de forma
                                                                    correcta.</div>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label for="phone-field"
                                                                    class="form-label">Numero de Membros</label>
                                                                <input type="text" id="phone-field"
                                                                    class="form-control" value="{{ $branche->Number_of_members }}"
                                                                    name="Number_of_members" required />
                                                                <div class="invalid-feedback">Please enter a phone.</div>
                                                            </div>

                                                            <div>
                                                                <label for="status-field" class="form-label">Nome do Responsavel</label>
                                                                <select class="form-control" name="Id_user" id="status-field" required>
                                                                    <option value="{{$branche->Id_user}}">{{$branche->name($branche->Id_user)}}</option>
                                                                    @foreach ($users as $user)
                                                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <div class="hstack gap-2 justify-content-end">
                                                                <button type="button" class="btn btn-light"
                                                                    data-bs-dismiss="modal">Fechar</button>
                                                                <button type="submit" name="submit"
                                                                    class="btn btn-success" id="add-btn">Actualizar
                                                                    Filial</button>
                                                                <!-- <button type="button" class="btn btn-success" id="edit-btn">Update</button> -->
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Fim do modal para editar pastor --}}

                                        <!-- Modal -->
                                        <div class="modal fade zoomIn" id="deleteRecordModal{{ $branche->id }}"
                                            tabindex="-1" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Close" id="btn-close"></button>
                                                    </div>
                                                    <form action="{{route('deleteBranches',['id'=>$branche->id])}}" method="get">
                                                        @csrf
                                                        @method('DELETE')
                                                        <div class="modal-body">
                                                            <div class="mt-2 text-center">
                                                                <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json"
                                                                    trigger="loop"
                                                                    colors="primary:#f7b84b,secondary:#f06548"
                                                                    style="width:100px;height:100px">
                                                                </lord-icon>
                                                                <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                                                    <h4>Voce tem certeza ?</h4>
                                                                    <p class="text-muted mx-4 mb-0">Voce pretende eliminar
                                                                        {{ $branche->Name }} ?</p>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                                                                <button type="button" class="btn w-sm btn-light"
                                                                    data-bs-dismiss="modal">Fechar</button>
                                                                <button type="submit" name="submit"
                                                                    class="btn w-sm btn-danger " id="delete-record">Sim,
                                                                    elimine!</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>

                                        {{-- Fim dos dois modais --}}
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="noresult" style="display: none">
                                <div class="text-center">
                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop"
                                        colors="primary:#121331,secondary:#08a88a" style="width:75px;height:75px">
                                    </lord-icon>
                                    <h5 class="mt-2">Sorry! No Result Found</h5>
                                    <p class="text-muted mb-0">We've searched more than 150+ Orders We did not find any
                                        orders for you search.</p>
                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <div class="pagination-wrap hstack gap-2">
                                <a class="page-item pagination-prev disabled" href="#">
                                    Previous
                                </a>
                                <ul class="pagination listjs-pagination mb-0"></ul>
                                <a class="page-item pagination-next" href="#">
                                    Next
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- end card -->
            </div>
            <!-- end col -->
        </div>
        <!-- end col -->
    </div>
    <!-- end row -->

</div>
<!-- container-fluid -->
</div>
<!-- End Page-content -->

<footer class="footer">
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6">
            <script>
                document.write(new Date().getFullYear())
            </script> © Erp-Culto.
        </div>
        <div class="col-sm-6">
            <div class="text-sm-end d-none d-sm-block">
                Desenhado e Desenvolvido por Mauro Peniel
            </div>
        </div>
    </div>
</div>
</footer>
</div>
<!-- end main content-->

</div>
<!-- END layout-wrapper -->



<!--start back-to-top-->
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
<i class="ri-arrow-up-line"></i>
</button>
<!--end back-to-top-->

{{-- Inicio do link de sweetAlerta --}}
@include('sweetalert::alert')
{{-- Fim do link do sweetAlerta --}}

<!-- JAVASCRIPT -->
<script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../assets/libs/simplebar/simplebar.min.js"></script>
<script src="../assets/libs/node-waves/waves.min.js"></script>
<script src="../assets/libs/feather-icons/feather.min.js"></script>
<script src="../assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
<script src="../assets/js/plugins.js"></script>

<!-- App js -->
<script src="../assets/js/app.js"></script>

</body>


<!-- Mirrored from themesbrand.com/velzon/html/default/pages-starter.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 02 Mar 2023 09:55:00 GMT -->

</html>
