<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from soziety.dexignzone.com/xhtml/edit-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Aug 2023 02:37:20 GMT -->

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
    <meta name="theme-color" content="#2196f3">
    <meta name="author" content="DexignZone" />
    <meta name="keywords" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="Soziety - Social Network Mobile App Template ( Bootstrap 5 + PWA )" />
    <meta property="og:title" content="Soziety - Social Network Mobile App Template ( Bootstrap 5 + PWA )" />
    <meta property="og:description" content="Soziety - Social Network Mobile App Template ( Bootstrap 5 + PWA )" />
    <meta property="og:image" content="error.html" />
    <meta name="format-detection" content="telephone=no">

    <!-- Favicons Icon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png" />

    <!-- Title -->
    <title>Laporan</title>

    <!-- Stylesheets -->
    <!-- Stylesheets -->
    <link href="{{ asset('template') }}/assets/vendor/lightgallery/dist/css/lightgallery.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/vendor/lightgallery/dist/css/lg-thumbnail.css" rel="stylesheet">
    <link href="{{ asset('template') }}/assets/vendor/lightgallery/dist/css/lg-zoom.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/style.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
</head>

<body>
    <div class="page-wraper header-fixed">

        <!-- Preloader -->
        <div id="preloader">
            <div class="spinner"></div>
        </div>
        <!-- Preloader end-->

        <!-- Header -->
        <header class="header bg-white">
            <div class="container">
                <div class="main-bar">
                    <div class="left-content">
                        <a href="{{ route('home') }}" class="back-btn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </a>
                        <h4 class="title mb-0">Laporan</h4>
                    </div>
                    <div class="mid-content">
                    </div>
                    <div class="right-content">
                        <a href="#" class="text-dark font-20" id="submit">
                            <i class="fa-solid fa-check"></i>
                        </a>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header End -->

        <!-- Page Content -->
        <div class="page-content">
            <div class="container">
                <div class="edit-profile">
                    
                    <form action="{{ route('report.save') }}" method="post" enctype="multipart/form-data" id="form">
                        @csrf
                        
                        @error('judul')
                            <div class="alert text-danger mb-0">{{ $message }}</div>
                        @enderror
                        <div class="mb-3 input-group input-mini">
                            <input name="judul" type="text" value="{{ old('judul') }}" class="form-control" placeholder="Judul Laporan">
                        </div>
                    
                        @error('phone')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3 input-group input-mini">
                            <input name="phone" type="text" value="{{ old('phone') }}" class="form-control" placeholder="Nomor Handphone">
                        </div>
                        @error('photo')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                        <div class="mb-3 input-group input-mini">
                            <input name="photo" type="file" class="form-control" >
                        </div>
                    
                        <div class="mb-3 input-group input-mini">
                            @error('deskripsi')
                                <div class="alert text-danger">{{ $message }}</div>
                            @enderror
                            <textarea name="deskripsi" id="" cols="30" rows="10" class="form-control" placeholder="Deskripsi">{{ old('deskripsi') }}</textarea>
                        </div>
                    
                        <button style="display: none" type="submit" class="btn btn-primary">Submit</button>
                    </form>
                    
                </div>
            </div>
        </div>
        <!-- Page Content End-->
    </div>
    <!--**********************************
    Scripts
***********************************-->
    <script src="{{ asset('template') }}/assets/js/jquery.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/lightgallery/dist/lightgallery.umd.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/lightgallery/dist/plugins/thumbnail/lg-thumbnail.umd.js"></script>
    <script src="{{ asset('template') }}/assets/vendor/lightgallery/dist/plugins/zoom/lg-zoom.umd.js"></script>
    <script src="{{ asset('template') }}/assets/js/settings.js"></script>
    <script src="{{ asset('template') }}/assets/js/custom.js"></script>

    <script>
        $(document).ready(function () {
            $('#submit').click(function (e) { 
                $('#form').submit();
            });
        });
    </script>

    <!-- Mirrored from soziety.dexignzone.com/xhtml/edit-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Aug 2023 02:37:20 GMT -->

</html>