<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from soziety.dexignzone.com/xhtml/comment.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Aug 2023 02:36:52 GMT -->
<head>
	
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui, viewport-fit=cover">
	<meta name="theme-color" content="#2196f3">
	<meta name="author" content="DexignZone" /> 
    <meta name="keywords" content="" /> 
    <meta name="robots" content="" /> 
	<meta name="description" content="Soziety - Social Network Mobile App Template ( Bootstrap 5 + PWA )"/>
	<meta property="og:title" content="Soziety - Social Network Mobile App Template ( Bootstrap 5 + PWA )" />
	<meta property="og:description" content="Soziety - Social Network Mobile App Template ( Bootstrap 5 + PWA )" />
	<meta property="og:image" content="error.html"/>
	<meta name="format-detection" content="telephone=no">
    
    <!-- Favicons Icon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('template') }}/assets/images/favicon.png" />
    
    <!-- Title -->
	<title>Comment</title>
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('template') }}/assets/css/style.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
	<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@200;300;400;600;700;800;900&amp;family=Poppins:wght@100;200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
	


</head>    
</head>   
<body class="bg-white">
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
						<i class="fa-solid fa-arrow-left"></i>
					</a>
					<h4 class="title mb-0">Comments</h4>
				</div>
				<div class="mid-content">
				</div>
				<div class="right-content">
				</div>
			</div>
		</div>
	</header>
    <!-- Header End -->
	
    <!-- Page Content -->
    <div class="page-content">
        <div class="container profile-area bottom-content">	
			<ul class="dz-comments-list">
				@foreach ($comments as $comment)
				<li>
					<div class="list-content">
						@if (empty($comment->photo))
							<img class="rounded"
								src="{{ asset('template') }}/assets/images/stories/small/pic4.jpg" alt="Profile">
						@else
							<img class="rounded" src="{{ asset('storage/profiles/' . $comment->photo) }}" alt="Profile">
						@endif

						<div>
							<h6 class="font-14 mb-1">{{ $comment->name }}</h6>
							<p class="mb-2">{{ $comment->deskripsi }}</p>
							<ul class="bottom-item">
								{{-- <li class="text-light">3 Like</li> --}}
								<li class="text-light reply" data-reff="{{ $comment->id }}">Reply</li>
								{{-- <li class="text-light">Send</li> --}}
							</ul>
						</div>
					</div>
					{{-- <div class="ms-auto"><div class="like-button"><i class="fa-regular fa-heart ms-auto"></i></div></div> --}}
					@php
						$sub_comments = App\Models\ReportComment::where('laporan_id', $comment->laporan_id)
						->leftJoin('users', 'report_comments.user_id', '=', 'users.id')
						->select(
							'report_comments.*',
							'users.name as name',
							'users.photo as photo',
						)
						->where('report_comments.reff', $comment->id)
						->get();
					@endphp
					@foreach ($sub_comments as $sub_comment)
					<li class="parent-list">
						<div class="list-content">
							@if (empty($sub_comment->photo))
								<img class="rounded" src="{{ asset('template') }}/assets/images/stories/small/pic4.jpg" alt="Profile">
							@else
								<img class="rounded" src="{{ asset('storage/profiles/' . $sub_comment->photo) }}" alt="Profile">
							@endif

							<div>
								<h6 class="font-14 mb-1">{{ $sub_comment->name }}</h6>
								<p class="mb-2">{{ $sub_comment->deskripsi }}</p>
								<ul class="bottom-item">
									<li class="text-light reply" data-reff="{{ $comment->id }}">Reply</li>
									{{-- <li class="text-light">Send</li> --}}
								</ul>
							</div>
						</div>
						{{-- <div class="ms-auto"><div class="like-button"><i class="fa-regular fa-heart ms-auto"></i></div></div>				 --}}
					</li>
					@endforeach
					
					
					
				</li>
					
				@endforeach
				
			</div>
        </div>
		<footer class="footer fixed border-top">
        <div class="container py-2">
            <div class="commnet-footer">
				<div class="d-flex align-items-center flex-1">
					<div class="media media-40 rounded-circle">
						@if (empty(Illuminate\Support\Facades\Auth::user()->photo))
								<img class="rounded" src="{{ asset('template') }}/assets/images/stories/small/pic4.jpg" alt="Profile">
							@else
								<img class="rounded" src="{{ asset('storage/profiles/' . Illuminate\Support\Facades\Auth::user()->photo) }}" alt="Profile">
							@endif
					</div>
					<form class="flex-1" method="post" action="{{ route('comment.save') }}" >
						@csrf
						<input type="hidden" name="report_id" value="{{ $id }}">
						<input type="hidden" name="reff" id="reff">
						<input type="text"  name="deskripsi" class="form-control" placeholder="Add a Comments..."/>
						<button type="submit" style="display: none" id="submit" ></button>
					</form>
				</div>
				<a href="javascript:void(0);" class="send-btn" id="send-btn">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M21.4499 11.11L3.44989 2.11C3.27295 2.0187 3.07279 1.9823 2.87503 2.00546C2.67728 2.02862 2.49094 2.11029 2.33989 2.24C2.18946 2.37064 2.08149 2.54325 2.02982 2.73567C1.97815 2.9281 1.98514 3.13157 2.04989 3.32L4.99989 12L2.09989 20.68C2.05015 20.8267 2.03517 20.983 2.05613 21.1364C2.0771 21.2899 2.13344 21.4364 2.2207 21.5644C2.30797 21.6924 2.42378 21.7984 2.559 21.874C2.69422 21.9496 2.84515 21.9927 2.99989 22C3.15643 21.9991 3.31057 21.9614 3.44989 21.89L21.4499 12.89C21.6137 12.8061 21.7512 12.6786 21.8471 12.5216C21.9431 12.3645 21.9939 12.184 21.9939 12C21.9939 11.8159 21.9431 11.6355 21.8471 11.4784C21.7512 11.3214 21.6137 11.1939 21.4499 11.11ZM4.70989 19L6.70989 13H16.7099L4.70989 19ZM6.70989 11L4.70989 5L16.7599 11H6.70989Z" fill="#40189D"></path>
					</svg>
				</a>
            </div>    
        </div>
    </footer>
    </div>
    <!-- Page Content End-->
	
</div> 
<!--**********************************
    Scripts
***********************************-->
<script src="{{ asset('template') }}/assets/js/jquery.js"></script>
<script src="{{ asset('template') }}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('template') }}/assets/js/settings.js"></script>
<script src="{{ asset('template') }}/assets/js/custom.js"></script>
<script>
	$(document).ready(function () {
		$('#send-btn').click(function (e) { 
			$('#submit').click();
		});
		$('.reply').click(function(){
			var reff = $(this).attr('data-reff');
			$('#reff').val(reff);
		});

	});
</script>


</body>

<!-- Mirrored from soziety.dexignzone.com/xhtml/comment.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Aug 2023 02:36:52 GMT -->
</html>