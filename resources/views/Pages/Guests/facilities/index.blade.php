<x-app>
    <div class="container">
        <h2 class="text-center fw-bold text-primary my-5">Fasilitas Desa</h2>
        <div class="row justify-content-evenly mb-5">
            @for ($i = 0; $i < 3; $i++)
                <div class="col-md-4">
                    <div class="blog-entry">
                        <a href="{{route('guest-facility-show')}}">
                            <img src="{{ asset('assets/images/img_1_sq.jpg') }}" alt="Image" class="img-fluid"
                                style="border-radius: 1rem">
                        </a>
                        <span class="date">Apr. 14th, 2022</span>
                        <h5><a href="{{route('guest-facility-show')}}">Thought you loved Python? Wait until you meet Rust</a></h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, nobis ea quis inventore vel
                            voluptas.
                        </p>
                        <p><a href="{{route('guest-facility-show')}}" class="btn btn-sm btn-outline-primary py-2">Read More</a></p>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</x-app>
