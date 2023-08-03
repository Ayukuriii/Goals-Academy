<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}">
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
    <link href="{{ asset('css/style-user.css') }}" rel="stylesheet" /> <!-- style profile -->
    <link href="{{ asset('css/cropper.min.css') }}" rel="stylesheet" /> <!-- style profile -->
    {{-- <link href="{{ asset('css/style-profil.css') }}" rel="stylesheet" /> <!-- // style profil --> --}}
</head>

<body class="d-flex align-items-center h-100 mx-auto" id="register-body">

    <main class="w-100 m-auto">
        <div class="d-flex container-xl align-items-center">
            <div class="register-content w-100">
                <div class="row text-register w-100">
                    <div class="col-12">
                        <h3 class="d-inline">Satu langkah lagi.<br> Yuk lengkapi profile mu!</h3>
                    </div>

                    <!-- Alert -->
                    @if (session()->has('update-failed'))
                        <div class="alert alert-danger alert-dismissible fade mt-4 show" role="alert">
                            {{ session('update-failed') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif

                </div>
                <div class="card-register">
                    <form action="/lengkapi-profile/{{ $data->id }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="form-register pt-4 m-auto">
                            <div class="row">
                                <div class="col-12 col-md-6 form-group">
                                    <label for="name">Nama Lengkap</label>
                                    <input type="text" name="name"
                                        class="form-control @error('name') is-invalid @enderror" id="name"
                                        placeholder=" " value="{{ $data->name, old('name') }}" disabled />
                                    <div class="invalid-feedback">
                                        Input tidak valid
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form-group">
                                    <label for="name">Username</label>
                                    <input type="text" name="username"
                                        class="form-control @error('username') is-invalid @enderror" id="username"
                                        placeholder=" " value="{{ $data->username, old('username') }}" required />
                                    <div class="invalid-feedback">
                                        @error('username')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email"
                                        class="form-control @error('email') is-invalid @enderror" id="email"
                                        placeholder=" " value="{{ $data->email, old('email') }}" disabled />
                                    <div class="invalid-feedback">
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
                                    <div class="invalid-feedback">
                                        @error('phone_number')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form-group">
                                    <label for="university">Universitas</label>
                                    <input type="text" name="university"
                                        class="form-control @error('university') is-invalid @enderror" id="university"
                                        placeholder=" " value="{{ old('university') }}" required />
                                    <div class="invalid-feedback">
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
                                    <div class="invalid-feedback">
                                        @error('major')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 col-md-6 form-group">
                                    <label for="password">PASSWORD* (Minimal 8 Karakter)</label>
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" id="password"
                                        placeholder=" " required />
                                    <div class="invalid-feedback">
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
                                    <div class="invalid-feedback">
                                        @error('confirmation_password')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12 mt-3">
                                    <div class="row justify-content-end">
                                        <div class="form-button col-6">
                                            <button type="submit" class="btn-orange-static w-100"
                                                id="submit-button" disabled>Submit</button>
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

    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/form.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/cropper.min.js') }}"></script>

    <script>
        const formInput = document.querySelectorAll(".form-group input");

        let timer = "";

        formInput.forEach((element) => {
            element.addEventListener("input", (e) => {
                document.querySelector("#submit-button").setAttribute("disabled", true);
                clearTimeout(timer);
                timer = setTimeout(() => {
                    validate("lengkapi_profil", [
                        "username",
                        "phone_number",
                        "university",
                        "major",
                        "password",
                        "confirmation_password"
                    ], "submit-button", {{ $data->id }});
                }, 500);
            });
        });
    </script>
</body>
<!-- JavaScript links -->

</html>
