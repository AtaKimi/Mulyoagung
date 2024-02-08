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
            <h4 class="mb-4">Facility Form</h4>
            <form action="{{ route('admin-facility-update', $facility) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="front_photo" class="form-label">Foto Depan</label>
                    <input type="file" name="front_photo" id="front_photo" class="form-control">
                    <p>Foto Terakhir : <span
                            class="text-info">{{ $facility->getFirstMedia('default')->file_name }}</span>
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
                        value="{{ $facility->name }}">
                    @error('name')
                        <div class="alert alert-danger mt-1" role="alert">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea name="content" class="editor">
                        {!! $facility->content !!}
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
