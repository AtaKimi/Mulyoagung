<x-admin>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h4 class="mb-4">Berita</h4>
                <a href="{{ route('admin-news-create') }}" class="btn btn-secondary d-flex align-items-center">Tambah
                    Berita</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Sub Judul</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($news as $key => $item)
                        <tr>
                            <th scope="row"> {{ $news->firstItem() + $key }}
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->subtitle }}</td>
                            <td>
                                <div class="d-flex justify-center gap-2">
                                    <a href="{{ route('admin-news-edit', $item) }}" type="button"
                                        class="btn btn-primary">Edit</a>
                                    <form action="{{ route('admin-news-destroy', $item) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <x-pagination.bootstrap :paginator="$news" />
        </div>
    </div>
</x-admin>
