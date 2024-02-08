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
            <h4 class="mb-4">Tentang Kami</h4>
            <form action="{{ route('admin-about-us-update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="front_photo" class="form-label">Foto Depan</label>
                    <input type="file" name="front_photo" id="front_photo" class="form-control">
                    <p>Foto Terakhir : <span
                            class="text-info">{{ $about_us->getFirstMedia('default')->file_name }}</span>
                    </p>
                    @error('front_photo')
                        <div class="alert alert-danger mt-1" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Konten</label>
                    <textarea name="content" class="editor">{!! $about_us->content !!}</textarea>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary px-4">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-admin>
