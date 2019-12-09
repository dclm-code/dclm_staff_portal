<!DOCTYPE html>
<html lang="en" class="has-aside-left has-aside-mobile-tansition has-navbar-fixed-top">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#4DBA87">
    <meta name="apple-mobile-web-app-capable" content="no">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta name="msapplication-TitleColor" content="#000000">

    <!--Javascript-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    <!-- Bulma Style Sheet -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Material Design Icon Set-->
    <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.5.95/css/materialdesignicons.min.css">
    <title>DCLM STAFF PORTAL</title>
</head>
<body>
    <div id="app">
        <nav id="navbar-main" class="navbar is-fixed-top">
            <div class="navbar-brand">
            <a class="navbar-item is-desktop-icon-only is-hidden-touch" title="Expand">
                <span class="icon">
                    <i class="mdi mdi-forwardburger mdi-24px"></i>
                </span>
            </a>

            <a class="navbar-item is-hidden-desktop">
                <span class="icon">
                    <i class="mdi mdi-forwardburger mdi-24px"></i>
                </span>
            </a>
            <div class="navbar-item no-left-space">
            </div>
            </div>
            <div class="navbar-brand is-right">
            <a class="navbar-item navbar-item-menu-toggle is-hidden-desktop">
                <span class="icon">
                    <i class="mdi mdi-bell default"></i>
                </span>
            </a>
            <a class="navbar-item navbar-item-menu-toggle is-hidden-desktop">
                <span class="icon">
                    <i class="mdi mdi-dots-vertical default"></i>
                </span>
            </a>
            </div>
            <div class="navbar-menu fadeIn animated faster">
                <div class="navbar-end">
                    <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider has-user-avatar">
                        <a class="navbar-link is-arrowless">
                            <div class="is-user-avatar">
                                <img src="/data-sources/avatars/annie-spratt-121576-unsplash.jpg" alt="John Doe">
                            </div>
                            <div class="is-user-name">
                                <span>John Doe</span>
                            </div>
                            <span class="icon">
                                <i class="mdi mdi-chevron-down default"></i>
                            </span>
                        </a>
                        <div class="navbar-dropdown">
                            <a class="navbar-item">
                                <span class="icon">
                                    <i class="mdi mdi-account default"></i>
                                </span>
                                <span>My Profile</span>
                            </a>
                            <a class="navbar-item">
                                <span class="icon">
                                    <i class="mdi mdi-settings default"></i>
                                </span>
                                <span>Settings</span>
                            </a>
                            <a class="navbar-item">
                                <span class="icon">
                                    <i class="mdi mdi-email default"></i>
                                </span>
                                <span>Messages</span>
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                <span class="icon">
                                    <i class="mdi mdi-logout default"></i>
                                </span>
                                <span>Log Out</span>
                            </a>
                        </div>
                    </div>
