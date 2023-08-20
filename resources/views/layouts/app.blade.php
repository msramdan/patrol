<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet"
        href="{{ asset('template') }}/assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
        integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous">
    </script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])



</head>

<body class="bg-gradient-2">
    <div class="page-wraper header-fixed">
        <div id="preloader">
            <div class="spinner"></div>
        </div>
        {{-- Header --}}
        <header class="header">
            <div class="container">
                <div class="main-bar">
                    <div class="left-content">
                        <h4 class="title mb-0">Home</h4>
                    </div>
                    <div class="mid-content">
                    </div>
                    <div class="right-content d-flex align-items-center">
                        <a href="javascript:void(0);" class="bell-icon menu-toggler">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                                fill="#000000">
                                <path
                                    d="M5,11h4c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2H5C3.9,3,3,3.9,3,5v4C3,10.1,3.9,11,5,11z" />
                                <path
                                    d="M5,21h4c1.1,0,2-0.9,2-2v-4c0-1.1-0.9-2-2-2H5c-1.1,0-2,0.9-2,2v4C3,20.1,3.9,21,5,21z" />
                                <path
                                    d="M13,5v4c0,1.1,0.9,2,2,2h4c1.1,0,2-0.9,2-2V5c0-1.1-0.9-2-2-2h-4C13.9,3,13,3.9,13,5z" />
                                <path
                                    d="M15,21h4c1.1,0,2-0.9,2-2v-4c0-1.1-0.9-2-2-2h-4c-1.1,0-2,0.9-2,2v4C13,20.1,13.9,21,15,21z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <div class="dark-overlay"></div>
        {{-- Sidebar --}}
        <div class="sidebar">
            <div class="author-box">
                <div class="dz-media">
                    <img src="{{ asset('template/assets/images/stories/small/pic1.jpg') }}" alt="author-image">
                </div>
                <div class="dz-info">
                    <span>Selamat datang</span>
                    <h5 class="name">{{ dataUser()->name }}</h5>
                </div>
            </div>
            <ul class="nav navbar-nav">
                <li><a class="nav-link" href="pages.html">
                        <span class="dz-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                                fill="#000000">
                                <path
                                    d="M12.6 18.06c-.36.28-.87.28-1.23 0l-6.15-4.78c-.36-.28-.86-.28-1.22 0-.51.4-.51 1.17 0 1.57l6.76 5.26c.72.56 1.73.56 2.46 0l6.76-5.26c.51-.4.51-1.17 0-1.57l-.01-.01c-.36-.28-.86-.28-1.22 0l-6.15 4.79zm.63-3.02l6.76-5.26c.51-.4.51-1.18 0-1.58l-6.76-5.26c-.72-.56-1.73-.56-2.46 0L4.01 8.21c-.51.4-.51 1.18 0 1.58l6.76 5.26c.72.56 1.74.56 2.46-.01z" />
                            </svg>
                        </span>
                        <span>Laporan</span>
                    </a></li>
                <li><a class="nav-link" href="ui-components.html">
                        <span class="dz-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                                fill="#000000">
                                <path
                                    d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z" />
                            </svg>
                        </span>
                        <span>Jadwal Patroli</span>
                    </a></li>
                <li><a class="nav-link" href="{{ route('users.index') }}">
                        <span class="dz-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px"
                                fill="#000000">
                                <path
                                    d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v1c0 .55.45 1 1 1h14c.55 0 1-.45 1-1v-1c0-2.66-5.33-4-8-4z" />
                            </svg>
                        </span>
                        <span>User</span>
                    </a></li>
                <li class="nav-color" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                    aria-controls="offcanvasBottom">
                    <a href="javascript:void(0);" class="nav-link">
                        <span class="dz-icon">
                            <svg class="color-plate" xmlns="http://www.w3.org/2000/svg" height="30px"
                                viewBox="0 0 24 24" width="30px" fill="#000000">
                                <path
                                    d="M12 3c-4.97 0-9 4.03-9 9s4.03 9 9 9c.83 0 1.5-.67 1.5-1.5 0-.39-.15-.74-.39-1.01-.23-.26-.38-.61-.38-.99 0-.83.67-1.5 1.5-1.5H16c2.76 0 5-2.24 5-5 0-4.42-4.03-8-9-8zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 9 6.5 9 8 9.67 8 10.5 7.33 12 6.5 12zm3-4C8.67 8 8 7.33 8 6.5S8.67 5 9.5 5s1.5.67 1.5 1.5S10.33 8 9.5 8zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 5 14.5 5s1.5.67 1.5 1.5S15.33 8 14.5 8zm3 4c-.83 0-1.5-.67-1.5-1.5S16.67 9 17.5 9s1.5.67 1.5 1.5-.67 1.5-1.5 1.5z" />
                            </svg>
                        </span>
                        <span>Tema Warna</span>
                    </a>
                </li>
                <li>
                    <div class="mode">
                        <span class="dz-icon">
                            <svg class="dark" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24"
                                height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                                <g></g>
                                <g>
                                    <g>
                                        <g>
                                            <path
                                                d="M11.57,2.3c2.38-0.59,4.68-0.27,6.63,0.64c0.35,0.16,0.41,0.64,0.1,0.86C15.7,5.6,14,8.6,14,12s1.7,6.4,4.3,8.2 c0.32,0.22,0.26,0.7-0.09,0.86C16.93,21.66,15.5,22,14,22c-6.05,0-10.85-5.38-9.87-11.6C4.74,6.48,7.72,3.24,11.57,2.3z" />
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
                        <span class="text-dark">Mode Gelap</span>
                        <div class="custom-switch">
                            <input type="checkbox" class="switch-input theme-btn" id="toggle-dark-menu">
                            <label class="custom-switch-label" for="toggle-dark-menu"></label>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="page-content">
            {{-- content --}}
            @yield('content')
        </div>
        {{-- menu buttom --}}
        @include('layouts.menu')

        <!-- OffCanvas-1 -->
        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom1">
            <button type="button" class="btn-close drage-close" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            <div class="offcanvas-header share-style m-0 pb-0">
                <form class="w-100">
                    <input type="text" class="form-control border-0" placeholder="Write a message ..." />
                </form>
            </div>
            <div class="offcanvas-body container pb-0">
                <form>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search..">
                        <span class="input-group-text">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M23.7871 22.7761L17.9548 16.9437C19.5193 15.145 20.4665 12.7982 20.4665 10.2333C20.4665 4.58714 15.8741 0 10.2333 0C4.58714 0 0 4.59246 0 10.2333C0 15.8741 4.59246 20.4665 10.2333 20.4665C12.7982 20.4665 15.145 19.5193 16.9437 17.9548L22.7761 23.7871C22.9144 23.9255 23.1007 24 23.2816 24C23.4625 24 23.6488 23.9308 23.7871 23.7871C24.0639 23.5104 24.0639 23.0528 23.7871 22.7761ZM1.43149 10.2333C1.43149 5.38004 5.38004 1.43681 10.2279 1.43681C15.0812 1.43681 19.0244 5.38537 19.0244 10.2333C19.0244 15.0812 15.0812 19.035 10.2279 19.035C5.38004 19.035 1.43149 15.0865 1.43149 10.2333Z"
                                    fill="#FE9063"></path>
                            </svg>
                        </span>
                    </div>
                </form>
                <div class="canvas-height mt-4 dz-scroll">
                    <ul class="share-list">
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img
                                        src="{{ asset('template/assets/images/stories/small/pic1.jpg') }}"
                                        alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">Andy Lee</h6>
                                    <span class="username">mr_andy_lee</span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img
                                        ssrc="{{ asset('template') }}/assets/images/stories/small/pic2.jpg"
                                        alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">Brian Harahap</h6>
                                    <span class="username">brian_harahap</span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img
                                        ssrc="{{ asset('template') }}/assets/images/stories/small/pic3.jpg"
                                        alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">Christian Hang</h6>
                                    <span class="username">christian_Hang</span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img
                                        ssrc="{{ asset('template') }}/assets/images/stories/small/pic4.jpg"
                                        alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">Chloe Mc. Jenskin</h6>
                                    <span class="username">chloe_mc_jenskin</span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img
                                        ssrc="{{ asset('template') }}/assets/images/stories/small/pic5.jpg"
                                        alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">David Bekam</h6>
                                    <span class="username">david_bekam</span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img
                                        ssrc="{{ asset('template') }}/assets/images/stories/small/pic6.jpg"
                                        alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">Donas High</h6>
                                    <span class="username">donas_high</span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img
                                        ssrc="{{ asset('template') }}/assets/images/stories/small/pic7.jpg"
                                        alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">Lee Comfort</h6>
                                    <span class="username">lee_comfort</span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img
                                        ssrc="{{ asset('template') }}/assets/images/stories/small/pic8.jpg"
                                        alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">Michel Evon</h6>
                                    <span class="username">michel_evon</span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img
                                        ssrc="{{ asset('template') }}/assets/images/stories/small/pic4.jpg"
                                        alt="/"></a>
                                <a href="user-profile.html">
                                    <h6 class="name">Yatin</h6>
                                    <span class="username">yatin_325</span>
                                </a>
                            </div>
                            <a href="javascript:void(0);" class="btn btn-primary btn-sm">Send</a>
                        </li>
                        <li>
                            <div class="left-content">
                                <a href="user-profile.html"><img
                                        ssrc="{{ asset('template') }}/assets/images/stories/small/pic3.jpg"
                                        alt="/"></a>
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
                        <input class="filled-in" id="primary_color_8" name="theme_color" type="radio"
                            value="color-primary" />
                        <label for="primary_color_8"></label>
                        <span>Default</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_2" name="theme_color" type="radio"
                            value="color-green" />
                        <label for="primary_color_2"></label>
                        <span>Green</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_3" name="theme_color" type="radio"
                            value="color-blue" />
                        <label for="primary_color_3"></label>
                        <span>Blue</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_4" name="theme_color" type="radio"
                            value="color-pink" />
                        <label for="primary_color_4"></label>
                        <span>Pink</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_5" name="theme_color" type="radio"
                            value="color-yellow" />
                        <label for="primary_color_5"></label>
                        <span>Yellow</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_6" name="theme_color" type="radio"
                            value="color-orange" />
                        <label for="primary_color_6"></label>
                        <span>Orange</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_7" name="theme_color" type="radio"
                            value="color-purple" />
                        <label for="primary_color_7"></label>
                        <span>Purple</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_1" name="theme_color" type="radio"
                            value="color-red" />
                        <label for="primary_color_1"></label>
                        <span>Red</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_9" name="theme_color" type="radio"
                            value="color-lightblue" />
                        <label for="primary_color_9"></label>
                        <span>Lightblue</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_10" name="theme_color" type="radio"
                            value="color-teal" />
                        <label for="primary_color_10"></label>
                        <span>Teal</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_11" name="theme_color" type="radio"
                            value="color-lime" />
                        <label for="primary_color_11"></label>
                        <span>Lime</span>
                    </li>
                    <li>
                        <input class="filled-in" id="primary_color_12" name="theme_color" type="radio"
                            value="color-deeporange" />
                        <label for="primary_color_12"></label>
                        <span>Deeporange</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="{{ asset('template') }}/assets/js/jquery.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js">
    </script>
    <script src="{{ asset('template') }}/assets/js/dz.carousel.js"></script>
    <script src="{{ asset('template') }}/assets/js/settings.js"></script>
    <script src="{{ asset('template') }}/assets/js/custom.js"></script>
    <script src="{{ asset('template') }}/index.js"></script>
    <script>
        $(".stepper").TouchSpin();
    </script>
    @include('sweetalert::alert')
</body>

</html>
