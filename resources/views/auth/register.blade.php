<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{ asset('image/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180" />
	<link href="{{ asset('image/favicon-32x32.png') }}" rel="icon" sizes="32x32" type="image/png" /> <!-- Logo Title -->
	<link href="{{ asset('image/favicon-16x16.png') }}" rel="icon" sizes="16x16" type="image/png" /> <!-- Logo Title -->

    <title>Goals Academy | {{ $title }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">

    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

	<!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/3f9eda8ca0.js" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;family=Work+Sans:wght@300;400;500;700&amp;display=swap" rel="stylesheet" />

	<!-- Animate AOS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link href="{{ asset('css/style-nav-footer.css') }}" rel="stylesheet" /> <!-- // style navbar & footer -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" /> <!-- // style main -->
    <link href="{{ asset('css/style-form.css') }}" rel="stylesheet" /> <!-- // style login -->
    <link href="{{ asset('css/style-karir.css') }}" rel="stylesheet" /> <!-- // style karir -->
    <link href="{{ asset('css/style-user.css') }}" rel="stylesheet" /> <!-- style profile user -->
    <link href="{{ asset('css/style-comingsoon.css') }}" rel="stylesheet" /> <!-- style coming soon -->
    <link href="{{ asset('css/style-password.css') }}" rel="stylesheet" /> <!-- style ganti password -->
    {{-- <link href="{{ asset('css/style-profil.css') }}" rel="stylesheet" /> <!-- // style profil --> --}}
</head>

<body class="d-flex align-items-center h-100 mx-auto" id="register-body">

    <main class="w-100 m-auto">
        <div class="d-flex container-xl align-items-center">
            <div class="register-content w-100">
                <div class="row text-register w-100">
                    <div class="col-12">
                        <h3 class="d-inline">Register Sekarang di</h3>
                        <img class="d-none d-xl-inline"
                            src="{{ asset('image/assets/icons/LOGO_SECONDARY_ORANGE.png') }}" alt=""
                            width="256px">
                    </div>
                    <div class="col-12 d-xl-none pt-5 pb-4">
                        <img class="col-5 col-md-4" src="{{ asset('image/assets/icons/LOGO PRIMARY_ORANGE.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="card-register">
                    <form action="/register" method="POST">
                        @csrf
                        <div class="form-register pt-4 m-auto">
                            <div class="row">
                                <div class="col-12 col-md-6 form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" id="name"
                                        placeholder=" " value="{{ old('name') }}" required />
                                    <div class="invalid-feedback text-smaller">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form-group">
                                    <label for="name">Username</label>
                                    <input type="text" name="username"
                                        class="form-control @error('username') is-invalid @enderror" id="username"
                                        placeholder=" " value="{{ old('username') }}" required />
                                    <div class="invalid-feedback text-smaller">
                                        @error('username')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form-group">
                                    <label for="university">Universitas</label>
                                    <input type="text" name="university"
                                        class="form-control @error('university') is-invalid @enderror" id="university"
                                        placeholder=" " value="{{ old('university') }}" required />
                                    <div class="invalid-feedback text-smaller">
                                        @error('university')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form-group">
                                    <label for="major">Jurusan</label>
                                    <input type="text" name="major"
                                        class="form-control @error('major') is-invalid @enderror" id="major"
                                        placeholder=" " value="{{ old('major') }}" required>
                                    <div class="invalid-feedback text-smaller">
                                        @error('major')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email"
                                        placeholder=" " value="{{ old('email') }}" required />
                                    {{-- <div class="input-group-text p-2 d-none" style="background-color: unset; position: absolute; right: 0; border: none;">
                                        <span class="spinner-border text-x-small text-orange" style="width: 16px; height: 16px;" role="status"></span>
                                    </div> --}}
                                    <div class="invalid-feedback text-smaller">
                                        @error('email')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form-group">
                                    <label for="phone_number">No. Telp</label>
                                    <input type="text" name="phone_number"
                                        class="form-control @error('phone_number') is-invalid @enderror"
                                        id="phone_number" placeholder=" " value="{{ old('phone_number') }}"
                                        required />
                                    <div class="invalid-feedback text-smaller">
                                        @error('phone_number')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form-group">
                                    <label for="password">PASSWORD* (Minimal 8 Karakter)</label>
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" id="password"
                                        placeholder=" " required />
                                    <div class="invalid-feedback text-smaller">
                                        @error('password')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form-group">
                                    <label for="confirmation_password">Ulangi Password</label>
                                    <input type="password" name="confirmation_password"
                                        class="form-control @error('confirmation_password') is-invalid @enderror"
                                        id="confirmation_password" placeholder=" " required />
                                    <div class="invalid-feedback text-smaller">
                                        @error('confirmation_password')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="row">
                                        <div class="col-6 d-flex align-items-center">
                                            <div class="small">
                                                <p class="m-0 d-none d-xl-block">Sudah punya akun?</p>
                                                <a href="/login">Kembali ke login</a>
                                            </div>
                                        </div>
                                        <div class="form-button col-6">
                                            <button type="submit" class="btn-orange-static w-100"
                                                id="register-button" disabled>Register</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/form.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

    <script>
        const formInput = document.querySelectorAll(".form-group input");

        let timer = "";

        formInput.forEach((element) => {
            element.addEventListener("input", (e) => {
                document.querySelector("#register-button").setAttribute("disabled", true);
                clearTimeout(timer);
                timer = setTimeout(() => {
                    validate("register", [
                        "name",
                        "username",
                        "university",
                        "major",
                        "email",
                        "phone_number",
                        "password",
                        "confirmation_password"
                    ], "register-button");
                }, 500);
            });
        });


    </script>
</body>
<!-- JavaScript links -->

</html>
