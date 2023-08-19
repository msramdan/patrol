@extends('layouts.app')

@section('content')
<div class="content-inner pt-0">
    <div class="container p-b50">
        
        <!-- STORY -->
        <div class="author-notification mb-4">
            <div class="swiper-btn-center-lr my-0">
                <div class="swiper-container categorie-swiper">
                    <div class="swiper-wrapper">
                        @foreach ($users as $user)
                        <div class="swiper-slide">
                            <a href="story.html" class="categore-box">
                                <div class="story-bx">
                                    @if (empty($user->photo))
                                        <img src=" {{ asset('template') }}/assets/images/stories/small/pic4.jpg" alt="/">
                                    @else
                                        <img src="{{ asset('storage/img/'.$user->photo) }}" alt="/">
                                    @endif
                                </div>
                                <span class="detail text-container" style="width: 1rem;">{{ $user->name }}</span>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- STORY -->

        <div class="post-area">
            
            @foreach ($reports as $report)
            <div class="post-card">
                <div class="top-meta">
                    <div class="d-flex justify-content-between align-items-start">
                        <a href="user-profile.html" class="media media-40">
                            @if (empty($report->user_photo))
                                <img class="rounded" src="{{ asset('template') }}/assets/images/stories/small/pic4.jpg" alt="/">
                            @else
                            {{-- SEMENTARA --}}
                                <img class="rounded" src="{{ asset('template') }}/assets/images/stories/small/pic4.jpg" alt="/">
                            @endif
                        </a>
                        <div class="meta-content ms-3">
                            <h6 class="title mb-0"><a href="user-profile.html">{{ $report->user_name }}</a></h6>
                            <ul class="meta-list">
                                <li>
                                    <i class="fa fa-uncheck" aria-hidden="true"></i>
                                    @if ($report->status_laporan == 'request')
                                        Belum di proses
                                    @else
                                        Sudah di proses
                                    @endif
                                </li>
                                <li>
                                    {{ \Carbon\Carbon::parse($report->tanggal)->diffForHumans() }}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <p class="text-black">
                    {{ $report->deskripsi }}
                </p>
                <div class="dz-media">
                    <img src="{{ asset('storage/photos/'.$report->photo) }}" alt="/">
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
            @endforeach


        </div>
        <div class="d-flex justify-content-center">
            {{ $reports->links() }}
        </div>
        
        


    </div>
</div>
@endsection