<x-app>
    <div class="container">
        <h2 class="text-center fw-bold text-primary my-5">Fasilitas Desa</h2>
        <div class="row justify-content-evenly mb-5">
            @foreach ($facilities as $facilitie)
                <div class="col-md-4">
                    <div class="blog-entry mb-5">
                        <a href="{{ route('guest-facility-show', ['id' => $facilitie->id]) }}">
                            <img src="{{ asset('assets/images/img_1_sq.jpg') }}" alt="Image" class="img-fluid"
                                style="border-radius: 1rem">
                        </a>
                        <div class="mb-3 mt-3">
                            <span class="date">Apr. 14th, 2022</span>
                            <div class="mt-2">
                                <h5><a
                                        href="{{ route('guest-facility-show', ['id' => $facilitie->id]) }}">{{ $facilitie->name }}</a>
                                </h5>
                                <p class="mt-3"><a href="{{ route('guest-facility-show', ['id' => $facilitie->id]) }}"
                                        class="btn btn-sm btn-outline-primary py-2">Read More</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app>
