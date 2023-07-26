<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="us-ascii">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="image/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180" />
    <link href="image/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png" /> <!-- Logo Title -->
    <link href="image/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png" /> <!-- Logo Title -->
    <link href="image/site.webmanifest" rel="manifest" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Goals Academy | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Bootstrap -->
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/1c256bdeea.js" crossorigin="anonymous"></script>
    <link href="{{ asset('css/style-nav-footer.css') }}" rel="stylesheet" /> <!-- // style navbar & footer -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" /> <!-- // style main -->
    <link href="{{ asset('css/style-form.css') }}" rel="stylesheet" /> <!-- // style login -->
    <link href="{{ asset('css/style-karir.css') }}" rel="stylesheet" /> <!-- // style karir -->
    <link href="{{ asset('css/style-user.css') }}" rel="stylesheet" /> <!-- style profile user -->
    <link href="{{ asset('css/style-comingsoon.css') }}" rel="stylesheet" /> <!-- style coming soon -->
    <link href="{{ asset('css/style-password.css') }}" rel="stylesheet" /> <!-- style ganti password -->
    {{-- <link href="{{ asset('css/style-profil.css') }}" rel="stylesheet" /> <!-- // style profil --> --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;family=Work+Sans:wght@300;400;500;700&amp;display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/3f9eda8ca0.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link crossorigin="anonymous"
        href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css"
        integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw=="
        referrerpolicy="no-referrer" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"
        integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Swiper JS -->
    <link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.css"
        integrity="sha512-T3xwtELy3dqQUajk2sl4V6x/VnT+WbXgAKIu/Go7L6oDDWf4A5dJbG49vKn0am3dTNh/KHAbU2+4Ih2vVioxSg=="
        referrerpolicy="no-referrer" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js"
        integrity="sha512-V1mUBtsuFY9SNr+ptlCQAlPkhsH0RGLcazvOCFt415od2Bf9/YkdjXxZCdhrP/TVYsPeAWuHa+KYLbjNbeEnWg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Animate AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
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
            <div class="card-login w-100">
                <h3>Login</h3>

                <!-- Alert -->
                @if (session()->has('login-failed'))
                    <div class="alert alert-info alert-dismissible fade mt-4 show" role="alert">
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
                        </div>
                        <div class="form-group w-100">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder=" "
                                required />
                        </div>
                        <div class="form-button mt-2">
                            <button type="submit" class="btn-orange-static w-100" id="submit-login"
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous">
    </script>

    <!-- Bootstrap Javascript Links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Animate AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- JavaScript links -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/form.js') }}"></script>
    <script>
        formInput.forEach((element) => {
            element.addEventListener("change", (e) => {
                validate(e.target);
                updateButton();
            });
        });

        updateButton();
    </script>
</body>

</html>
