<x-admin>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h4 class="mb-4">Layanan Umum</h4>
                <a href="{{ route('admin-public-service-create') }}" class="btn btn-secondary d-flex align-items-center">Tambah
                    Layanan Umum</a>
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
                    @foreach ($public_services as $key => $public_service)
                        <tr>
                            <th scope="row"> {{ $public_services->firstItem() + $key }}
                            <td>{{ $public_service->name }}</td>
                            <td>
                                <div class="d-flex justify-center gap-2">
                                    <a href="{{ route('admin-public-service-edit', $public_service) }}" type="button"
                                        class="btn btn-primary">Edit</a>
                                    <form action="{{ route('admin-public-service-destroy', $public_service) }}" method="post">
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
            <x-pagination.bootstrap :paginator="$public_services" />
        </div>
    </div>
</x-admin>