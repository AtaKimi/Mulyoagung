<x-app>
    <div class="hero overlay inner-page bg-primary py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center pt-5">
                <div class="col-lg-6">
                    <h1 class="heading text-white mb-3" data-aos="fade-up">Layanan Desa</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="section search-result-wrap">
        <div class="container">
            <div class="row posts-entry">
                <div class="col-12-8">
                    @foreach ($service as $publicService)
                        <div class="blog-entry d-flex blog-entry-search-item">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3">
                                        <a href="{{ route('guest-public-service-show', ['id' => $publicService->id]) }}"
                                            class="img-link me-4">
                                            <img src="{{ asset('assets/images/img_1_sq.jpg') }}" alt="Image"
                                                class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-md-9">
                                        <span class="date">Apr. 14th, 2022 &bullet; <a
                                                href="#">Business</a></span>
                                        <h2><a
                                                href="{{ route('guest-public-service-show', ['id' => $publicService->id]) }}">{{ $publicService->name }}</a>
                                        </h2>
                                        <p><a href="{{ route('guest-public-service-show', ['id' => $publicService->id]) }}"
                                                class="btn btn-sm btn-outline-primary">Read More</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach

                    <div class="row text-start pt-5 border-top">
                        <div class="col-md-12">
                            <div class="custom-pagination">
                                <span>1</span>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <span>...</span>
                                <a href="#">15</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


</x-app>
