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
    <link rel="shortcut icon" href="/assets/images/favicon.ico">

    <link href="..assets/libs/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Layout config Js -->
    <script src="/assets/js/layout.js"></script>
    <!-- Bootstrap Css -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="/assets/css/app.min.css" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="/assets/css/custom.min.css" rel="stylesheet" type="text/css" />

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
                                    <img src="/assets/images/logo-sm.png" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="/assets/images/logo-dark.png" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
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
                        {{-- Inicio da parte que vai mostrar as notificacoes --}}

                        <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
                            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle"
                                id="page-header-notifications-dropdown" data-bs-toggle="dropdown"
                                data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                                <i class='bx bx-bell fs-22'></i>
                                <span
                                    class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">{{ $total }}<span
                                        class="visually-hidden">unread messages</span></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown">

                                <div class="dropdown-head bg-primary bg-pattern rounded-top">
                                    <div class="p-3">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h6 class="m-0 fs-16 fw-semibold text-white"> Notificacoes
                                                </h6>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="px-2 pt-2">
                                        <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true"
                                            id="notificationItemsTab" role="tablist">
                                            @role('worship_leader')
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#messages-tab"
                                                        role="tab" aria-selected="false">
                                                        Actividades
                                                    </a>
                                                </li>
                                            @endrole

                                            @role('worship_leader')
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab"
                                                        role="tab" aria-selected="true">
                                                        Comunicados
                                                    </a>
                                                </li>
                                            @endrole
                                            @role('treasurer')
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#messages-tab"
                                                        role="tab" aria-selected="false">
                                                        Actividades
                                                    </a>
                                                </li>
                                            @endrole

                                            @role('treasurer')
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab"
                                                        role="tab" aria-selected="true">
                                                        Comunicados
                                                    </a>
                                                </li>
                                            @endrole
                                            
                                            @role('shepherd')
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link" data-bs-toggle="tab" href="#messages-tab"
                                                        role="tab" aria-selected="true">
                                                        Actividades
                                                    </a>
                                                </li>
                                            @endrole

                                            @role('admin')
                                                <li class="nav-item waves-effect waves-light">
                                                    <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab"
                                                        role="tab" aria-selected="true">
                                                        Comunicados
                                                    </a>
                                                </li>
                                            @endrole
                                        </ul>
                                    </div>

                                </div>

                                <div class="tab-content position-relative" id="notificationItemsTabContent">
                                    <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab"
                                        role="tabpanel">
                                        <div data-simplebar style="max-height: 300px;" class="pe-2">
                                            @role('treasurer')
                                                @foreach ($announcements as $announcement)
                                                    <div
                                                        class="text-reset notification-item d-block dropdown-item position-relative">
                                                        <div class="d-flex">
                                                            <img src="../Ficheiros/homem.jpg"
                                                                class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                            <div class="flex-1">
                                                                <a href="{{ route('showAnnouncements', ['id' => $announcement->id]) }}"
                                                                    class="stretched-link">
                                                                    <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                                                        {{ $announcement->Type }}</h6>
                                                                </a>
                                                                <div class="fs-13 text-muted">
                                                                    <p class="mb-1">{{ $announcement->Description }}
                                                                    </p>
                                                                </div>
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
                                            @endrole
                                            @role('worship_leader')
                                            @foreach ($announcements as $announcement)
                                                <div
                                                    class="text-reset notification-item d-block dropdown-item position-relative">
                                                    <div class="d-flex">
                                                        <img src="../Ficheiros/homem.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="{{ route('showAnnouncements', ['id' => $announcement->id]) }}"
                                                                class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                                                    {{ $announcement->Type }}</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">{{ $announcement->Description }}
                                                                </p>
                                                            </div>
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
                                        @endrole
                                        </div>

                                    </div>

                                    <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel"
                                        aria-labelledby="messages-tab">
                                        <div data-simplebar style="max-height: 300px;" class="pe-2">

                                            @role('shepherd')
                                            @foreach ($activities as $activity)
                                                <div class="text-reset notification-item d-block dropdown-item">
                                                    <div class="d-flex">
                                                        <img src="assets/images/users/avatar-3.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="{{ route('dashboard') }}" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                                                    {{ $activity->name($activity->Id_user) }}</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">{{ $activity->Title }}
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
                                            @endrole
                                            @role('treasurer')
                                            @foreach ($activities as $activity)
                                                <div class="text-reset notification-item d-block dropdown-item">
                                                    <div class="d-flex">
                                                        <img src="assets/images/users/avatar-3.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="{{ route('dashboard') }}" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                                                    {{ $activity->name($activity->Id_user) }}</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">{{ $activity->Title }}
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
                                            @endrole
                                            @role('worship_leader')
                                            @foreach ($activities as $activity)
                                                <div class="text-reset notification-item d-block dropdown-item">
                                                    <div class="d-flex">
                                                        <img src="assets/images/users/avatar-3.jpg"
                                                            class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                                        <div class="flex-1">
                                                            <a href="{{ route('dashboard') }}" class="stretched-link">
                                                                <h6 class="mt-0 mb-1 fs-13 fw-semibold">
                                                                    {{ $activity->name($activity->Id_user) }}</h6>
                                                            </a>
                                                            <div class="fs-13 text-muted">
                                                                <p class="mb-1">{{ $activity->Title }}
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
                                            @endrole
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

                        {{-- Fim do modal da parte de notificacoes --}}

                        <div class="dropdown ms-sm-3 header-item topbar-user">
                            <button type="button" class="btn" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="d-flex align-items-center">
                                    @if (Auth::user()->gender == 'Masculino')
                                        <img class="rounded-circle header-profile-user" src="/Ficheiros/homem.jpg"
                                            alt="Header Avatar">
                                    @elseif(Auth::user()->gender == 'Femenino')
                                        <img class="rounded-circle header-profile-user" src="/Ficheiros/mulher.jpg"
                                            alt="Header Avatar">
                                    @else
                                        <img class="rounded-circle header-profile-user" src="/Ficheiros/dif.jpg"
                                            alt="Header Avatar">
                                    @endif
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
                                {{-- <a class="dropdown-item" href="auth-lockscreen-basic.html"><i
                                        class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span
                                        class="align-middle">Lock screen</span></a> --}}
                                <form action="{{ route('logout') }}" method="post">
                                    @csrf
                                    <button type="submit" name="submit" class="dropdown-item"
                                        href="{{ route('logout') }}"><i
                                            class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span
                                            class="align-middle" data-key="t-logout">Logout</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="app-menu navbar-menu">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="/Ficheiros/a1.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="/Ficheiros/a1.png" alt="" height="17">
                    </span>
                </a>
                <!-- Light Logo-->
                <br><a href="{{ route('dashboard') }}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="/Ficheiros/a1.png" alt="" height="30">
                    </span>
                    <span class="logo-lg">
                        <img src="/Ficheiros/a1.png" alt="" height="30">
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
                        @role('admin')
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ route('dashboard') }}" role="button">
                                    <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Index</span>
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
                                            <a href="{{ route('addActivity') }}" class="nav-link" data-key="t-calendar">
                                                Adicionar actividades
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('allActivity') }}" class="nav-link" data-key="t-chat">
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
                                            <a href="pages-starter.html" class="nav-link" data-key="t-starter">
                                                Compor
                                                mensagem
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                                    <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Patrimonio</span>
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
                                    <i class="ri-apps-2-line"></i> <span data-key="t-apps">Departamentos</span>
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
                                    <i class="ri-layout-grid-line"></i> <span data-key="t-tables">Filiais</span>
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
                                <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarUI">
                                    <i class="ri-pencil-ruler-2-line"></i> <span data-key="t-base-ui">Tesoureiros</span>
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
                                <a class="nav-link menu-link" href="#sidebarMultilevel" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
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
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ route('dashboard') }}" role="button">
                                    <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Index</span>
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
                                            <a href="{{ route('addActivityShepherd') }}" class="nav-link"
                                                data-key="t-calendar">
                                                Adicionar actividades
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('allActivityShepherd') }}" class="nav-link"
                                                data-key="t-chat">
                                                Todas
                                                actividades </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarUI" data-bs-toggle="collapse" role="button"
                                    aria-expanded="false" aria-controls="sidebarUI">
                                    <i class="ri-pencil-ruler-2-line"></i> <span data-key="t-base-ui">Crentes</span>
                                </a>
                                <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <ul class="nav nav-sm flex-column">
                                                <li class="nav-item">
                                                    <a href="{{ route('allMemberShepherd') }}" class="nav-link"
                                                        data-key="t-alerts">Todos
                                                        Crentes</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
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
                                            <a href="{{ route('allCultShepherd') }}" class="nav-link"
                                                data-key="t-form-select">Detalhes do culto</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarPages" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarPages">
                                    <i class="ri-pages-line"></i> <span data-key="t-pages">Comunicado</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarPages">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('addAnnouncement') }}" class="nav-link"
                                                data-key="t-starter">
                                                Inserir Comunicado
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
                                <a class="nav-link menu-link" href="#sidebarAuth" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarAuth">
                                    <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Pedidos de
                                        Oracao</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarAuth">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('allRequest') }}" class="nav-link"> Mais Detalhes
                                            </a>
                                        </li>

                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
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

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarPags" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarPages">
                                    <i class="ri-pages-line"></i> <span data-key="t-pages">Comunicados Recebidos </span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarPags">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('allReport') }}" class="nav-link" data-key="t-starter">
                                                Detalhes
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            {{-- Fim do menu da parte de pastor --}}
                        @endrole


                        @role('worship_leader')
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ route('dashboard') }}" role="button">
                                    <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Index</span>
                                </a>
                            </li> <!-- end Dashboard Menu -->
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarForms" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarForms">
                                    <i class="ri-file-list-3-line"></i> <span data-key="t-forms">Culto</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarForms">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('allCultWorship_leader') }}" class="nav-link"
                                                data-key="t-form-select">Detalhes do culto</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            {{-- Fim do menu da parte de pastor --}}
                        @endrole

                        @role('treasurer')
                            <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="{{ route('dashboard') }}" role="button">
                                    <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Index</span>
                                </a>
                            </li> <!-- end Dashboard Menu -->
                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarApps" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarApps">
                                    <i class="ri-apps-2-line"></i> <span data-key="t-apps">Entradas</span>
                                </a>
                                <div class="collapse menu-dropdown" id="sidebarApps">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="{{ route('addInput') }}" class="nav-link" data-key="t-calendar">
                                                Inserir Entradas
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('allInput') }}" class="nav-link" data-key="t-chat">
                                                Detalhes
                                                das Entradas </a>
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
                                            <a href="{{ route('allCultTreasurer') }}" class="nav-link"
                                                data-key="t-form-select">Detalhes do culto</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link menu-link" href="#sidebarAdvanceUI" data-bs-toggle="collapse"
                                    role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                                    <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Saidas</span>
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
            </div>
        </div>

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
                            Desenhado e Desenvolvido por Abrao Chimnbia
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

    </div>

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    {{-- Inicio do link de sweetAlerta --}}
    @include('sweetalert::alert')
    {{-- Fim do link do sweetAlerta --}}

    <!-- JAVASCRIPT -->
    <script src="/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="/assets/libs/node-waves/waves.min.js"></script>
    <script src="/assets/libs/feather-icons/feather.min.js"></script>
    <script src="/assets/js/pages/plugins/lord-icon-2.1.0.js"></script>
    <script src="/assets/js/plugins.js"></script>

    <!-- App js -->
    <script src="/assets/js/app.js"></script>

</body>

</html>
