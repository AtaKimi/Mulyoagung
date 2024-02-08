<x-app>
    <div class="hero overlay inner-page bg-primary py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center text-center pt-5">
                <div class="col-lg-6">
                    <h1 class="heading text-white mb-3" data-aos="fade-up">Berita Desa</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section search-result-wrap">
        <div class="container">
            <div class="row posts-entry">
                <div class="col-12-8">
                    @foreach ($news as $new)
                        <div class="blog-entry d-flex blog-entry-search-item">
                            <div class="container">
                                <div class="row align-items-center">
                                    <div class="col-md-4">
                                        <a href="{{ route('guest-news-show', $new) }}"
                                            class="img-link me-4">
                                            <img src="{{ $new->getFirstMediaUrl('default') }}" alt="Image"
                                                class="img-fluid" style="width: fit-content">
                                        </a>
                                    </div>
                                    <div class="col-md-8">
                                        <span class="date">Apr. 15th, 2022 &bullet; <a
                                                href="#">Business</a></span>
                                        <h2><a
                                                href="{{ route('guest-news-show', $new) }}">{{ $new->title }}</a>
                                        </h2>
                                        <p>{{ $new->subtitle }}</p>
                                        <p><a href="{{ route('guest-news-show', $new) }}"
                                                class="btn btn-sm btn-outline-primary">Read More</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach

                    <x-pagination.bootstrap :paginator="$news" />
                </div>
            </div>
        </div>
    </div>


</x-app>
