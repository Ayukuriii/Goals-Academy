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
            <ul class="navbar-nav mx-auto align-items-center">
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
                    <li class="nav-item d-flex justify-content-center">
                        <div class="dropdown me-3 me-xl-0" id="notification">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" id="dropdown-notification">
                                <i class="fa-solid fa-bell fa-lg" style="color: #363434;"></i>
                                <i class="fa-solid fa-bell fa-lg" style="color: #ff8854; display:none;"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/{{ auth()->user()->user_level }}">Profil</a></li>
                                <!--Profil User-->
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item" id="log-out"><i
                                                class="bi bi-box-arrow-right"></i>Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="dropdown" id="account">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" id="dropdown-profile">
                                <i class="fa-solid fa-circle-user fa-lg" style="color: #ff8854;"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/{{ auth()->user()->user_level }}">Profil</a></li>
                                <!--Profil User-->
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item" id="log-out"><i
                                                class="bi bi-box-arrow-right"></i>Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </li>
                @else
                    <li class="nav-item d-flex justify-content-center">
                        <!--Button Login-->
                        <a href="/login" class="btn-orange-static btn-login nav-link text-light py-2 my-2 ms-2" id="step-login">Login</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
<!-- End Navbar -->
