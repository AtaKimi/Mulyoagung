<div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close">
            <span class="icofont-close js-menu-toggle"></span>
        </div>
    </div>
    <div class="site-mobile-menu-body"></div>
</div>

<nav class="site-nav">
    <div class="container">
        <div class="menu-bg-wrap">
            <div class="site-navigation">
                <div class="row g-0 align-items-center">
                    <div class="col-3 d-flex align-items-center gap-2">
                        <a href="index.html" class="logo m-0 float-start"><img
                                src="{{ App\Models\Village::get()->first()->getFirstMediaUrl('default') }}"
                                alt="" srcset="" style="width: 56px; height:56px;"></a>
                        <div class="text-light">
                            <p class="mb-0" style="font-weight: 600">Desa Mulyoagung</p>
                            <p class="mb-0">Kabupaten Malang</p>
                        </div>
                    </div>
                    <div class="col-7 col-lg-9 text-center">
                        <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                            <li @if (request()->routeIs('home')) class="active" @endif><a
                                    href="{{ route('home') }}">Beranda</a></li>
                            <li @if (request()->routeIs('about-us')) class="active" @endif><a
                                    href="{{ route('about-us') }}">Tentang Kami</a></li>
                            <li @if (request()->routeIs('guest-news-index')) class="active" @endif><a
                                    href="{{ route('guest-news-index') }}">Berita</a></li>
                            <li @if (request()->routeIs('guest-facility-index')) class="active" @endif><a
                                    href="{{ route('guest-facility-index') }}">Fasilitas</a></li>
                            <li @if (request()->routeIs('guest-public-service-index')) class="active" @endif>
                                <a href="{{ route('guest-public-service-index') }}">Layanan
                                    Umum</a>
                            </li>
                            @guest
                                <li><a href="{{ route('login') }}">Login</a></li>
                            @endguest

                            @auth
                                <li class="has-children">
                                    <span>{{ auth()->user()->name }}</span>
                                    <ul class="dropdown">
                                        <li class="mb-2" class="hover-grey-200"><a
                                                href="{{ route('setting-profile') }}">Profile</a></li>
                                        @if (auth()->user()->hasRole('admin') ||
                                                auth()->user()->hasRole('super_admin'))
                                            <li class="mb-2">
                                                <a href="{{ route('dashboard') }}">Dashboard</a>
                                            </li>
                                        @endif
                                        <li class="mb-2">
                                            <form action="{{ route('logout') }}" method="post">
                                                @csrf
                                                <button type="submit"
                                                    class="ms-3 btn btn-outline-primary py-2">Logout</button>
                                            </form>
                                        </li>
                                </li>
                            @endauth
                        </ul>
                    </div>
                    <div class="col-2 text-end text-light">
                        <a href="#"
                            class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
                            <span></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