<!--
                    <div class="navbar-item has-dropdown has-dropdown-with-icons has-divider">
                        <a class="navbar-link is-arrowless">
                            <span class="icon">
                                <i class="mdi mdi-menu default"></i>
                            </span>
                            <span>Sample Menu</span>
                            <span class="icon">
                                <i class="mdi mdi-chevron-down default"></i>
                            </span>
                        </a>
                        <div class="navbar-dropdown">
                            <a href="#/profile" class="navbar-item">
                                <span class="icon">
                                    <i class="mdi mdi-account default"></i>
                                </span>
                            <span>My Profile</span>
                            </a>
                            <a class="navbar-item">
                                <span class="icon">
                                    <i class="mdi mdi-settings default"></i>
                                </span>
                            <span>Settings</span>
                            </a>
                            <a class="navbar-item">
                                <span class="icon">
                                    <i class="mdi mdi-email default"></i>
                                </span>
                                <span>Messages</span>
                            </a>
                            <hr class="navbar-divider">
                            <a class="navbar-item">
                                <span class="icon">
                                    <i class="mdi mdi-logout default"></i>
                                </span>
                                <span>Log Out</span>
                            </a>
                        </div>
                    </div>
                    <a href="https://justboil.me/bulma-admin-template/one" title="About" class="navbar-item has-divider is-desktop-icon-only">
                        <span class="icon">
                            <i class="mdi mdi-help-circle-outline default"></i>
                        </span>
                        <span>About</span>
                    </a>
                    -->
                    <a title="Updates" class="navbar-item has-divider is-desktop-icon-only">
                        <span class="icon has-update-mark">
                            <i class="mdi mdi-bell default"></i>
                        </span>
                        <span>Updates</span>
                    </a>
                    <a title="Log out" class="navbar-item is-desktop-icon-only">
                        <span class="icon">
                            <i class="mdi mdi-logout default"></i>
                        </span>
                        <span>Log out</span>
                    </a>
                </div>
            </div>
        </nav>
        <aside class="aside is-placed-left">
            <div class="aside-tools">
                <div class="aside-tools-label"><!---->
                    <span title="DCLM Staff Portal"><b>DS</b>P</span>
                </div><!---->
            </div>
            <div class="menu-container ps ps--active-y">
                <div class="menu is-menu-main">
                    <p class="menu-label">General</p>
                        <ul class="menu-list">
                            <li class="">
                                <a class="is-active router-link-active has-icon" title="Dashboard">
                                    <span class="icon">
                                        <i class="mdi mdi-desktop-mac default"></i>
                                    </span>
                                    <span class="menu-item-label">Dashboard</span><!---->
                                </a><!---->
                            </li>
                        </ul>
                        <p class="menu-label">Examples</p>
                            <ul class="menu-list">
                                <li class="">
                                    <a class="has-icon" title="Tables">
                                        <span class="icon has-update-mark">
                                            <i class="mdi mdi-table default"></i>
                                        </span>
                                        <span class="menu-item-label">Tables</span><!---->
                                    </a><!---->
                                </li>
                                <li class="">
                                    <a class="has-icon" title="Forms">
                                        <span class="icon">
                                            <i class="mdi mdi-square-edit-outline default"></i>
                                        </span>
                                        <span class="menu-item-label">Forms</span><!---->
                                    </a><!---->
                                </li>
                                <li class="">
                                    <a class="has-icon" title="Profile">
                                        <span class="icon">
                                            <i class="mdi mdi-account-circle default"></i>
                                        </span>
                                        <span class="menu-item-label">Profile</span><!---->
                                    </a><!---->
                                </li>
                                <li class="">
                                    <a exact-active-class="is-active" class="has-icon has-submenu-icon" title="Dropdown">
                                        <span class="icon">
                                            <i class="mdi mdi-arrow-down-bold-circle default"></i>
                                        </span>
                                        <span class="menu-item-label">Dropdown</span>
                                        <div class="submenu-icon">
                                            <span class="icon">
                                                <i class="mdi mdi-plus default"></i>
                                            </span>
                                        </div>
                                    </a>
                                    <ul class="">
                                        <li class="">
                                            <a href="#void" exact-active-class="is-active" class="" title="Sub-item One"><!---->
                                                <span class="">Sub-item One</span><!---->
                                            </a><!---->
                                        </li>
                                        <li class="">
                                            <a href="#void" exact-active-class="is-active" class="" title="Sub-item Two"><!---->
                                                <span class="">Sub-item Two</span><!---->
                                            </a><!---->
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a exact-active-class="is-active" class="has-icon has-submenu-icon" title="Submenus">
                                        <span class="icon">
                                            <i class="mdi mdi-view-list default"></i>
                                        </span>
                                        <span class="menu-item-label">Submenus</span>
                                        <div class="submenu-icon">
                                            <span class="icon">
                                                <i class="mdi mdi-chevron-right default"></i>
                                            </span>
                                        </div>
                                    </a><!---->
                                </li>
                            </ul>
                            <p class="menu-label">Other</p>
                            <ul class="menu-list">
                                <li class="">
                                    <a class="has-icon" title="Login">
                                        <span class="icon">
                                            <i class="mdi mdi-lock default"></i>
                                        </span>
                                        <span class="menu-item-label">Login</span><!---->
                                    </a><!---->
                                </li>
                                <li class="">
                                    <a class="has-icon" title="Error v.1">
                                        <span class="icon">
                                            <i class="mdi mdi-power-plug default"></i>
                                        </span>
                                        <span class="menu-item-label">Error v.1</span><!---->
                                    </a><!---->
                                </li>
                                <li class="">
                                    <a class="has-icon" title="Error v.2">
                                        <span class="icon">
                                            <i class="mdi mdi-alert-decagram default"></i>
                                        </span>
                                        <span class="menu-item-label">Error v.2</span><!---->
                                    </a><!---->
                                </li>
                                <li class="">
                                    <a class="has-icon" title="Lock Screen">
                                        <span class="icon">
                                            <i class="mdi mdi-lock-reset default"></i>
                                        </span>
                                        <span class="menu-item-label">Lock Screen</span><!---->
                                    </a><!---->
                                </li>
                            </ul>
                            <p class="menu-label">About</p>
                            <ul class="menu-list">
                                <li class="">
                                    <a href="#" exact-active-class="is-active" class="has-icon" title="About">
                                        <span class="icon">
                                            <i class="mdi mdi-help-circle default"></i>
                                        </span>
                                        <span class="menu-item-label">About</span><!---->
                                    </a><!---->
                                </li>
                            </ul>
                        </div>
                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                        </div>
                        <div class="ps__rail-y" style="top: 0px; right: 0px; height: 357px;">
                            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 289px;"></div>
                        </div>
                    </div>
                    <div class="menu is-menu-bottom">
                        <ul class="menu-list">
                            <li class="">
                                <a exact-active-class="is-active" class="has-icon is-state-info is-hoverable" title="Log out">
                                    <span class="icon">
                                        <i class="mdi mdi-logout default"></i>
                                    </span>
                                    <span class="menu-item-label">Log out</span><!---->
                                </a><!---->
                            </li>
                        </ul>
                    </div>
                </aside>
                <div>
                    <section class="section is-title-bar">
                        <div class="level">
                            <div class="level-left">
                                <div class="level-item">
                                    <ul>
                                        <li>Admin</li>
                                        <li>Dashboard</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="level-right">
                                <div class="level-item">
                                    <!--
                                    <div class="buttons is-right">
                                        <a href="https://justboil.me/bulma-admin-template/one" target="_blank" class="button is-primary">
                                            <span class="icon">
                                                <i class="mdi mdi-credit-card default"></i>
                                            </span>
                                            <span>Buy theme</span>
                                        </a>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="hero is-hero-bar is-main-hero">
                    <!--page heager here-->
                    @yield('page-header')
                    <!--ends-->
                    </section>
                    <section class="section is-main-section">
                    <!--Content here-->
                    @yield('content')
                    <!--ends-->
                    </section>
                </div>
                <aside class="aside is-placed-right">
                    <div class="aside-container ps">
                        <div>
                            <article class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <p>Natus sunt ut ipsam fuga non esse...</p>
                                    </div>
                                    <nav class="level is-mobile">
                                        <div class="level-left">
                                            <div class="level-item">
                                                <span class="tag is-small is-info">
                                                    <span class="icon is-small">
                                                        <i class="mdi mdi-information"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="level-item">
                                                <small>3 months ago</small>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <p>Nihil debitis optio non beatae a suscipit...</p>
                                    </div>
                                    <nav class="level is-mobile">
                                        <div class="level-left">
                                            <div class="level-item">
                                                <span class="tag is-small is-info">
                                                    <span class="icon is-small">
                                                        <i class="mdi mdi-information"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="level-item">
                                                <small>3 months ago</small>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <p>Qui quis incidunt ut rem itaque tempora....</p>
                                    </div>
                                    <nav class="level is-mobile">
                                        <div class="level-left">
                                            <div class="level-item">
                                                <span class="tag is-small is-success">
                                                    <span class="icon is-small">
                                                        <i class="mdi mdi-information"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="level-item">
                                                <small>3 months ago</small>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <p>Et vel sint saepe velit laudantium voluptatem....</p>
                                    </div>
                                    <nav class="level is-mobile">
                                        <div class="level-left">
                                            <div class="level-item">
                                                <span class="tag is-small is-danger">
                                                    <span class="icon is-small">
                                                        <i class="mdi mdi-information"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="level-item">
                                                <small>3 months ago</small>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <p>Consequatur non nam totam recusandae alias qui...</p>
                                    </div>
                                    <nav class="level is-mobile">
                                        <div class="level-left">
                                            <div class="level-item">
                                                <span class="tag is-small is-info">
                                                    <span class="icon is-small">
                                                        <i class="mdi mdi-information"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="level-item">
                                                <small>3 months ago</small>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <p>Nam est nemo at est dolores libero....</p>
                                    </div>
                                    <nav class="level is-mobile">
                                        <div class="level-left">
                                            <div class="level-item">
                                                <span class="tag is-small is-info">
                                                    <span class="icon is-small">
                                                        <i class="mdi mdi-information"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="level-item">
                                                <small>3 months ago</small>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <p>Voluptatibus autem amet aliquam ea odit recusandae...</p>
                                    </div>
                                    <nav class="level is-mobile">
                                        <div class="level-left">
                                            <div class="level-item">
                                                <span class="tag is-small is-danger">
                                                    <span class="icon is-small">
                                                        <i class="mdi mdi-information"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="level-item">
                                                <small>3 months ago</small>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <p>Impedit ducimus eaque voluptas sed non sapiente...</p>
                                    </div>
                                    <nav class="level is-mobile">
                                        <div class="level-left">
                                            <div class="level-item">
                                                <span class="tag is-small is-success">
                                                    <span class="icon is-small">
                                                        <i class="mdi mdi-information"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="level-item">
                                                <small>3 months ago</small>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <p>Ad quisquam et quam debitis rerum rerum...</p>
                                    </div>
                                    <nav class="level is-mobile">
                                        <div class="level-left">
                                            <div class="level-item">
                                                <span class="tag is-small is-warning">
                                                    <span class="icon is-small">
                                                        <i class="mdi mdi-information"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="level-item">
                                                <small>3 months ago</small>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <p>Veniam fugiat optio ut nulla. Voluptatem maiores...</p>
                                    </div>
                                    <nav class="level is-mobile">
                                        <div class="level-left">
                                            <div class="level-item">
                                                <span class="tag is-small is-primary">
                                                    <span class="icon is-small">
                                                        <i class="mdi mdi-information"></i>
                                                    </span>
                                                </span>
                                            </div>
                                            <div class="level-item">
                                                <small>3 months ago</small>
                                            </div>
                                        </div>
                                    </nav>
                                </div>
                            </article>
                            <article class="media">
                                <div class="media-content">
                                    <div class="content">
                                        <p>Sint quisquam velit libero in sint aut...</p>
                                    </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <div class="level-item">
                                            <span class="tag is-small is-success">
                                                <span class="icon is-small">
                                                    <i class="mdi mdi-information"></i>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="level-item">
                                            <small>3 months ago</small>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </article>
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>Dolores accusantium quidem nobis eum enim voluptatem...</p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <div class="level-item">
                                            <span class="tag is-small is-info">
                                                <span class="icon is-small">
                                                    <i class="mdi mdi-information"></i>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="level-item">
                                            <small>3 months ago</small>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </article>
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>Et doloribus maiores in cumque maiores ratione....</p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <div class="level-item">
                                            <span class="tag is-small is-warning">
                                                <span class="icon is-small">
                                                    <i class="mdi mdi-information"></i>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="level-item">
                                            <small>3 months ago</small>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </article>
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>Quis sit placeat ipsam magnam ab dolores....</p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <div class="level-item">
                                            <span class="tag is-small is-primary">
                                                <span class="icon is-small">
                                                    <i class="mdi mdi-information"></i>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="level-item">
                                            <small>3 months ago</small>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </article>
                        <article class="media">
                            <div class="media-content">
                                <div class="content">
                                    <p>Ut quo quia nobis et. Consequatur ut...</p>
                                </div>
                                <nav class="level is-mobile">
                                    <div class="level-left">
                                        <div class="level-item">
                                            <span class="tag is-small is-info">
                                                <span class="icon is-small">
                                                    <i class="mdi mdi-information"></i>
                                                </span>
                                            </span>
                                        </div>
                                        <div class="level-item">
                                            <small>3 months ago</small>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </article>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                        <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                    </div>
                    <div class="ps__rail-y" style="top: 0px; right: 0px;">
                        <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                    </div>
                </div>
            </aside>
            <footer class="footer is-fixed-bottom">
                <div class="container-fluid">
                    <div class="level">
                        <div class="level-left">
                            <div class="level-item">
                                © 2019, DEEPER CHRISTIAN LIFE MINISTRY
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <div class="logo">
                                    powered by:
                                    <a href="https:/ahertl.com" target="_blank">
                                        AHERTL&trade;
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
    </div>
    <div id="spinner" class="spinner">
        <div class="spinner-container">
            <div class="sk-double-bounce">
                <div class="sk-child sk-double-bounce1"></div>
                <div class="sk-child sk-double-bounce2"></div>
            </div>
        </div>
    </div>
    <div class="notices is-top"></div>
    <div class="notices is-bottom"></div>
    <script>
        $(document).ready(function(){
            burgerstate = true;
            $('.mdi-forwardburger').on('click', function(){
                if(burgerstate == true){
                    $('aside.aside').addClass('is-expanded');
                    $('html').addClass('has-aside-expanded');
                    $(this).removeClass('mdi-forwardburger');
                    $(this).addClass('mdi-backburger');
                    burgerstate = false;
                }else{
                    $('aside.aside').removeClass('is-expanded');
                    $('html').removeClass('has-aside-expanded');
                    $(this).removeClass('mdi-backburger');
                    $(this).addClass('mdi-forwardburger');
                    burgerstate = true;
                }
            });

            bellstate = true;
            $('.mdi-bell').on('click', function(){
                if(bellstate == true){
                    $('.navbar-item.has-divider.is-desktop-icon-only')
                    .addClass('is-active');
                    $('html').addClass('has-aside-right');
                    bellstate = false;
                }else{
                    $('.navbar-item.has-divider.is-desktop-icon-only')
                    .removeClass('is-active');
                    $('html').removeClass('has-aside-right');
                    bellstate = true;
                }
            });
        });
    </script>
    @yield('script')
</body>
</html>