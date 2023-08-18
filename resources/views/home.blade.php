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
                                <a href="story.html" class="categore-box">
                                    <div class="story-bx">
                                        <img src="{{ asset('template') }}/assets/images/stories/small/pic2.jpg"
                                            alt="/">
                                    </div>
                                    <span class="detail">Richard</span>
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
                                <img class="rounded" src="{{ asset('template') }}/assets/images/stories/small/pic4.jpg"
                                    alt="/">
                            </a>
                            <div class="meta-content ms-3">
                                <h6 class="title mb-0"><a href="user-profile.html">Lucas Mokmana</a></h6>
                                <ul class="meta-list">
                                    <li>
                                        <i class="fa fa-check" aria-hidden="true"></i>
                                        Sudah di proses
                                    </li>
                                    <li>2m ago</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <p class="text-black">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do sum sit emat 😎😎
                    </p>
                    <div class="dz-media">
                        <img src="{{ asset('template') }}/assets/images/post/pic1.png" alt="/">
                        <div class="post-meta-btn">
                            <ul>
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
