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

    <!-- Ajax -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;family=Work+Sans:wght@300;400;500;700&amp;display=swap" rel="stylesheet" />

    <link href="{{ asset('css/style-nav-footer.css') }}" rel="stylesheet" /> <!-- // style navbar & footer -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" /> <!-- // style main -->
    <link href="{{ asset('css/style-form.css') }}" rel="stylesheet" /> <!-- // style login -->
    <link href="{{ asset('css/style-karir.css') }}" rel="stylesheet" /> <!-- // style karir -->
    <link href="{{ asset('css/style-user.css') }}" rel="stylesheet" /> <!-- style profile user -->
    <link href="{{ asset('css/style-comingsoon.css') }}" rel="stylesheet" /> <!-- style coming soon -->
    <link href="{{ asset('css/style-password.css') }}" rel="stylesheet" /> <!-- style ganti password -->
    {{-- <link href="{{ asset('css/style-profil.css') }}" rel="stylesheet" /> <!-- // style profil --> --}}
</head>

<body class="d-flex align-items-center h-100 py-4 bg-orange">

    <main class="w-100 m-auto">
        <div class="d-xl-flex container align-items-center justify-content-center">
            <div class="col-xl-6 text-light text-center py-5">
                <h1>Selamat Datang di</h1>
                <div class="d-flex align-items-center pt-4 pt-xl-5 mt-2">
                    <img class="col-4 col-xl-6" src="{{ asset('image\assets\icons\LOGO PRIMARY_PUTIH.png') }}"
                        style="margin: auto;">
                </div>
            </div>
            <div class="card-login w-100 mb-5 mb-xl-0">
                <h3>Login</h3>

                <!-- Alert -->
                @if (session()->has('login-failed'))
                    <div class="alert alert-danger alert-dismissible fade mt-4 show" role="alert">
                        {{ session('login-failed') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="form-login">
                    <form action="/login" method="POST">
                        @csrf
                        <div class="form-group w-100" style="margin-top: 10px;">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder=" "
                                required autofocus value="{{ old('email') }}" />
                            <div class="invalid-feedback text-smaller"></div>
                        </div>
                        <div class="form-group w-100">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder=" "
                                required />
                            <div class="invalid-feedback text-smaller"></div>
                        </div>
                        <div class="form-button mt-2">
                            <button type="submit" class="btn-orange-static w-100" id="login-button"
                                disabled>Login</button>
                            <p class="mt-3"><a href="{{ route('lupa_password') }}">Lupa Password?</a></p>
                        </div>
                    </form>
                    <h5>atau gunakan</h5>
                    <div class="d-flex gap-3 justify-content-center align-items-center my-2">
                        <a href="/auth/google"
                            class="btn btn-custom-secondary text-decoration-none text-dark text-smaller"
                            id="google-login" style="width: 160px;">
                            <img alt="" src="{{ asset('image/assets/images/login/icons8-google-48.png') }}"
                                width="25px" height="25px" />
                            <span>Google</span>
                        </a>
                        <a href="/auth/facebook"
                            class="btn btn-custom-secondary text-decoration-none text-dark text-smaller"
                            id="facebook-login" style="width: 160px;">
                            <img alt="" src="{{ asset('image/assets/images/login/icons8-facebook-48.png') }}"
                                width="25px" height="25px" />
                            <span>Facebook</span>
                        </a>
                    </div>
                </div>
                <p class="text-center" style="font-size: 12px; color: #363434;">
                    Belum punya akun?
                    <a href="/register" class="fw-bold text-decoration-none" id="next-register"
                        style="cursor: pointer">Daftar</a>
                </p>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>

    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/form.js') }}"></script>

    <script>
        const formInput = document.querySelectorAll(".form-group input");

        let timer = "";

        formInput.forEach((element) => {
            element.addEventListener("input", (e) => {
                document.querySelector("#login-button").setAttribute("disabled", true);
                clearTimeout(timer);
                setTimeout(() => {
                    validate("login", [
                        "email",
                        "password"
                    ], "login-button");
                }, 500);
            });
        });
    </script>
</body>

</html>
