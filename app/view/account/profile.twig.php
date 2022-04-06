{% extends 'partials/body.twig.php'  %}

{% block title %}Novo Produto - Mini Framework{% endblock %}

{% block body %}
    
    <!-- loader section -->
    <div class="container-fluid loader-wrap">
        <div class="row h-100">
            <div class="col-10 col-md-6 col-lg-5 col-xl-3 mx-auto text-center align-self-center">
                <div class="loader-cube-wrap loader-cube-animate mx-auto">
                    <img src="{{BASE}}assets/img/logo.png" alt="Logo">
                </div>
                <p class="mt-4">Carregando<br><strong>Por favor aguarde...</strong></p>
            </div>
        </div>
    </div>
    <!-- loader section ends -->

    <!-- Sidebar main menu -->
    <div class="sidebar-wrap  sidebar-pushcontent">
        <!-- Add overlay or fullmenu instead overlay -->
        <div class="closemenu text-muted">Close Menu</div>
        <div class="sidebar dark-bg">
            <!-- user information -->
            <div class="row my-3">
                <div class="col-12 ">
                    <div class="card shadow-sm bg-opac text-white border-0">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto">
                                    <figure class="avatar avatar-44 rounded-15">
                                        <img src="{{BASE}}assets/img/user1.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="col px-0 align-self-center">
                                    <p class="mb-1">{{info.pnome}} {{info.unome}}</p>
                                    <p class="text-muted size-12">{{info.morada}}</p>
                                </div>
                                <div class="col-auto">
                                    <button class="btn btn-44 btn-light">
                                        <i class="bi bi-box-arrow-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card bg-opac text-white border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <h1 class="display-4">100.00</h1>
                                    </div>
                                    <div class="col-auto">
                                        <p class="text-muted">Saldo</p>
                                    </div>
                                    <div class="col text-end">
                                        <p class="text-muted"><a href="addmoney.html" >+ depositar</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- user emnu navigation -->
            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{BASE}}account/dashboard">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-house-door"></i></div>
                                <div class="col">Dasboard</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-person"></i></div>
                                <div class="col">Conta</div>
                                <div class="arrow"><i class="bi bi-plus plus"></i> <i class="bi bi-dash minus"></i>
                                </div>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item nav-link" href="{{BASE}}account/profile">
                                        <div class="avatar avatar-40 rounded icon"><i class="bi bi-calendar2"></i></div>
                                        <div class="col">Perfil</div>
                                        <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                    </a></li>
                                <li><a class="dropdown-item nav-link" href="{{BASE}}account/settings">
                                        <div class="avatar avatar-40 rounded icon"><i class="bi bi-calendar-check"></i>
                                        </div>
                                        <div class="col">Definições</div>
                                        <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                                    </a></li>
                            </ul>
                        </li>
                        

                       

                        <li class="nav-item">
                            <a class="nav-link" href="{{BASE}}account/logout" tabindex="-1">
                                <div class="avatar avatar-40 rounded icon"><i class="bi bi-box-arrow-right"></i></div>
                                <div class="col">Sair</div>
                                <div class="arrow"><i class="bi bi-chevron-right"></i></div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Sidebar main menu ends -->

    <!-- Begin page -->
    <main class="h-100">

        <!-- Header -->
        <header class="header position-fixed">
            <div class="row">
                <div class="col-auto">
                    <a href="javascript:void(0)" target="_self" class="btn btn-light btn-44 menu-btn">
                        <i class="bi bi-list"></i>
                    </a>
                </div>
                <div class="col align-self-center text-center">
                    <div class="logo-small">
                        <img src="{{BASE}}assets/img/logo.png" alt="">
                        <h5>FiMobile</h5>
                    </div>
                </div>
                <div class="col-auto">
                    <a href="notifications.html" target="_self" class="btn btn-light btn-44">
                        <i class="bi bi-bell"></i>
                        <span class="count-indicator"></span>
                    </a>
                </div>
            </div>
        </header>
        <!-- Header ends -->

        <!-- main page content -->
        <div class="main-container container pt-0">
            <!-- user information -->
            <div class="card shadow-sm mb-4">
                <div class="card-header">
                    <div class="row">
                        <div class="col-auto">
                            <figure class="avatar avatar-60 rounded-10">
                                <img src="assets/img/user1.jpg" alt="">
                            </figure>
                        </div>
                        <div class="col px-0 align-self-center">
                            <h3 class="mb-0 text-color-theme">{{info.pnome}} {{info.unome}} </h3>
                            <p class="text-muted ">{{info.morada}}, {{info.pais}}</p>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <p class="text-muted mb-3">
                    {{info.bio}}
                    </p>
                    <div class="row">
                        <div class="col d-grid">
                            <button class="btn btn-default btn-lg shadow-sm">Invite</button>
                        </div>
                        <div class="col d-grid">
                            <a href="chat.html" class="btn btn-light btn-lg shadow-sm">Chat</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- followers and connections -->
            <div class="row mb-4 text-center py-4 bg-theme-light">
                <div class="col">
                    <h6 class="mb-0">+254</h6>
                    <p class="text-muted small">Followers</p>
                </div>
                <div class="col">
                    <h6 class="mb-0">+124</h6>
                    <p class="text-muted small">Connections</p>
                </div>
                <div class="col">
                    <h6 class="mb-0">+1456</h6>
                    <p class="text-muted small">Friends</p>
                </div>
            </div>

            <!-- summary -->
            <div class="row mb-3">
                <div class="col-6 col-md-4">
                    <div class="card shadow-sm mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto px-0">
                                    <div class="avatar avatar-40 bg-warning text-white shadow-sm rounded-10-end">
                                        <i class="bi bi-star"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <p class="text-muted size-12 mb-0">Bonus Points</p>
                                    <p>48546 pts</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="card shadow-sm mb-2">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-auto px-0">
                                    <div class="avatar avatar-40 bg-success text-white shadow-sm rounded-10-end">
                                        <i class="bi bi-cash-stack"></i>
                                    </div>
                                </div>
                                <div class="col">
                                    <p class="text-muted size-12 mb-0">Cashback</p>
                                    <p>15 USD</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- map location -->
            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm mb-4">
                        <div class="card-header">
                            <h6 class="my-1">Location</h6>
                        </div>
                        <div class="card-body">
                            <figure class="w-100">
                                <img src="{{BASE}}assets/img/map%402x.png" class="mw-100" alt="">
                            </figure>
                            <div class="row">
                                <div class="col">
                                    <h6 class="mb-1">50 minuts</h6>
                                    <p class="text-muted small">34 kilometers away</p>
                                </div>
                                <div class="col-auto align-self-center">
                                    <button class="btn btn-link p-0">
                                        <i class="bi bi-arrow-up-right-circle fs-2"></i>
                                    </button>
                                </div>
                            </div>
                            <hr>
                            <p class="text-muted">3023 New Cross Rd, New Cross, London SE14 6AS, New York City, US</p>
                        </div>
                    </div>
                </div>
            </div>

             <!-- summary swiper carousel -->
             <div class="row">
                <div class="col-12 px-0">
                    <div class="swiper-container summayswiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="card shadow-sm mb-4 alert-primary">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-40 bg-primary text-white rounded-circle">
                                                    <i class="bi bi-clock"></i>
                                                </div>
                                            </div>
                                            <div class="col px-0">
                                                <h6 class="mb-0">+155</h6>
                                                <p class="text-muted small">Hours</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card shadow-sm mb-4 alert-warning">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-40 bg-warning text-white rounded-circle">
                                                    <i class="bi bi-cpu"></i>
                                                </div>
                                            </div>
                                            <div class="col px-0">
                                                <h6 class="mb-0">+365</h6>
                                                <p class="text-muted small">Processing</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card shadow-sm mb-4 alert-success">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-40 bg-success text-white rounded-circle">
                                                    <i class="bi bi-folder"></i>
                                                </div>
                                            </div>
                                            <div class="col px-0">
                                                <h6 class="mb-0">+658</h6>
                                                <p class="text-muted small">Pojects</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card shadow-sm mb-4 alert-danger">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-auto">
                                                <div class="avatar avatar-40 bg-danger text-white rounded-circle">
                                                    <i class="bi bi-bar-chart"></i>
                                                </div>
                                            </div>
                                            <div class="col px-0">
                                                <h6 class="mb-0">+248</h6>
                                                <p class="text-muted small">Complete</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Connections -->
            <div class="row mb-3">
                <div class="col">
                    <h6>Friends </h6>
                </div>
                <div class="col-auto align-self-center">
                    <a class="small" href="userlist.html">View all</a>
                </div>
            </div>
            <div class="row">
                <div class="col-auto mb-4">
                    <div class="avatar avatar-50 rounded-circle">
                        <img src="{{BASE}}assets/img/user1.jpg" alt="">
                    </div>
                </div>
                <div class="col-auto mb-4 ps-0">
                    <div class="avatar avatar-50 rounded-circle">
                        <img src="{{BASE}}assets/img/user2.jpg" alt="">
                    </div>
                </div>
                <div class="col-auto mb-4 ps-0">
                    <div class="avatar avatar-50 rounded-circle">
                        <img src="{{BASE}}assets/img/user3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- main page content ends -->


    </main>
    <!-- Page ends-->

    {% endblock %}