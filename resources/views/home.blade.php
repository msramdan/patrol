@extends('layouts.app')

@section('content')
    <style>
        .detail.text-container {
            width: 100%;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
    </style>
    <div class="content-inner pt-0">
        <div class="container p-b50">

            <!-- STORY -->
            <div class="author-notification mb-4">
                <div class="swiper-btn-center-lr my-0">
                    <div class="swiper-container categorie-swiper">
                        <div class="swiper-wrapper">
                            @foreach ($users as $user)
                                <div class="swiper-slide">
                                    <a href="{{ route('profile.detail', ['id' => encrypt($user->id)]) }}" class="categore-box">
                                        <div class="story-bx">
                                            @if (empty($user->photo))
                                                <img src=" {{ asset('template') }}/assets/images/stories/small/pic4.jpg"
                                                    alt="/">
                                            @else
                                                <img src="{{ asset('storage/profiles/' . $user->photo) }}" alt="/">
                                            @endif
                                        </div>
                                        <span
                                            class="detail text-container">{{ substr(explode(' ', $user->name)[0], 0, 8) }}</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- STORY -->

            <form action="{{ route('home') }}" method="get">
                <div class="row mb-3">
                    <div class="col-md-3">
                        <div class="mb-3 input-group input-group-icon">
                            <span class="input-group-text">
                                <div class="input-icon">
                                    <i class="fa-solid fa-calendar"></i>
                                </div>
                            </span>
                            <input type="date" class="form-control" name="start_date" value="{{ request('start_date') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="mb-3 input-group input-group-icon">
                            <span class="input-group-text">
                                <div class="input-icon">
                                    <i class="fa-solid fa-calendar"></i>
                                </div>
                            </span>
                            <input type="date" class="form-control" name="end_date" value="{{ request('end_date') }}">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <select class="mb-3" name="no_laporan">
                            <option value=""></option>
                            @foreach ($no_laporans as $no_laporan)
                                <option {{ request('no_laporan')==$no_laporan->no_laporan?'selected':'' }} >{{ $no_laporan->no_laporan }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <div class="col-md-2" >
                        <button type="submit" class="btn btn-primary w-40" id="filter" style="float: left; margin-right:5px"><i class="fa fa-filter" aria-hidden="true"></i> Filter</button>
                    </div>
                    
                </div>
            </form>
            <div class="post-area">

                @foreach ($reports as $report)
                    <div class="post-card">
                        <div class="top-meta">
                            <div class="d-flex justify-content-between align-items-start">
                                <a href="user-profile.html" class="media media-40">
                                    @if (empty($report->user_photo))
                                        <img class="rounded"
                                            src="{{ asset('template') }}/assets/images/stories/small/pic4.jpg"
                                            alt="/">
                                    @else
                                        <img class="rounded" src="{{ asset('storage/profiles/' . $report->user_photo) }}"
                                            alt="/">
                                    @endif
                                </a>
                                <div class="meta-content ms-3">
                                    <h6 class="title mb-0"><a href="user-profile.html">{{ $report->user_name }}</a></h6>
                                    <ul class="meta-list" style="padding-left: 0px">
                                        <li>
                                            @if ($report->status_laporan == 'request')
                                                <span class="badge bg-secondary"><i class="fa fa-refresh"
                                                        aria-hidden="true"></i> Belum di proses</span>
                                            @else
                                                <span class="badge bg-success"><i class="fa fa-check"
                                                        aria-hidden="true"></i> Sudah di proses</span>
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
                            <img src="{{ asset('storage/photos/' . $report->photo) }}" alt="/">
                            <div class="post-meta-btn">
                                <ul>
                                    <li>
                                        <a href="{{ route('comment',['id'=>encrypt($report->id)]) }}" class="action-btn bg-secondary">
                                            <i class="fa-solid fa-comment fill-icon"></i>
                                            <h6 class="font-14 mb-0 ms-2">{{ $report->comment_count }}</h6>
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
