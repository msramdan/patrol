@extends('layouts.app')

@section('content')
<div class="content-inner pt-0">
                <div class="container p-b50">
                
                    <!-- STORY -->
                    <div class="author-notification mb-4">
                        <div class="swiper-btn-center-lr my-0">
                            <div class="swiper-container categorie-swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="story.html" class="categore-box style-1">
                                            <div class="story-bx">
                                                <img src="{{ asset('template') }}/assets/images/stories/small/pic8.jpg" alt="/">
                                                <div class="add-box">
                                                    <i class="fa-solid fa-plus"></i>
                                                </div>
                                            </div>
                                            <span class="detail">Your Story</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="live-story.html" class="categore-box">
                                            <div class="story-bx">
                                                <img src="{{ asset('template') }}/assets/images/stories/small/pic1.jpg" alt="/">
                                                <div class="live-text">Live</div>
                                            </div>
                                            <span class="detail">Emilia</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="story.html" class="categore-box">
                                            <div class="story-bx">
                                                <img src="{{ asset('template') }}/assets/images/stories/small/pic2.jpg" alt="/">
                                            </div>
                                            <span  class="detail">Richard</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="story.html" class="categore-box">
                                            <div class="story-bx">
                                                <img src="{{ asset('template') }}/assets/images/stories/small/pic3.jpg" alt="/">
                                            </div>
                                            <span  class="detail">Jasmine</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="story.html" class="categore-box" >
                                            <div class="story-bx">
                                                <img src="{{ asset('template') }}/assets/images/stories/small/pic4.jpg" alt="/">
                                            </div>
                                            <span  class="detail">Lucas</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="story.html" class="categore-box" >
                                            <div class="story-bx">
                                                <img src="{{ asset('template') }}/assets/images/stories/small/pic5.jpg" alt="/">
                                            </div>
                                            <span  class="detail">Hendri</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="story.html" class="categore-box" >
                                            <div class="story-bx">
                                                <img src="{{ asset('template') }}/assets/images/stories/small/pic6.jpg" alt="/">
                                            </div>
                                            <span  class="detail">Carla</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="live-story.html" class="categore-box" >
                                            <div class="story-bx">
                                                <img src="{{ asset('template') }}/assets/images/stories/small/pic7.jpg" alt="/">
                                                <div class="live-text">Live</div>
                                            </div>
                                            <span  class="detail">Jermy</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="story.html" class="categore-box" >
                                            <div class="story-bx">
                                                <img src="{{ asset('template') }}/assets/images/stories/small/pic5.jpg" alt="/">
                                            </div>
                                            <span  class="detail">Kerry</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="story.html" class="categore-box" >
                                            <div class="story-bx">
                                                <img src="{{ asset('template') }}/assets/images/stories/small/pic6.jpg" alt="/">
                                            </div>
                                            <span  class="detail">Perry</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- STORY -->
                    <div class="post-area">
                        <div class="post-card">
                            <div class="top-meta">
                                <div class="d-flex justify-content-between align-items-start">
                                    <a href="user-profile.html" class="media media-40">
                                        <img class="rounded" src="{{ asset('template') }}/assets/images/stories/small/pic4.jpg" alt="/">
                                    </a>
                                    <div class="meta-content ms-3">
                                        <h6 class="title mb-0"><a href="user-profile.html">Lucas Mokmana</a></h6>
                                        <ul class="meta-list">
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.25 5.83331C12.25 9.91665 7 13.4166 7 13.4166C7 13.4166 1.75 9.91665 1.75 5.83331C1.75 4.44093 2.30312 3.10557 3.28769 2.121C4.27226 1.13644 5.60761 0.583313 7 0.583313C8.39239 0.583313 9.72774 1.13644 10.7123 2.121C11.6969 3.10557 12.25 4.44093 12.25 5.83331Z" stroke="black" stroke-opacity="0.6" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7 7.58331C7.9665 7.58331 8.75 6.79981 8.75 5.83331C8.75 4.86681 7.9665 4.08331 7 4.08331C6.0335 4.08331 5.25 4.86681 5.25 5.83331C5.25 6.79981 6.0335 7.58331 7 7.58331Z" stroke="black" stroke-opacity="0.6" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>	
                                                Bangkok, Thailand
                                            </li>
                                            <li>2m ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="item-content item-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1" aria-controls="offcanvasBottom">
                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.7566 4.93237L9.60021 0.182841C9.14886 -0.23294 8.4375 0.104591 8.4375 0.750465V3.25212C3.73157 3.30959 0 4.31562 0 9.07267C0 10.9927 1.1596 12.8948 2.4414 13.8893C2.84139 14.1996 3.41145 13.8101 3.26397 13.3071C1.93553 8.77542 3.89405 7.57236 8.4375 7.50264V10.25C8.4375 10.8969 9.14942 11.2329 9.60021 10.8176L14.7566 6.06761C15.0809 5.7688 15.0814 5.23158 14.7566 4.93237Z" fill="#E4BEAB"/>
                                    </svg>
                                </a>
                            </div>
                            <p class="text-black">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do sum sit emat 😎😎
                            </p>
                            <div class="dz-media">
                                <img src="{{ asset('template') }}/assets/images/post/pic1.png" alt="/">
                                <div class="post-meta-btn">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);" class="action-btn bg-primary">
                                                <i class="fa-regular fa-heart fill-icon"></i>
                                                <i class="fa-solid fa-heart fill-icon-2"></i>
                                                <h6 class="font-14 mb-0 ms-2" id="value1">221</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="comment.html" class="action-btn bg-secondary">
                                                <i class="fa-solid fa-comment fill-icon"></i>
                                                <h6 class="font-14 mb-0 ms-2">150</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="post-card">
                            <div class="top-meta">
                                <div class="d-flex justify-content-between align-items-start">
                                    <a href="user-profile.html" class="media media-40">
                                        <img class="rounded" src="{{ asset('template') }}/assets/images/stories/small/pic6.jpg" alt="/">
                                    </a>
                                    <div class="meta-content ms-3">
                                        <h6 class="title mb-0"><a href="user-profile.html">Hendri Lee</a></h6>
                                        <ul class="meta-list">
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.25 5.83331C12.25 9.91665 7 13.4166 7 13.4166C7 13.4166 1.75 9.91665 1.75 5.83331C1.75 4.44093 2.30312 3.10557 3.28769 2.121C4.27226 1.13644 5.60761 0.583313 7 0.583313C8.39239 0.583313 9.72774 1.13644 10.7123 2.121C11.6969 3.10557 12.25 4.44093 12.25 5.83331Z" stroke="black" stroke-opacity="0.6" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7 7.58331C7.9665 7.58331 8.75 6.79981 8.75 5.83331C8.75 4.86681 7.9665 4.08331 7 4.08331C6.0335 4.08331 5.25 4.86681 5.25 5.83331C5.25 6.79981 6.0335 7.58331 7 7.58331Z" stroke="black" stroke-opacity="0.6" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>	
                                                Shibuya, Japan
                                            </li>
                                            <li>2m ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="item-content item-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1" aria-controls="offcanvasBottom">
                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.7566 4.93237L9.60021 0.182841C9.14886 -0.23294 8.4375 0.104591 8.4375 0.750465V3.25212C3.73157 3.30959 0 4.31562 0 9.07267C0 10.9927 1.1596 12.8948 2.4414 13.8893C2.84139 14.1996 3.41145 13.8101 3.26397 13.3071C1.93553 8.77542 3.89405 7.57236 8.4375 7.50264V10.25C8.4375 10.8969 9.14942 11.2329 9.60021 10.8176L14.7566 6.06761C15.0809 5.7688 15.0814 5.23158 14.7566 4.93237Z" fill="#E4BEAB"/>
                                    </svg>
                                </a>
                            </div>
                            <p class="text-black">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do sum sit emat 😎😎
                            </p>
                            <div class="dz-media">
                                <img src="{{ asset('template') }}/assets/images/post/pic2.png" alt="/">
                                <div class="post-meta-btn">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);" class="action-btn bg-primary">
                                                <i class="fa-regular fa-heart fill-icon"></i>
                                                <i class="fa-solid fa-heart fill-icon-2"></i>
                                                <h6 class="font-14 mb-0 ms-2" id="value1">221</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="comment.html" class="action-btn bg-secondary">
                                                <i class="fa-solid fa-comment fill-icon"></i>
                                                <h6 class="font-14 mb-0 ms-2">150</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="post-card">
                            <div class="top-meta">
                                <div class="d-flex justify-content-between align-items-start">
                                    <a href="user-profile.html" class="media media-40">
                                        <img class="rounded" src="{{ asset('template') }}/assets/images/stories/small/pic2.jpg" alt="/">
                                    </a>
                                    <div class="meta-content ms-3">
                                        <h6 class="title mb-0"><a href="user-profile.html">Thomas Edison</a></h6>
                                        <ul class="meta-list">
                                            <li>
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M12.25 5.83331C12.25 9.91665 7 13.4166 7 13.4166C7 13.4166 1.75 9.91665 1.75 5.83331C1.75 4.44093 2.30312 3.10557 3.28769 2.121C4.27226 1.13644 5.60761 0.583313 7 0.583313C8.39239 0.583313 9.72774 1.13644 10.7123 2.121C11.6969 3.10557 12.25 4.44093 12.25 5.83331Z" stroke="black" stroke-opacity="0.6" stroke-linecap="round" stroke-linejoin="round"/>
                                                    <path d="M7 7.58331C7.9665 7.58331 8.75 6.79981 8.75 5.83331C8.75 4.86681 7.9665 4.08331 7 4.08331C6.0335 4.08331 5.25 4.86681 5.25 5.83331C5.25 6.79981 6.0335 7.58331 7 7.58331Z" stroke="black" stroke-opacity="0.6" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>	
                                                Bangkok, Thailand
                                            </li>
                                            <li>2m ago</li>
                                        </ul>
                                    </div>
                                </div>
                                <a href="javascript:void(0);" class="item-content item-link" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom1" aria-controls="offcanvasBottom">
                                    <svg width="15" height="14" viewBox="0 0 15 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.7566 4.93237L9.60021 0.182841C9.14886 -0.23294 8.4375 0.104591 8.4375 0.750465V3.25212C3.73157 3.30959 0 4.31562 0 9.07267C0 10.9927 1.1596 12.8948 2.4414 13.8893C2.84139 14.1996 3.41145 13.8101 3.26397 13.3071C1.93553 8.77542 3.89405 7.57236 8.4375 7.50264V10.25C8.4375 10.8969 9.14942 11.2329 9.60021 10.8176L14.7566 6.06761C15.0809 5.7688 15.0814 5.23158 14.7566 4.93237Z" fill="#E4BEAB"/>
                                    </svg>
                                </a>
                            </div>
                            <p class="text-black">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do sum sit emat 😎😎
                            </p>
                            <div class="dz-media">
                                <img src="{{ asset('template') }}/assets/images/post/pic8.png" alt="/">
                                <div class="post-meta-btn">
                                    <ul>
                                        <li>
                                            <a href="javascript:void(0);" class="action-btn bg-primary">
                                                <i class="fa-regular fa-heart fill-icon"></i>
                                                <i class="fa-solid fa-heart fill-icon-2"></i>
                                                <h6 class="font-14 mb-0 ms-2" id="value1">221</h6>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="comment.html" class="action-btn bg-secondary">
                                                <i class="fa-solid fa-comment fill-icon"></i>
                                                <h6 class="font-14 mb-0 ms-2">150</h6>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
@endsection
