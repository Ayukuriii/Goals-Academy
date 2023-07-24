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
                    <a href="/artikel" class="nav-link custom-fs-1 btn-hover-orange">Artikel</a>
                </li>
                <li class="nav-item">
                    <!--Diskusi Page -->
                    <a href="/diskusi" class="nav-link custom-fs-1 btn-hover-orange">Diskusi</a>
                </li>
                <li class="nav-item">
                    <!--Karir Page-->
                    <a href="/karir" class="nav-link custom-fs-1 btn-hover-orange">Karir</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link custom-fs-1 btn-hover-orange dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item btn-hover-orange custom-fs-1" href="profil_company">Profil Perusahaan</a></li>
                        <!--Profil Perusahaan-->
                        <li><a class="dropdown-item btn-hover-orange custom-fs-1" href="profil_tutor">Profil Tutor</a></li>
                        <!--Profil Tutor-->
                        <li><a class="dropdown-item btn-hover-orange custom-fs-1" href="http://linktr.ee/goalsacademyid">Media Sosial</a></li>
                        <!--Media Sosial-->
                    </ul>
                </li>
                @auth
                    <li class="nav-item d-flex justify-content-center ms-xl-3">
                        <div class="dropdown" id="notification">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" id="dropdown-notification">
                                <i class="fa-solid fa-bell fa-lg text-custom-black"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end p-0 pb-5">
                                <!-- #notification-empty hanya tampil jika tidak ada notifikasi -->
                                {{-- <li id="notification-empty" class="text-center text-secondary">
                                    <i class="fa-solid fa-bell fs-1 mb-3"></i>
                                    <a class="dropdown-item text-smaller">
                                        Belum ada notifikasi
                                    </a>
                                </li> --}}
                                <!-- template notifikasi -->
                                <li>
                                    <a class="dropdown-item fw-bold btn-hover-orange p-3 pb-0 p-0" href="">Notifikasi 1</a>
                                    <span class="text-smaller p-3 pt-0">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </li>
                                <li>
                                    <a class="dropdown-item fw-bold btn-hover-orange p-3 pb-0 p-0" href="">Notifikasi 2</a>
                                    <span class="text-smaller p-3 pt-0">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </li>
                                <li>
                                    <a class="dropdown-item fw-bold btn-hover-orange p-3 pb-0 p-0" href="">Notifikasi 3</a>
                                    <span class="text-smaller p-3 pt-0">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </li>
                                <li>
                                    <a class="dropdown-item fw-bold btn-hover-orange p-3 pb-0 p-0" href="">Notifikasi 4</a>
                                    <span class="text-smaller p-3 pt-0">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </li>
                                <li>
                                    <a class="dropdown-item fw-bold btn-hover-orange p-3 pb-0 p-0" href="">Notifikasi 5</a>
                                    <span class="text-smaller p-3 pt-0">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                </li>
                                <li class="list-footer text-center my-2">
                                    <a href="" class="dropdown-item text-orange btn-hover-orange text-smaller">Notifikasi selengkapnya</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item d-flex justify-content-center">
                        <div class="dropdown" id="account">
                            <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false" id="dropdown-profile">
                                <i class="fa-solid fa-circle-user fa-lg" style="color: #ff8854;"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item btn-hover-orange custom-fs-1" href="/{{ auth()->user()->user_level }}">Profil</a></li>
                                <!--Profil User-->
                                <li>
                                    <form action="/logout" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item btn-hover-orange custom-fs-1" id="log-out">Logout</button>
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
