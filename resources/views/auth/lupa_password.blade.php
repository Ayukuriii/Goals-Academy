<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="image/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png" /> <!-- Logo Title -->
    <link href="image/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png" /> <!-- Logo Title -->
    <link href="image/site.webmanifest" rel="manifest" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/style-password.css') }}" rel="stylesheet" /> <!-- // style ubah password -->

    <title>Goals Academy | {{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Fontawesome -->
    <script src="https://kit.fontawesome.com/1c256bdeea.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;family=Work+Sans:wght@300;400;500;700&amp;display=swap"
        rel="stylesheet" />
    <script src="https://kit.fontawesome.com/3f9eda8ca0.js" crossorigin="anonymous"></script>
</head>

<body>
    <main id="lupa-password">
        <div class="content container-fluid d-flex flex-column justify-content-center align-items-center">
            <div class="card d-flex justify-content-center align-items-center">
                <h1 class="fw-bold">Lupa Password?</h1>
                <p class="mt-1 mx-auto text-center text-masukkanpassword">Masukkan email kamu dan kami akan <br>
                    mengirim link untuk reset password</p>
                <form action="/lupa-password" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">EMAIL</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="email" name="email" required
                                autofocus />
                        </div>
                    </div>
                    <button type="submit" class="btn-orange-static w-100" id="submit-login">Kirim Email Reset</button>
                </form>

                @if (session()->has('status'))
                    {{ session('status') }}
                @endif
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <img src="image/assets/icons/company.png" width="15px" height="15px" />
                <p class="text-center fw-bold mt-3 ms-2" style="color: #ffff; font-size:12px;">
                    2023 Goals Academy
                </p>
            </div>
        </div>
    </main>
</body>

</html>
