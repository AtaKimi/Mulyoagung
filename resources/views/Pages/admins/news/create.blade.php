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
            <form action="{{ route('admin-news-store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <h4 class="mb-4">News Form</h4>
                <div class="mb-3">
                    <label for="front_photo" class="form-label">Foto Depan</label>
                    <input type="file" name="front_photo" id="front_photo" class="form-control">
                    @error('front_photo')
                        <div class="alert alert-danger mt-1" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
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
                    <input type="text" name="subtitle" class="form-control" id="subtitle"
                        aria-describedby="textHelp">
                    @error('subtitle')
                        <div class="alert alert-danger mt-1" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" class="editor">
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
        </div>
    </div>
</x-admin>
