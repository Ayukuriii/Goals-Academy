<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="us-ascii">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="image/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180" />
	<link href="image/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png" /> <!-- Logo Title -->
	<link href="image/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png" /> <!-- Logo Title -->
	<link href="image/site.webmanifest" rel="manifest" /><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Goals Academy | Register</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Bootstrap -->
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Fontawesome -->
	<script src="https://kit.fontawesome.com/1c256bdeea.js" crossorigin="anonymous"></script>
	<link href="{{ asset('css/style-nav-footer.css') }}" rel="stylesheet" /> <!-- // style navbar & footer -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" /> <!-- // style main -->
	<link href="{{ asset('css/style-login.css') }}" rel="stylesheet" /> <!-- // style login -->
	<link href="{{ asset('css/style-karir.css') }}" rel="stylesheet" /> <!-- // style karir -->
	<link href="{{ asset('css/style-user.css') }}" rel="stylesheet" /> <!-- style profile user -->
	<link href="{{ asset('css/style-comingsoon.css') }}" rel="stylesheet" /> <!-- style coming soon -->
	<link href="{{ asset('css/style-password.css') }}" rel="stylesheet" /> <!-- style ganti password -->
	{{-- <link href="{{ asset('css/style-profil.css') }}" rel="stylesheet" /> <!-- // style profil --> --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;family=Work+Sans:wght@300;400;500;700&amp;display=swap" rel="stylesheet" /><script src="https://kit.fontawesome.com/3f9eda8ca0.js" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" referrerpolicy="no-referrer" rel="stylesheet" /><script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SmdLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Swiper JS -->
	<link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.css" integrity="sha512-T3xwtELy3dqQUajk2sl4V6x/VnT+WbXgAKIu/Go7L6oDDWf4A5dJbG49vKn0am3dTNh/KHAbU2+4Ih2vVioxSg==" referrerpolicy="no-referrer" rel="stylesheet" /><script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js" integrity="sha512-V1mUBtsuFY9SNr+ptlCQAlPkhsH0RGLcazvOCFt415od2Bf9/YkdjXxZCdhrP/TVYsPeAWuHa+KYLbjNbeEnWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Animate AOS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="d-flex align-items-center h-100 py-4 bg-orange w-75 mx-auto">

    <main class="w-100 m-auto">
        <div class="d-flex container-xl align-items-center">
            <div class="register-content w-100">
                <div class="row text-register w-100">
                    <div class="col-12">
                        <h3 class="d-inline">Register Sekarang di</h3>
                        <img class="d-none d-xl-inline" src="{{ asset('image/assets/icons/LOGO_SECONDARY_ORANGE.png') }}" alt="" width="256px">
                    </div>
                    <div class="col-12 d-xl-none pt-5 pb-4">
                        <img class="col-5 col-md-4" src="{{ asset('image/assets/icons/LOGO PRIMARY_ORANGE.png') }}" alt="">
                    </div>
                </div>
                <div class="card-register">
                    <form action="/register" method="POST">
                        @csrf
                        <div class="form-register pt-4 m-auto">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <div class="form-group w-100">
                                        <label for="name">Nama Lengkap</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder=" " required/>
                                    </div>
                                    <div class="form-group w-100">
                                        <label for="email">Email</label>
                                        <input type="email" name="email" class="form-control" id="email" placeholder=" " required/>
                                    </div>
                                    <div class="form-group w-100">
                                        <label for="university">Universitas</label>
                                        <input type="text" name="university" class="form-control" id="university" placeholder=" " required/>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="form-group w-100">
                                        <label for="phone_number">No. Telp</label>
                                        <input type="text" name="phone_number" class="form-control" id="phone_number" placeholder=" " required/>
                                    </div>
                                    <div class="form-group w-100">
                                        <label for="password">Password* (Minimal 8 Karakter)</label>
                                        <input type="password" name="password" class="form-control" id="password" placeholder=" " required/>
                                    </div>
                                    <div class="form-group w-100">
                                        <label for="major">Jurusan</label>
                                        <input type="text" name="major" class="form-control" id="major" placeholder=" " required>
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
                                            <button type="submit" class="btn btn-center w-100" id="submit-register">Register</button>
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

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <!-- Bootstrap Javascript Links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Animate AOS -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>AOS.init(); </script>

    <script src="{{ asset('js/register.js') }}"></script>
</body>
<!-- JavaScript links -->
<script type="text/javascript" src="js/main.js"></script>

</html>

