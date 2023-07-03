<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container" id="navbar-full">
        <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars fs-1"></i>
        </button>
        <a href="/" class="navbar-brand">
            <img src="{{ asset('image/assets/images/PNG-horison-hitam 1.png') }}">
        </a>
        <div id="navbar" class="navbar-collapse collapse text-center justify-content-end">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <!--Artikel Page -->
                    <a href="artikel" class="nav-link">Artikel</a>
                </li>
                <li class="nav-item">
                    <!--Diskusi Page -->
                    <a href="diskusi" class="nav-link">Diskusi</a>
                </li>
                <li class="nav-item">
                    <!--Karir Page-->
                    <a href="karir" class="nav-link">Karir</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="profil_company">Profil Perusahaan</a></li>
                        <!--Profil Perusahaan-->
                        <li><a class="dropdown-item" href="profil_tutor">Profil Tutor</a></li>
                        <!--Profil Tutor-->
                        <li><a class="dropdown-item" href="http://linktr.ee/goalsacademyid">Media Sosial</a></li>
                        <!--Media Sosial-->
                    </ul>
                </li>
                @auth
                    <li class="nav-item dropdown ps-3" id="account">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" id="dropdown-profile">
                            <i class="fa-solid fa-bell fa-lg pe-2" style="color: #363434;"></i>
                            <i class="fa-solid fa-bell fa-lg pe-2" style="color: #ff8854; display:none;"></i>
                            <i class="fa-solid fa-circle-user fa-lg" style="color: #ff8854;"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/profile">Profil</a></li>
                            <!--Profil User-->
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item" id="log-out"><i
                                            class="bi bi-box-arrow-right"></i>Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <a href="/login" class="btn btn-login" id="step-login">Login</a>
                    <!--Button Login-->
                @endauth
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->

<!-- PopUp Login -->
<div class="modal-container" id="modal-login">
    <div class="login-content">
        <div class="welcome-login-register">
            <h1>Selamat Datang di</h1>

            <div class="photo-login">
                <img alt="" src="image\assets\icons\LOGO PRIMARY_PUTIH.png" width="320px" height="185px"
                    style="margin: auto;">
            </div>
        </div>
        <div class="card-login">
            <h3>Login/Register</h3>
            <div class="form-login">
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-group" style="margin-top: 10px;">
                        <label for="email">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required />
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required />
                    </div>
                    <div class="form-button">
                        <button type="submit" class="btn btn-center" id="submit-login">Login</button>
                        <p><a href="/auth/lupa-password">Lupa Password?</a></p>
                    </div>
                </form>
                <h5>atau gunakan</h5>
                <div class="card-button">
                    <button type="submit" id="google-login">
                        <img alt="" src="image/assets/images/login/icons8-google-48.png" width="25px"
                            height="25px" />
                        <p>Google</p>
                    </button>
                    <button type="submit" id="facebook-login">
                        <img alt="" src="image/assets/images/login/icons8-facebook-48.png" width="25px"
                            height="25px" />
                        <p>Facebook</p>
                    </button>
                </div>
            </div>
            <p class="text-center" style="font-size: 12px; color: #363434;">Belum punya akun? <span
                    class="fw-bold text-decoration-none" id="next-register" style="cursor: pointer">Daftar</p>
        </div>
    </div>
</div>
</div>
</div>
</div>

<!-- PopUp Register -->
<div class="modal-container" id="modal-register">
    <div class="register-content">
        <div class="text-register">
            <h3>Register Sekarang di</h3>
            <img src="image\assets\icons\LOGO_SECONDARY_ORANGE.png" alt="" width="256" height="38" />
        </div>
        <div class="card-register">
            <form action="/register" method="POST">
                @csrf
                <div class="form-register">
                    <div class="form-left">
                        <div class="form-group" style="margin-top: 10px;">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" name="name" class="form-control" id="name" required />
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" id="email" required />
                        </div>
                        <div class="form-group">
                            <label for="university">Universitas</label>
                            <input type="text" name="university" class="form-control" id="university" required />
                        </div>
                    </div>
                    <div class="form-right">
                        <div class="form-group">
                            <label for="phone_number">No. Telp</label>
                            <input type="text" name="phone_number" class="form-control"
                                id="university"required />
                        </div>
                        <div class="form-group">
                            <label for="password">Password* (Minimal 8 Karakter)</label>
                            <input type="password" name="password" class="form-control" id="password" required />
                        </div>
                        <div class="form-group">
                            <label for="major">Jurusan</label>
                            <input type="text" name="major" class="form-control" id="major"required>
                        </div>
                        <div class="form-button">
                            <button type="submit" class="btn btn-center" id="submit-register">Register</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
