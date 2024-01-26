<x-guest>
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <div
            class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
            <div class="d-flex align-items-center justify-content-center w-100">
                <div class="row justify-content-center w-100">
                    <div class="col-md-8 col-lg-6 col-xxl-3">
                        <div class="card mb-0">
                            <div class="card-body">
                                <div class="d-flex justify-content-center align-items-center">
                                    <a href="./index.html" class="text-nowrap logo-img text-center d-block py-3">
                                        <img src="{{ asset('assets/images/logo.png') }}" width="90" alt="">
                                    </a>
                                    <div class="ml-2">
                                        <h5 class="mb-1" style="font-weight: 700">Desa Mulyoagung</h5>
                                        <p class="" style="font-weight: 500">Kabupaten Malang</p>
                                    </div>
                                </div>
                                <form action="" method="POST">
                                    @csrf
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
                                    <button type="submit"
                                        class="btn btn-primary w-100 py-8 fs-4 mb-4 rounded-2">Daftar</button>
                                    <div class="d-flex align-items-center justify-content-center">
                                        <p class="fs-4 mb-0 fw-bold">Sudah memiliki akun?</p>
                                        <a class="text-primary fw-bold ms-2" href="{{ route('login') }}">Masuk</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest>
