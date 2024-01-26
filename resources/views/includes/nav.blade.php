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
                                src="{{ asset('assets/images/logo.png') }}" alt="" srcset=""
                                style="width: 56px; height:56px;"></a>
                        <div class="text-light">
                            <p class="mb-0" style="font-weight: 600">Desa Mulyoagung</p>
                            <p class="mb-0">Kabupaten Malang</p>
                        </div>
                    </div>
                    <div class="col-7 text-center">
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
                                <a href="{{route('guest-public-service-index')}}">Layanan
                                    Umum</a>
                            </li>
                            <li><a href="{{route('login')}}">Login</a></li>


                            {{-- <li class="has-children">
                                <a href="category.html">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="search-result.html">Search Result</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="single.html">Blog Single</a></li>
                                    <li><a href="category.html">Category</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="#">Menu One</a></li>
                                    <li><a href="#">Menu Two</a></li>
                                    <li class="has-children">
                                        <a href="#">Dropdown</a>
                                        <ul class="dropdown">
                                            <li><a href="#">Sub Menu One</a></li>
                                            <li><a href="#">Sub Menu Two</a></li>
                                            <li><a href="#">Sub Menu Three</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li> --}}
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
