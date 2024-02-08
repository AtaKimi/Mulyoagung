<x-admin>
    <div class="card">
        <div class="card-body">
            <h4 class="mb-4">Profil Desa</h4>
            <form action="{{ route('admin-setting-village-photo') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="d-flex gap-5 align-items-center">
                    <img src="{{ $village->getFirstMediaUrl('default') }}" class="rounded-circle"
                        style="width:100px; height:100px">
                    <div class="row">
                        <input type="file" name="village_logo" class="col form-control"
                            onchange="this.closest('form').submit()">
                        @error('village_logo')
                            <div class="col alert alert-danger mt-1" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </form>
            <hr>
            <form action="{{ route('admin-setting-village-indentity') }}" method="post">
                @csrf
                <h4 class="mb-4">Identitas Desa</h4>
                <div class="row mb-3">
                    <div class="col">
                        <label for="email" class="form-label">Email Desa</label>
                        <input type="text" class="form-control" id="email" name="email"
                            value="{{ $village->email }}">
                        @error('email')
                            <div class="col alert alert-danger mt-1" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="phone_number" class="form-label">Nomor Telpon</label>
                        <input type="text" class="form-control" name="phone_number"
                            value="{{ $village->phone_number }}">
                        @error('phone_number')
                            <div class="col alert alert-danger mt-1" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Alamat Desa</label>
                    <textarea class="form-control" name="address" id="address" rows="3">
                        {{ $village->address }}
                    </textarea>
                    @error('address')
                        <div class="col alert alert-danger mt-1" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="short_profile" class="form-label">Profil Singkat Desa</label>
                    <textarea class="form-control" name="short_profile" id="short_profile" rows="3">
                        {{ $village->short_profile }}
                    </textarea>
                    @error('short_profile')
                        <div class="col alert alert-danger mt-1" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            <hr>
            <div class="d-flex justify-content-between">
                <h4>Home Page Slider</h4>
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Tambah Slider</button>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Sub Judul</th>
                        <th scope="col">Filename</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($home_sliders as $home_slider)
                        <tr>
                            <th scope="row"> {{ $loop->index + 1 }}
                            <td>{{ $home_slider->title }}</td>
                            <td>{{ $home_slider->subtitle }}</td>
                            <td>{{ $home_slider->getFirstMedia('default')->file_name }}</td>

                            <td>
                                <form action="{{ route('admin-setting-village-slider-destroy', $home_slider) }}"
                                    method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-warning ">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    {{-- ---------- create user modal start --------------- --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin-setting-village-slider-store') }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" name="title" class="form-control" id="title"
                                aria-describedby="textHelp">
                            @error('title')
                                <div class="alert alert-danger mt-1" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="subtitle" class="form-label">Subtitle</label>
                            <input type="subtitle" name="subtitle" class="form-control" id="subtitle"
                                aria-describedby="subtitleHelp">
                            @error('subtitle')
                                <div class="alert alert-danger mt-1" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="home_slider" class="form-label">Image</label>
                            <input type="file" name="home_slider" class="col form-control"
                                onchange="this.closest('form').submit()">
                            @error('home_slider')
                                <div class="col alert alert-danger mt-1" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- ---------- create user modal end --------------- --}}
</x-admin>
