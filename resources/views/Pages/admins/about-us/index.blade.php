<x-admin>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-4">
                <h4>Tentang Kami</h4>
                <a href="{{route('admin-about-us-edit')}}" class="btn btn-outline-primary">Edit</a>
            </div>
            <div class="containter ck ck-content ck-editor">
                {!! $about_us->content !!}
            </div>
        </div>
      </div>
</x-admin>