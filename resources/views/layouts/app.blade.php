<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.css">
    <link rel="stylesheet" href="{{ asset('template') }}/assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js">
    </script>
    @php
        use Illuminate\Support\Facades\Auth;
    @endphp
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
                        <h4 class="title mb-0">{{ empty($title)?'':$title }}</h4>
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
        @include('layouts.sidebar')


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
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <script src="{{ asset('template') }}/assets/js/dz.carousel.js"></script>
    <script src="{{ asset('template') }}/assets/js/settings.js"></script>
    <script src="{{ asset('template') }}/assets/js/custom.js"></script>
    <script src="{{ asset('template') }}/index.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script>

    <script>
        $(".stepper").TouchSpin();
    </script>

    @stack('js')
    @include('sweetalert::alert')
</body>

</html>
