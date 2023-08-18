@extends('layouts.app')

@section('content')

<div class="container profile-area">
    <div class="profile">
        <div class="main-profile">
            <div class="left-content">
                <span>@joviedan</span>
                <h5 class="mt-1">Jovi Daniel Jr.</h5>
                <h6 class="text-primary font-w400">Photographer</h6>
            </div>
            <div class="right-content">
                <div class="upload-box">
                    <img src="assets/images/stories/pic1.png" alt="/">
                    <a href="edit-profile.html" class="upload-btn"><i class="fa-solid fa-pencil"></i></a>
                </div>
            </div>
        </div>
        <div class="info">
            <h6>About me</h6>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do sum sit ematons ectetur adipiscing elit, sed do sum sit emat.
            </p>
        </div>
    </div>
    <div class="contant-section">
        <div class="social-bar">
            <ul>
                <li class="active">
                    <a href="javascript:void(0);">
                        <h4>52</h4>
                        <span>Post</span>
                    </a>
                </li>
                <li>
                    <a href="social-friends.html">
                        <h4>250</h4>
                        <span>Following</span>
                    </a>
                </li>
                <li>
                    <a href="social-friends.html">
                        <h4>4.5k</h4>
                        <span>Followers</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="title-bar my-2">
            <h6 class="mb-0">My Posts</h6>
            <div class="dz-tab style-2">
                <ul class="nav nav-tabs" id="myTab3" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="home-tab3" data-bs-toggle="tab" data-bs-target="#home-tab-pane3" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 3H3V10H10V3Z" stroke="var(--primary)" stroke-width="2" stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M21 3H14V10H21V3Z" stroke="var(--primary)" stroke-width="2" stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M21 14H14V21H21V14Z" stroke="var(--primary)" stroke-width="2" stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M10 14H3V21H10V14Z" stroke="var(--primary)" stroke-width="2" stroke-opacity="0.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab3" data-bs-toggle="tab" data-bs-target="#profile-tab-pane3" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 6H21" stroke="var(--primary)" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8 12H21" stroke="var(--primary)" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8 18H21" stroke="var(--primary)" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3 6H3.01" stroke="var(--primary)" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3 12H3.01" stroke="var(--primary)" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3 18H3.01" stroke="var(--primary)" stroke-opacity="0.5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                    </li>
            </div>
        </div>
        <div class="tab-content" id="myTabContent3">
            <div class="tab-pane fade show active" id="home-tab-pane3" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                <div class="dz-lightgallery style-2" id="lightgallery">
                    <a class="gallery-box" href="assets/images/post/pic1.png">
                        <img src="assets/images/post/pic1.png" alt="image">
                    </a>
                    <a class="gallery-box" href="assets/images/post/pic2.png">
                        <img src="assets/images/post/pic2.png" alt="image">
                    </a>
                    <a class="gallery-box" href="assets/images/post/pic3.png">
                        <img src="assets/images/post/pic3.png" alt="image">
                    </a>
                    <a class="gallery-box" href="assets/images/post/pic4.png">
                        <img src="assets/images/post/pic4.png" alt="image">
                    </a>
                    <a class="gallery-box" href="assets/images/post/pic5.png">
                        <img src="assets/images/post/pic5.png" alt="image">
                    </a>
                    <a class="gallery-box" href="assets/images/post/pic6.png">
                        <img src="assets/images/post/pic6.png" alt="image">
                    </a>
                    <a class="gallery-box" href="assets/images/post/pic7.png">
                        <img src="assets/images/post/pic7.png" alt="image">
                    </a>
                    <a class="gallery-box" href="assets/images/post/pic8.png">
                        <img src="assets/images/post/pic8.png" alt="image">
                    </a>
                </div>
            </div>
            <div class="tab-pane fade" id="profile-tab-pane3" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                <div class="dz-lightgallery" id="lightgallery-2">
                    <a class="gallery-box" href="assets/images/post/pic4.png">
                        <img src="assets/images/post/pic4.png" alt="image">
                    </a>
                    <a class="gallery-box" href="assets/images/post/pic3.png">
                        <img src="assets/images/post/pic3.png" alt="image">
                    </a>
                    <a class="gallery-box" href="assets/images/post/pic2.png">
                        <img src="assets/images/post/pic2.png" alt="image">
                    </a>
                    <a class="gallery-box" href="assets/images/post/pic1.png">
                        <img src="assets/images/post/pic1.png" alt="image">
                    </a>
                    <a class="gallery-box" href="assets/images/post/pic9.png">
                        <img src="assets/images/post/pic9.png" alt="image">
                    </a>
                    <a class="gallery-box" href="assets/images/post/pic12.png">
                        <img src="assets/images/post/pic12.png" alt="image">
                    </a>
                    <a class="gallery-box" href="assets/images/post/pic5.png">
                        <img src="assets/images/post/pic5.png" alt="image">
                    </a>
                    <a class="gallery-box" href="assets/images/post/pic6.png">
                        <img src="assets/images/post/pic6.png" alt="image">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection