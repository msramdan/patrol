<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    
	<!-- PWA Version -->
	<link rel="manifest" href="manifest.json">
    
    <!-- Stylesheets -->
	<link rel="stylesheet" href="{{ asset('template') }}/assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
	<link rel="stylesheet" href="{{ asset('template') }}/assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/style.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-gradient-2">
    <div class="page-wraper header-fixed">
        
        <!-- Preloader -->
        <div id="preloader">
            <div class="spinner"></div>
        </div>
        <!-- Preloader end-->
        
        
        <!-- Header -->
        <header class="header">
            <div class="container">
                <div class="main-bar">
                    <div class="left-content">
                        <h4 class="title mb-0">Home</h4>
                    </div>
                    <div class="mid-content">
                    </div>
                    <div class="right-content d-flex align-items-center">
                        <a href="reels.html" class="bell-icon me-2">
                            <svg id="Layer_3" height="24" viewBox="0 0 22 22" width="24" xmlns="http://www.w3.org/2000/svg" data-name="Layer 3"><g><path d="m-.0132 8v9a5.0018 5.0018 0 0 0 5 5h12a5.0018 5.0018 0 0 0 5-5v-9zm14.49 6.87-6 3.38a.9472.9472 0 0 1 -.49.13 1.0145 1.0145 0 0 1 -1-1v-6.76a1.0039 1.0039 0 0 1 1.49-.87l6 3.38a.9971.9971 0 0 1 0 1.74z"/><path d="m6.0968 6h-6.11v-1a4.9909 4.9909 0 0 1 2.27-4.19l1.19 1.62z"/><path d="m15.1068 6h-6.52l-2.96-4-1.44-1.93a4.2509 4.2509 0 0 1 .8-.07h5.72l1.46 2z"/><path d="m21.9868 5v1h-4.4l-2.95-4-1.47-2h3.82a5.0018 5.0018 0 0 1 5 5z"/></g></svg>
                        </a>
                        <a href="notification.html" class="bell-icon me-2">
                            <svg width="24" height="26" viewBox="0 0 24 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.99863 5.94146C8.25877 4.69837 9.96789 4 11.75 4C13.5321 4 15.2412 4.69837 16.5014 5.94146C17.7615 7.18456 18.4694 8.87057 18.4694 10.6286C18.4694 13.6602 19.1264 15.5253 19.7182 16.5956C20.0157 17.1336 20.3031 17.4826 20.498 17.6854C20.5957 17.7872 20.6709 17.853 20.7136 17.8881C20.7334 17.9044 20.7462 17.9141 20.751 17.9176C21.1638 18.1996 21.3462 18.7128 21.2002 19.1883C21.0523 19.6703 20.6019 20 20.0914 20H3.40862C2.89809 20 2.44774 19.6703 2.2998 19.1883C2.15385 18.7128 2.33617 18.1996 2.74898 17.9176C2.75364 17.9144 2.75833 17.9113 2.76305 17.9082L2.7604 17.9099L2.7558 17.913L2.74949 17.9173C2.74783 17.9185 2.74697 17.9191 2.74688 17.9192C2.74681 17.9192 2.7472 17.9189 2.74803 17.9183C2.7483 17.9181 2.74862 17.9179 2.74898 17.9176C2.75375 17.9141 2.76657 17.9044 2.78642 17.8881C2.82906 17.853 2.90431 17.7872 3.00203 17.6854C3.19687 17.4826 3.48428 17.1336 3.78178 16.5956C4.37359 15.5253 5.03055 13.6602 5.03055 10.6286C5.03055 8.87056 5.73849 7.18456 6.99863 5.94146ZM2.76305 17.9082C2.76307 17.9082 2.76308 17.9081 2.7631 17.9081L2.76306 17.9082L2.76305 17.9082ZM17.6975 17.7143C17.693 17.7063 17.6886 17.6982 17.6841 17.6901C16.8857 16.2461 16.1524 13.997 16.1524 10.6286C16.1524 9.47677 15.6886 8.37215 14.863 7.55771C14.0374 6.74326 12.9176 6.28571 11.75 6.28571C10.5824 6.28571 9.46264 6.74326 8.63703 7.55771C7.81143 8.37215 7.3476 9.47677 7.3476 10.6286C7.3476 13.997 6.61433 16.2461 5.81591 17.6901C5.81144 17.6982 5.80697 17.7063 5.8025 17.7143H17.6975ZM2.7645 17.9072C2.7645 17.9072 2.7645 17.9072 2.76449 17.9072L2.76425 17.9074C2.76434 17.9073 2.76442 17.9073 2.7645 17.9072Z" fill="#FE9063"/>
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.87713 21.1933C9.47825 20.797 10.2482 21.0296 10.5969 21.7127C10.6633 21.8427 10.7586 21.9506 10.8732 22.0256C10.9878 22.1006 11.1177 22.1401 11.25 22.1401C11.3823 22.1401 11.5122 22.1006 11.6268 22.0256C11.7414 21.9506 11.8367 21.8427 11.9031 21.7127C12.2518 21.0296 13.0217 20.797 13.6229 21.1933C14.224 21.5895 14.4286 22.4646 14.0799 23.1477C13.7923 23.7111 13.3795 24.1787 12.8829 24.5038C12.3862 24.8289 11.8231 25 11.25 25C10.6769 25 10.1138 24.8289 9.61711 24.5038C9.12045 24.1787 8.70767 23.7111 8.42008 23.1477C8.07138 22.4646 8.27601 21.5895 8.87713 21.1933Z" fill="#FE9063"/>
                                <circle cx="18" cy="6" r="5" fill="url(#paint0_linear_8_1045)" stroke="#FEEADF" stroke-width="2"/>
                                <defs>
                                <linearGradient id="paint0_linear_8_1045" x1="15.8934" y1="-5.17647" x2="23.3834" y2="-3.59332" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#704FFE"/>
                                <stop offset="1" stop-color="#523CAD"/>
                                </linearGradient>
                                </defs>
                            </svg>
                        </a>
                        <a href="javascript:void(0);" class="bell-icon menu-toggler">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M5,11h4c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2H5C3.9,3,3,3.9,3,5v4C3,10.1,3.9,11,5,11z"/><path d="M5,21h4c1.1,0,2-0.9,2-2v-4c0-1.1-0.9-2-2-2H5c-1.1,0-2,0.9-2,2v4C3,20.1,3.9,21,5,21z"/><path d="M13,5v4c0,1.1,0.9,2,2,2h4c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-4C13.9,3,13,3.9,13,5z"/><path d="M15,21h4c1.1,0,2-0.9,2-2v-4c0-1.1-0.9-2-2-2h-4c-1.1,0-2,0.9-2,2v4C13,20.1,13.9,21,15,21z"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="dark-overlay"></div>
        <!-- Header End -->
        
        <!-- Sidebar -->
        <div class="sidebar">
            <div class="author-box">
                <div class="dz-media">
                    <img ssrc="{{ asset('template') }}/assets/images/stories/small/pic1.jpg" alt="author-image">
                </div>
                <div class="dz-info">
                    <span>Good Morning</span>
                    <h5 class="name">Emilla</h5>
                </div>
            </div>
            <ul class="nav navbar-nav">	
                <li class="nav-label">Main Menu</li>
                <li><a class="nav-link" href="welcome.html">
                    <span class="dz-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                        <path d="M13.35 20.13c-.76.69-1.93.69-2.69-.01l-.11-.1C5.3 15.27 1.87 12.16 2 8.28c.06-1.7.93-3.33 2.34-4.29 2.64-1.8 5.9-.96 7.66 1.1 1.76-2.06 5.02-2.91 7.66-1.1 1.41.96 2.28 2.59 2.34 4.29.14 3.88-3.3 6.99-8.55 11.76l-.1.09z"/></svg>
                    </span>
                    <span>Welcome</span>
                </a></li>
                <li><a class="nav-link" href="index.html">
                    <span class="dz-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                            <path d="M10 19v-5h4v5c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-7h1.7c.46 0 .68-.57.33-.87L12.67 3.6c-.38-.34-.96-.34-1.34 0l-8.36 7.53c-.34.3-.13.87.33.87H5v7c0 .55.45 1 1 1h3c.55 0 1-.45 1-1z"/>
                        </svg>
                    </span>
                    <span>Home</span>
                </a></li>
                <li><a class="nav-link" href="pages.html">
                    <span class="dz-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M12.6 18.06c-.36.28-.87.28-1.23 0l-6.15-4.78c-.36-.28-.86-.28-1.22 0-.51.4-.51 1.17 0 1.57l6.76 5.26c.72.56 1.73.56 2.46 0l6.76-5.26c.51-.4.51-1.17 0-1.57l-.01-.01c-.36-.28-.86-.28-1.22 0l-6.15 4.79zm.63-3.02l6.76-5.26c.51-.4.51-1.18 0-1.58l-6.76-5.26c-.72-.56-1.73-.56-2.46 0L4.01 8.21c-.51.4-.51 1.18 0 1.58l6.76 5.26c.72.56 1.74.56 2.46-.01z"/></svg>
                    </span>
                    <span>Pages</span>
                </a></li>
                <li><a class="nav-link" href="ui-components.html">
                    <span class="dz-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"/></svg>
                    </span>
                    <span>Components</span>
                </a></li>
                <li><a class="nav-link" href="notification.html">
                    <span class="dz-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M18 16v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.68-1.5-1.51-1.5S10.5 3.17 10.5 4v.68C7.63 5.36 6 7.92 6 11v5l-1.3 1.29c-.63.63-.19 1.71.7 1.71h13.17c.89 0 1.34-1.08.71-1.71L18 16zm-6.01 6c1.1 0 2-.9 2-2h-4c0 1.1.89 2 2 2zM6.77 4.73c.42-.38.43-1.03.03-1.43-.38-.38-1-.39-1.39-.02C3.7 4.84 2.52 6.96 2.14 9.34c-.09.61.38 1.16 1 1.16.48 0 .9-.35.98-.83.3-1.94 1.26-3.67 2.65-4.94zM18.6 3.28c-.4-.37-1.02-.36-1.4.02-.4.4-.38 1.04.03 1.42 1.38 1.27 2.35 3 2.65 4.94.07.48.49.83.98.83.61 0 1.09-.55.99-1.16-.38-2.37-1.55-4.48-3.25-6.05z"/></svg>
                    </span>
                    <span>Notification</span>
                    <span class="badge badge-circle badge-danger">1</span>
                </a></li>
                <li><a class="nav-link" href="profile.html">
                    <span class="dz-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v1c0 .55.45 1 1 1h14c.55 0 1-.45 1-1v-1c0-2.66-5.33-4-8-4z"/></svg>
                    </span>
                    <span>Profile</span>
                </a></li>
                <li><a class="nav-link" href="chat.html">
                    <span class="dz-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM7 9h10c.55 0 1 .45 1 1s-.45 1-1 1H7c-.55 0-1-.45-1-1s.45-1 1-1zm6 5H7c-.55 0-1-.45-1-1s.45-1 1-1h6c.55 0 1 .45 1 1s-.45 1-1 1zm4-6H7c-.55 0-1-.45-1-1s.45-1 1-1h10c.55 0 1 .45 1 1s-.45 1-1 1z"/></svg>
                    </span>
                    <span>Chat</span>
                    <span class="badge badge-circle badge-info">5</span>
                </a></li>
                <li><a class="nav-link" href="welcome.html">
                    <span class="dz-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g></g><g><g><path d="M5,5h6c0.55,0,1-0.45,1-1v0c0-0.55-0.45-1-1-1H5C3.9,3,3,3.9,3,5v14c0,1.1,0.9,2,2,2h6c0.55,0,1-0.45,1-1v0 c0-0.55-0.45-1-1-1H5V5z"/><path d="M20.65,11.65l-2.79-2.79C17.54,8.54,17,8.76,17,9.21V11h-7c-0.55,0-1,0.45-1,1v0c0,0.55,0.45,1,1,1h7v1.79 c0,0.45,0.54,0.67,0.85,0.35l2.79-2.79C20.84,12.16,20.84,11.84,20.65,11.65z"/></g></g></svg>
                    </span>
                    <span>Logout</span>
                </a></li>
                <li class="nav-label">Settings</li>
                <li class="nav-color" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">
                    <a href="javascript:void(0);" class="nav-link">
                        <span class="dz-icon">                        
                            <svg class="color-plate" xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 0 24 24" width="30px" fill="#000000">
                                <path d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9c.83 0 1.5-.67 1.5-1.5 0-.39-.15-.74-.39-1.01-.23-.26-.38-.61-.38-.99 0-.83.67-1.5 1.5-1.5H16c2.76 0 5-2.24 5-5 0-4.42-4.03-8-9-8zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 9 6.5 9 8 9.67 8 10.5 7.33 12 6.5 12zm3-4C8.67 8 8 7.33 8 6.5S8.67 5 9.5 5s1.5.67 1.5 1.5S10.33 8 9.5 8zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 5 14.5 5s1.5.67 1.5 1.5S15.33 8 14.5 8zm3 4c-.83 0-1.5-.67-1.5-1.5S16.67 9 17.5 9s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z"/>
                            </svg>
                        </span>					
                        <span>Color Theme</span>					
                    </a>
                </li>
                <li>
                    <div class="mode">
                        <span class="dz-icon">
                            <svg class="dark" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000"><g></g><g><g><g><path d="M11.57,2.3c2.38-0.59,4.68-0.27,6.63,0.64c0.35,0.16,0.41,0.64,0.1,0.86C15.7,5.6,14,8.6,14,12s1.7,6.4,4.3,8.2 c0.32,0.22,0.26,0.7-0.09,0.86C16.93,21.66,15.5,22,14,22c-6.05,0-10.85-5.38-9.87-11.6C4.74,6.48,7.72,3.24,11.57,2.3z"/></g></g></g>
                            </svg>
                        </span>					
                        <span class="text-dark">Dark Mode</span>
                        <div class="custom-switch">
                            <input type="checkbox" class="switch-input theme-btn" id="toggle-dark-menu">
                            <label class="custom-switch-label" for="toggle-dark-menu"></label>
                        </div>
                    </div>
                </li>
            </ul>
            <div class="sidebar-bottom">
                <h6 class="name">Soziety - Social Network</h6>
                <span class="ver-info">App Version 1.0</span>
            </div>
        </div>
        <!-- Sidebar End -->
        
        <!-- Page Content -->
        
        <div class="page-content">
            @yield('content')
            
        </div>    
        <!-- Page Content End-->
        
        <!-- Menubar -->
        @include('layouts.menu')
        <!-- Menubar -->
        
        <!-- OffCanvas-1 -->
        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom1">
            <button type="button" class="btn-close drage-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            <div class="offcanvas-header share-style m-0 pb-0">
                <form class="w-100">
                    <input type="text" class="form-control border-0" placeholder="Write a message ..."/>
                </form>
            </div>
            <div class="offcanvas-body container pb-0">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..">
                        <span class="input-group-text"> 
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M23.7871 22.7761L17.9548 16.9437C19.5193 15.145 20.4665 12.7982 20.4665 10.2333C20.4665 4.58714 15.8741 0 10.2333 0C4.58714 0 0 4.59246 0 10.2333C0 15.8741 4.59246 20.4665 10.2333 20.4665C12.7982 20.4665 15.145 19.5193 16.9437 17.9548L22.7761 23.7871C22.9144 23.9255 23.1007 24 23.2816 24C23.4625 24 23.6488 23.9308 23.7871 23.7871C24.0639 23.5104 24.0639 23.0528 23.7871 22.7761ZM1.43149 10.2333C1.43149 5.38004 5.38004 1.43681 10.2279 1.43681C15.0812 1.43681 19.0244 5.38537 19.0244 10.2333C19.0244 15.0812 15.0812 19.035 10.2279 19.035C5.38004 19.035 1.43149 15.0865 1.43149 10.2333Z" fill="#FE9063"></path>
                            </svg>
                        </span>
                    </div>
                </form>
                <div class="canvas-height mt-4 dz-scroll">
                    <ul class="share-list">
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img src="{{ asset('template') }}assets/images/stories/small/pic1.jpg" alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">Andy Lee</h6>
                                    <span class="username">mr_andy_lee</span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img ssrc="{{ asset('template') }}/assets/images/stories/small/pic2.jpg" alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">Brian Harahap</h6>
                                    <span class="username">brian_harahap</span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img ssrc="{{ asset('template') }}/assets/images/stories/small/pic3.jpg" alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">Christian Hang</h6>
                                    <span class="username">christian_Hang</span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img ssrc="{{ asset('template') }}/assets/images/stories/small/pic4.jpg" alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">Chloe Mc. Jenskin</h6>
                                    <span class="username">chloe_mc_jenskin</span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img ssrc="{{ asset('template') }}/assets/images/stories/small/pic5.jpg" alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">David Bekam</h6>
                                    <span class="username">david_bekam</span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img ssrc="{{ asset('template') }}/assets/images/stories/small/pic6.jpg" alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">Donas High</h6>
                                    <span class="username">donas_high</span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img ssrc="{{ asset('template') }}/assets/images/stories/small/pic7.jpg" alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">Lee Comfort</h6>
                                    <span class="username">lee_comfort</span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img ssrc="{{ asset('template') }}/assets/images/stories/small/pic8.jpg" alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">Michel Evon</h6>
                                    <span class="username">michel_evon</span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img ssrc="{{ asset('template') }}/assets/images/stories/small/pic4.jpg" alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">Yatin</h6>
                                    <span class="username">yatin_325</span>
                                </a>	
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img ssrc="{{ asset('template') }}/assets/images/stories/small/pic3.jpg" alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">Tushar</h6>
                                    <span class="username">Tjangid_293</span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- OffCanvas-1 -->
        
        <!-- Theme Color Settings -->
        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom">
            <div class="offcanvas-body small">
                <ul class="theme-color-settings">
                    <li>
                        <input class="filled-in" id="primary_color_8" name="theme_color" type="radio" value="color-primary" />
                        <label for="primary_color_8"></label>
                        <span>Default</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_2" name="theme_color" type="radio" value="color-green" />
                        <label for="primary_color_2"></label>
                        <span>Green</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_3" name="theme_color" type="radio" value="color-blue" />
                        <label for="primary_color_3"></label>
                        <span>Blue</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_4" name="theme_color" type="radio" value="color-pink" />
                        <label for="primary_color_4"></label>
                        <span>Pink</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_5" name="theme_color" type="radio" value="color-yellow" />
                        <label for="primary_color_5"></label>
                        <span>Yellow</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_6" name="theme_color" type="radio" value="color-orange" />
                        <label for="primary_color_6"></label>
                        <span>Orange</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_7" name="theme_color" type="radio" value="color-purple" />
                        <label for="primary_color_7"></label>
                        <span>Purple</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_1" name="theme_color" type="radio" value="color-red" />
                        <label for="primary_color_1"></label>
                        <span>Red</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_9" name="theme_color" type="radio" value="color-lightblue" />
                        <label for="primary_color_9"></label>
                        <span>Lightblue</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_10" name="theme_color" type="radio" value="color-teal" />
                        <label for="primary_color_10"></label>
                        <span>Teal</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_11" name="theme_color" type="radio" value="color-lime" />
                        <label for="primary_color_11"></label>
                        <span>Lime</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_12" name="theme_color" type="radio" value="color-deeporange" />
                        <label for="primary_color_12"></label>
                        <span>Deeporange</span>
                    </li>
                </ul>
            </div>
        </div>
        <!-- Theme Color Settings End -->
    
        <!-- PWA Offcanvas -->
        <div class="offcanvas offcanvas-bottom pwa-offcanvas">
            <div class="container">
                <div class="offcanvas-body small">
                    <img class="logo" ssrc="{{ asset('template') }}/assets/images/icon.png" alt="">
                    <h5 class="title">Soziety on Your Home Screen</h5>
                    <p class="pwa-text">Install Soziety social network mobile app template to your home screen for easy access, just like any other app</p>
                    <button type="button" class="btn btn-sm btn-primary pwa-btn">Add to Home Screen</button>
                    <button type="button" class="btn btn-sm pwa-close light btn-secondary ms-2">Maybe later</button>
                </div>
            </div>
        </div>
        <div class="offcanvas-backdrop pwa-backdrop"></div>
        <!-- PWA Offcanvas End -->
        
    </div>  
    <!--**********************************
        Scripts
    ***********************************-->
    <script src="{{ asset('template') }}/assets/js/jquery.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/swiper/swiper-bundle.min.js"></script><!-- Swiper -->
    <script src="{{ asset('template') }}/assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script><!-- Swiper -->
    <script src="{{ asset('template') }}/assets/js/dz.carousel.js"></script><!-- Swiper -->
    <script src="{{ asset('template') }}/assets/js/settings.js"></script>
    <script src="{{ asset('template') }}/assets/js/custom.js"></script>
    <script src="{{ asset('template') }}/index.js"></script>
    <script>
        $(".stepper").TouchSpin();
    </script>
    </body>
</html>
