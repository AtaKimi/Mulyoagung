@push('script')
    <script>
        ClassicEditor
            .create(document.querySelector('.editor'), {
                simpleUpload: {
                    // The URL that the images are uploaded to.
                    uploadUrl: "{{ route('ckeditor') }}",

                    // Enable the XMLHttpRequest.withCredentials property.
                    withCredentials: true,

                    // Headers sent along with the XMLHttpRequest to the upload server.
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                    },
                },
            })
            .then(editor => {
                window.editor = editor;
            })
    </script>
@endpush


<x-admin>
    <div class="card">
        <div class="card-body">
            <h4 class="mb-4">Layanan Umum</h4>
            <form action="{{ route('admin-public-service-update', $public_service) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="front_photo" class="form-label">Foto Depan</label>
                    <input type="file" name="front_photo" id="front_photo" class="form-control">
                    <p>Foto Terakhir : <span
                            class="text-info">{{ $public_service->getFirstMedia('default')->file_name }}</span>
                    </p>
                    @error('front_photo')
                        <div class="alert alert-danger mt-1" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" name="name" class="form-control" id="name" aria-describedby="textHelp"
                        value="{{ $public_service->name }}">
                    @error('name')
                        <div class="alert alert-danger mt-1" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea name="content" class="editor">
                        {!! $public_service->content !!}
                    </textarea>
                    @error('content')
                        <div class="alert alert-danger mt-1" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="d-flex justify-content-end gap-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
            <hr>
            <div class="d-flex justify-content-between">
                <h4 class="mb-4">Files</h4>
                <button class="btn btn-outline-primary" type="button" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">Tambah File</button>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Filename</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($public_service->getMedia('files') as $file)
                        <tr>
                            <th scope="row"> {{ $loop->index + 1 }}
                            <td>{{ $file->file_name }}</td>

                            <td>
                                <form
                                    action="{{ route('admin-public-service-file-destroy', [$public_service, $file]) }}"
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
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah File</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{ route('admin-public-service-file-store', $public_service) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="file" class="form-label">File</label>
                            <input type="file" name="file" class="col form-control">
                            @error('file')
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
