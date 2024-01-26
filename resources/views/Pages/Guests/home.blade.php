<x-app>
    {{-- ---------------------------- Carausel Start ------------------------------------ --}}
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/hero_1.jpg') }}" class="d-block w-100" height="400" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/hero_2.jpg') }}" class="d-block w-100" height="400" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/hero_3.jpg') }}" class="d-block w-100" height="400" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- ---------------------------- Carausel End ------------------------------------ --}}

    {{-- ---------------------------- Services Start ------------------------------------ --}}
    <div class="row mt-5 px-4 justify-content-center gap-3">
        <div class="col-sm-5 col-md-4 col-lg-3 card border-0 bg-primary">
            <div class="card-body text-center fw-bold fs-5">
                <div class="p-3 row justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="d-none d-lg-block col-md-5"
                        fill="#FFFFFF">
                        <path
                            d="M343.9 213.4L245.3 312l65.4 65.4c7.9 7.9 11.1 19.4 8.4 30.3s-10.8 19.6-21.5 22.9l-256 80c-11.4 3.5-23.8 .5-32.2-7.9S-2.1 481.8 1.5 470.5l80-256c3.3-10.7 12-18.9 22.9-21.5s22.4 .5 30.3 8.4L200 266.7l98.6-98.6c-14.3-14.6-14.2-38 .3-52.5l95.4-95.4c26.9-26.9 70.5-26.9 97.5 0s26.9 70.5 0 97.5l-95.4 95.4c-14.5 14.5-37.9 14.6-52.5 .3z" />
                    </svg>
                </div>
                <p class="text-light">Pelayanan Umum</p>
            </div>
        </div>
        <div class="col-sm-5 col-md-4 col-lg-3 card border-0 bg-primary">
            <div class="card-body text-center fw-bold fs-5">
                <div class="p-3 row justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"  class="d-none d-lg-block col-md-5"
                        fill="#FFFFFF">
                        <path
                            d="M343.9 213.4L245.3 312l65.4 65.4c7.9 7.9 11.1 19.4 8.4 30.3s-10.8 19.6-21.5 22.9l-256 80c-11.4 3.5-23.8 .5-32.2-7.9S-2.1 481.8 1.5 470.5l80-256c3.3-10.7 12-18.9 22.9-21.5s22.4 .5 30.3 8.4L200 266.7l98.6-98.6c-14.3-14.6-14.2-38 .3-52.5l95.4-95.4c26.9-26.9 70.5-26.9 97.5 0s26.9 70.5 0 97.5l-95.4 95.4c-14.5 14.5-37.9 14.6-52.5 .3z" />
                    </svg>
                </div>
                <p class="text-light">Pembangunan Desa</p>
            </div>
        </div>
        <div class="col-sm-5 col-md-4 col-lg-3 card border-0 bg-primary">
            <div class="card-body text-center fw-bold fs-5">
                <div class="p-3 row justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"  class="d-none d-lg-block col-md-5"
                        fill="#FFFFFF">
                        <path
                            d="M343.9 213.4L245.3 312l65.4 65.4c7.9 7.9 11.1 19.4 8.4 30.3s-10.8 19.6-21.5 22.9l-256 80c-11.4 3.5-23.8 .5-32.2-7.9S-2.1 481.8 1.5 470.5l80-256c3.3-10.7 12-18.9 22.9-21.5s22.4 .5 30.3 8.4L200 266.7l98.6-98.6c-14.3-14.6-14.2-38 .3-52.5l95.4-95.4c26.9-26.9 70.5-26.9 97.5 0s26.9 70.5 0 97.5l-95.4 95.4c-14.5 14.5-37.9 14.6-52.5 .3z" />
                    </svg>
                </div>
                <p class="text-light">Pembangunan Desa</p>
            </div>
        </div>
        <div class="col-sm-5 col-md-4 col-lg-3 card border-0 bg-primary">
            <div class="card-body text-center fw-bold fs-5">
                <div class="p-3 row justify-content-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"  class="d-none d-lg-block col-md-5"
                        fill="#FFFFFF">
                        <path
                            d="M343.9 213.4L245.3 312l65.4 65.4c7.9 7.9 11.1 19.4 8.4 30.3s-10.8 19.6-21.5 22.9l-256 80c-11.4 3.5-23.8 .5-32.2-7.9S-2.1 481.8 1.5 470.5l80-256c3.3-10.7 12-18.9 22.9-21.5s22.4 .5 30.3 8.4L200 266.7l98.6-98.6c-14.3-14.6-14.2-38 .3-52.5l95.4-95.4c26.9-26.9 70.5-26.9 97.5 0s26.9 70.5 0 97.5l-95.4 95.4c-14.5 14.5-37.9 14.6-52.5 .3z" />
                    </svg>
                </div>
                <p class="text-light">Pembangunan Desa</p>
            </div>
        </div>
    </div>
    {{-- ---------------------------- Services End ------------------------------------ --}}

    {{-- ---------------------------- Recent News Start ------------------------------------ --}}
    <section class="section posts-entry posts-entry-sm bg-light">
        <div class="container">
            <h3 class="mb-3 text-primary">Berita Terakhir</h3>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a href="single.html" class="img-link">
                            <img src="{{ asset('assets/images/img_1_horizontal.jpg') }}" alt="Image"
                                class="img-fluid">
                        </a>
                        <span class="date">Apr. 14th, 2022</span>
                        <h2><a href="single.html">Thought you loved Python? Wait until you meet Rust</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p><a href="#" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a href="single.html" class="img-link">
                            <img src="{{ asset('assets/images/img_2_horizontal.jpg') }}" alt="Image"
                                class="img-fluid">
                        </a>
                        <span class="date">Apr. 14th, 2022</span>
                        <h2><a href="single.html">Startup vs corporate: What job suits you best?</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p><a href="#" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a href="single.html" class="img-link">
                            <img src="{{ asset('assets/images/img_3_horizontal.jpg') }}" alt="Image"
                                class="img-fluid">
                        </a>
                        <span class="date">Apr. 14th, 2022</span>
                        <h2><a href="single.html">UK sees highest inflation in 30 years</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p><a href="#" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="blog-entry">
                        <a href="single.html" class="img-link">
                            <img src="{{ asset('assets/images/img_4_horizontal.jpg') }}" alt="Image"
                                class="img-fluid">
                        </a>
                        <span class="date">Apr. 14th, 2022</span>
                        <h2><a href="single.html">Don’t assume your user data in the cloud is safe</a></h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p><a href="#" class="read-more">Continue Reading</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ---------------------------- Recent News End ------------------------------------ --}}

    {{-- ---------------------------- Facility Start ------------------------------------ --}}
    <div class="section bg-light">
        <div class="container">

            <div class="row mb-4">
                <div class="col-sm-6">
                    <h2 class="posts-entry-title">Fasilitas Desa</h2>
                </div>
                <div class="col-sm-6 text-sm-end"><a href="category.html" class="read-more">View All</a></div>
            </div>

            <div class="row align-items-stretch retro-layout-alt">

                <div class="col-md-5 order-md-2">
                    <a href="single.html" class="hentry img-1 h-100 gradient">
                        <div class="featured-img"
                            style="background-image: url('{{ asset('assets/images/img_2_sq.jpg') }}');"></div>
                        <div class="text">
                            <span>February 12, 2019</span>
                            <h2>Meta unveils fees on metaverse sales</h2>
                        </div>
                    </a>
                </div>

                <div class="col-md-7">
                    <a href="single.html" class="hentry img-2 v-height mb30 gradient">
                        <div class="featured-img"
                            style="background-image: url('{{ asset('assets/images/img_2_sq.jpg') }}');"></div>
                        <div class="text text-sm">
                            <span>February 12, 2019</span>
                            <h2>AI can now kill those annoying cookie pop-ups</h2>
                        </div>
                    </a>

                    <div class="two-col d-block d-md-flex justify-content-between">
                        <a href="single.html" class="hentry v-height img-2 gradient">
                            <div class="featured-img"
                                style="background-image: url('{{ asset('assets/images/img_2_sq.jpg') }}');"></div>
                            <div class="text text-sm">
                                <span>February 12, 2019</span>
                                <h2>Don’t assume your user data in the cloud is safe</h2>
                            </div>
                        </a>
                        <a href="single.html" class="hentry v-height img-2 ms-auto float-end gradient">
                            <div class="featured-img"
                                style="background-image: url('{{ asset('assets/images/img_2_sq.jpg') }}');"></div>
                            <div class="text text-sm">
                                <span>February 12, 2019</span>
                                <h2>Startup vs corporate: What job suits you best?</h2>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- ---------------------------- Facility End ------------------------------------ --}}

    {{-- ---------------------------- Address Start ------------------------------------ --}}
    <div class="container py-5 overflow-scroll">
        <h3 class="text-center font-monospace fw-bold mb-4 text-primary">Alamat Desa</h3>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15806.94633623214!2d112.57933890000001!3d-7.9225590000000015!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78818740c39bb1%3A0x4961e811a4ac4f95!2sMulyoagung%2C%20Dau%2C%20Malang%20Regency%2C%20East%20Java!5e0!3m2!1sen!2sid!4v1706195207560!5m2!1sen!2sid"
            class="w-100" height="400px" style="border:0; border-radius:1rem" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        <div class="col-">
            <div class="container">

                <table class="table">
                    <tbody>
                        <tr>
                            <td>Kode PUM</td>
                            <td>3507222008</td>
                        </tr>
                        <tr>
                            <td>Tahun Pembentukan</td>
                            <td>1930</td>
                        </tr>
                        <tr>
                            <td>Dasar Hukum</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Tipologi</td>
                            <td>PERINDUSTRIAN/JASA</td>
                        </tr>
                        <tr>
                            <td>Klasifikasi</td>
                            <td>SWASEMBADA</td>
                        </tr>
                        <tr>
                            <td>Kategori</td>
                            <td>MULA</td>
                        </tr>
                        <tr>
                            <td>Luas Wilayah</td>
                            <td>296
                            </td>
                        </tr>
                        <tr>
                            <td>Batas Sebelah Utara</td>
                            <td>SUNGAI BRANTAS DAN DESA TEGALGONDO KEC KARANGPLOSO</td>
                        </tr>
                        <tr>
                            <td>Batas Sebelah Selatan</td>
                            <td>DESA LANDUNGSARI KEC DAU</td>
                        </tr>
                        <tr>
                            <td>Batas Sebelah Timur</td>
                            <td>KEL TOLOGOMAS KOTA MALANG / DESA LANDUNGSARI KEC DAU</td>
                        </tr>
                        <tr>
                            <td>Batas Sebelah Barat</td>
                            <td>DESA SUMBERSEKAR KEC DAU DAN KOTA BATU</td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    {{-- ---------------------------- Address End ------------------------------------ --}}

</x-app>
