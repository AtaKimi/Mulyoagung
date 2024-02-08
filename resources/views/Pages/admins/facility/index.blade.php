<x-admin>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h4 class="mb-4">Fasilitas</h4>
                <a href="{{ route('admin-facility-create') }}" class="btn btn-secondary d-flex align-items-center">Tambah
                    Fasilitas</a>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($facilities as $key => $facility)
                        <tr>
                            <th scope="row"> {{ $facilities->firstItem() + $key }}
                            <td>{{ $facility->name }}</td>
                            <td>
                                <div class="d-flex justify-center gap-2">
                                    <a href="{{ route('admin-facility-edit', $facility) }}" type="button"
                                        class="btn btn-primary">Edit</a>
                                    <form action="{{ route('admin-facility-destroy', $facility) }}" method="post">
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
            <x-pagination.bootstrap :paginator="$facilities" />
        </div>
    </div>
</x-admin>
