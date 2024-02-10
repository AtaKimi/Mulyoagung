<x-app>
    <div class="container">
        <h2 class="text-center fw-bold text-primary my-5">Fasilitas Desa</h2>
        <div class="row justify-content-start mb-5">
            @foreach ($facilities as $facilitie)
                <div class="col-md-4">
                    <div class="blog-entry mb-5">
                        <a href="{{ route('guest-facility-show', $facilitie) }}">
                            <img src="{{ $facilitie->getFirstMediaUrl('default') }}" alt="Image" class="img-fluid"
                                style="border-radius: 1rem">
                        </a>
                        <div class="mb-3 mt-3">
                            <div class="mt-2 text-center">
                                <h5><a href="{{ route('guest-facility-show', $facilitie) }}">{{ $facilitie->name }}</a>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <x-pagination.bootstrap :paginator="$facilities" />
    </div>
</x-app>
