@extends('layouts.app')

@section('content')
<div class="container profile-area">
    <div class="profile">
        <div class="main-profile">
            <div class="left-content">
                <span>{{ $user->email }}</span>
                <h5 class="mt-1">{{ $user->name }}</h5>
                <h6 class="text-primary font-w400">{{ $user->phone }}</h6>
            </div>
            <div class="right-content">
                <div class="upload-box">
                    @if (empty($user->photo))
                                <img src="{{ asset('template') }}/assets/images/stories/small/pic4.jpg" alt="{{ $user->name }}">
                            @else

                                <img src="{{ asset('storage/profiles/'.$user->photo) }}" alt="{{ $user->name }}">
                            @endif
                    <a href="{{ route('profile.edit') }}" class="upload-btn"><i class="fa-solid fa-pencil"></i></a>
                </div>
            </div>
        </div>
        <div class="info">
            <h6>Alamat</h6>
            <p>
                {{ $user->address }}
            </p>
        </div>
    </div>
    <div class="contant-section">
        <a href="{{ route('logout') }}" class="btn btn-danger w-100">Logout</a>
    </div>
</div>
@endsection