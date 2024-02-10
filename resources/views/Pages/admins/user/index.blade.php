<x-admin>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between">
                <h4 class="mb-4">Manajemen User</h4>
                <button class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah
                    User</button>
            </div>
            <table class="table table-striped  table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Role</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $key => $user)
                        <tr>
                            <th scope="row"> {{ $users->firstItem() + $key }}
                            </th>
                            <td>{{ $user->name }}</td>
                            <td>
                                <form action="{{ route('admin-user-update', $user) }}" method="POST">
                                    @csrf
                                    <select class="form-select" onchange="this.closest('form').submit()" name="role">
                                        @if ($user->hasRole('super_admin'))
                                        <option value="3" selected>
                                            Super Admin
                                        </option>
                                    @else
                                        <option value="1">Guest</option>
                                        <option value="2" @if ($user->hasRole('admin')) selected @endif>Admin
                                        </option>
                                    @endif
                                    </select>
                                </form>
                            </td>
                            <td>
                                <div class="d-flex justify-center gap-2">
                                    <form action="{{route('admin-user-destroy', $user)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-primary">Hapus</button>
                                    </form>
                                </div>
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
                <form action="{{ route('admin-user-store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" name="name" class="form-control" id="name"
                                aria-describedby="textHelp">
                            @error('name')
                                <div class="alert alert-danger mt-1" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="role" class="form-label">Role</label>
                            <select class="form-select" name="role">
                                <option value="1">Guest</option>
                                <option value="2" @if ($user->hasRole('admin')) selected @endif>Admin</option>
                            </select>
                            @error('role')
                                <div class="alert alert-danger mt-1" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                aria-describedby="emailHelp">
                            @error('email')
                                <div class="alert alert-danger mt-1" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                            @error('password')
                                <div class="alert alert-danger mt-1" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <input type="password" name="password_confirmation" class="form-control"
                                id="password_confirmation">
                            @error('password_confirmation')
                                <div class="alert alert-danger mt-1" role="alert">
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
