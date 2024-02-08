<x-admin>
    <div class="card">
        <div class="card-body">
            <h4 class="mb-4">Profil User</h4>
            <div class="mb-4">
                <form action="{{ route('setting-profile-photo') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex gap-5 align-items-center">
                        <img src="{{ $user->getFirstMediaUrl('default') }}" class="rounded-circle"
                            style="width:100px; height:100px">
                        <div class="row">
                            <input type="file" name="photo_profile" class="col form-control"
                                onchange="this.closest('form').submit()">
                            @error('photo_profile')
                                <div class="col alert alert-danger mt-1" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </form>
                <hr>
            </div>

            <form action="{{ route('setting-profile-indentity') }}" method="post">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" placeholder="Nama" value="{{ $user->name }}">
                        @error('name')
                            <div class=" alert alert-danger mt-1" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Email"
                            value="{{ $user->email }}">
                        @error('email')
                            <div class=" alert alert-danger mt-1" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="d-flex justify-content-end mr-3 mb-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
                <hr>
            </form>

            <form action="{{route('setting-profile-change-password')}}" method="post">
                @csrf
                <div class="row mb-3">
                    <div class="col">
                        <label for="new_password" class="form-label">Password Baru</label>
                        <input type="password" class="form-control" name="new_password" placeholder="Password Baru"
                            name="password">
                    </div>
                    <div class="col">
                        <label for="email" class="form-label">Password Lama</label>
                        <input type="password" class="form-control" name="password" placeholder="Password Lama">
                    </div>
                    <div class="col">
                        <label for="email" class="form-label">Konfirmasi Password Lama</label>
                        <input type="password" class="form-control" name="password_confirmation"
                            placeholder="Konfirmasi Password Lama">
                    </div>
                </div>
                <div class="d-flex justify-content-end mr-3">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-admin>
