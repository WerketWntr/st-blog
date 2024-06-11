<x-layout>
    <x-slot:heading>

    </x-slot:heading>

    <div class="container">

        <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                        <div class="d-flex justify-content-center py-4">
                            <a href="index.html" class="logo d-flex align-items-center w-auto">
                                <img src="assets/img/logo.png" alt="">
                                <span class="d-none d-lg-block">NiceAdmin</span>
                            </a>
                        </div><!-- End Logo -->

                        <div class="card mb-3">

                            <div class="card-body">

                                <div class="pt-4 pb-2">
                                    <h5 class="card-title text-center pb-0 fs-4">Reset your password</h5>
                                    <p class="text-center small">If the account exist, we will email you instructions to reset the password.</p>
                                </div>

                                @if(session('success'))
                                    <div class="alert alert-success">{{ session('success') }}</div>
                                @endif
                                @if(session('error'))
                                    <div class="alert alert-danger">{{ session('error') }}</div>
                                @endif

                                <form class="row g-3 needs-validation" novalidate action="{{ route('sendResetLinkEmail') }}" method="POST">
                                    @csrf


                                    <div class="col-12">
                                        <label for="yourEmail" class="form-label">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{ old('email') }}">
                                    </div>
                                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>

                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Reset Password</button>
                                    </div>
                                    <div class="col-12">
                                        <p class="small mb-0">Already have account? <a href="{{ route('LoginPage') }}">Login</a></p>
                                    </div>
                                </form>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

    </div>

</x-layout>
