@php
    use Illuminate\Support\Facades\Route;
    $thiRute = Route::currentRouteName();
@endphp
<div class="menubar-area">
    <div class="toolbar-inner menubar-nav">
        <a href="{{ route('home') }}" class="nav-link {{ $thiRute == 'home' ? 'active' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none"
                xmlns:v="https://vecta.io/nano">
                <path
                    d="M21.44 11.035a.75.75 0 0 1-.69.465H18.5V19a2.25 2.25 0 0 1-2.25 2.25h-3a.75.75 0 0 1-.75-.75V16a.75.75 0 0 0-.75-.75h-1.5a.75.75 0 0 0-.75.75v4.5a.75.75 0 0 1-.75.75h-3A2.25 2.25 0 0 1 3.5 19v-7.5H1.25a.75.75 0 0 1-.69-.465.75.75 0 0 1 .158-.818l9.75-9.75A.75.75 0 0 1 11 .246a.75.75 0 0 1 .533.222l9.75 9.75a.75.75 0 0 1 .158.818z"
                    fill="#b5b5b5" />
            </svg>
        </a>
        <a href="{{ route('profile') }}" class="nav-link {{ $thiRute == 'profile' ? 'active' : '' }}">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="21" fill="#b5b5b5"
                xmlns:v="https://vecta.io/nano">
                <path
                    d="M8 7.75a3.75 3.75 0 1 0 0-7.5 3.75 3.75 0 1 0 0 7.5zm7.5 9v1.5c-.002.199-.079.39-.217.532C13.61 20.455 8.57 20.5 8 20.5s-5.61-.045-7.282-1.718C.579 18.64.501 18.449.5 18.25v-1.5a7.5 7.5 0 1 1 15 0z" />
            </svg>
        </a>
        <a href="{{ route('post') }}" class="nav-link add-post">
            <i class="fa-solid fa-plus"></i>
        </a>
        <a href="{{ route('job') }}" class="nav-link {{ $thiRute == 'job' ? 'active' : '' }}">
            <svg fill="#B5B5B5" height="24" width="24" version="1.1" id="Layer_1"
                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512"
                xml:space="preserve">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <g>
                        <g>
                            <path
                                d="M484.554,50.286H27.446C12.288,50.286,0,62.574,0,77.732v356.536c0,15.158,12.288,27.446,27.446,27.446h457.107 c15.158,0,27.446-12.288,27.446-27.446V77.732C512,62.574,499.712,50.286,484.554,50.286z M481.732,68.571L256.947,293.357 L32.161,68.571H481.732z M18.286,429.886v-349l174.5,174.5L18.286,429.886z M32.161,443.429l174.5-174.807l43.821,43.669 c1.786,1.786,4.125,2.601,6.464,2.601c2.339,0,4.678-0.931,6.464-2.716l43.824-43.537l174.502,174.79H32.161z M493.714,429.883 L319.216,255.384L493.714,80.886V429.883z">
                            </path>
                        </g>
                    </g>
                </g>
            </svg>
        </a>

        <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <path
                        d="M14 20H6C4.89543 20 4 19.1046 4 18L4 6C4 4.89543 4.89543 4 6 4H14M10 12H21M21 12L18 15M21 12L18 9"
                        stroke="#B5B5B5" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                </g>
            </svg>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</div>
