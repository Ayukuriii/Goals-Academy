<!-- Navbar -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container" id="navbar-full">
        <button class="navbar-toggler collapsed p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <i class="d-inline fas fa-bars fs-1 d-flex justify-content-start"></i>
        </button>
        <a href="/" class="navbar-brand m-0">
            <img src="{{ asset('image/assets/images/PNG-horison-hitam 1.png') }}">
        </a>
        @auth
            <div class="navbar-button d-flex justify-content-end align-items-center gap-2 gap-md-3 m-0 text-center d-xl-none p-0"
                style="list-style: none">
                <div class="dropdown" id="notification">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        id="dropdown-notification">
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
                            <a class="dropdown-item fw-bold btn-hover-orange p-3 pb-0 p-0" href="">Notifikasi
                                1</a>
                            <span class="text-smaller p-3 pt-0">
                                Lorem ipsum dolor sit amet
                            </span>
                        </li>
                        <li class="list-footer text-center my-2">
                            <a href="" class="dropdown-item text-orange btn-hover-orange text-smaller">Notifikasi
                                selengkapnya</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown" id="account">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        id="dropdown-profile">
                        <i class="fa-solid fa-circle-user fa-lg" style="color: #ff8854;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item btn-hover-orange custom-fs-1"
                                href="/{{ auth()->user()->user_level }}">Profil</a></li>
                        <!--Profil User-->
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item btn-hover-orange custom-fs-1">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        @else
            <div class="navbar-button m-0 text-center d-xl-none p-0">
                <div class="nav-item d-flex justify-content-center">
                    <!--Button Login-->
                    <a href="/login" class="btn-orange-static btn-login nav-link text-light py-2 my-2 w-100"
                        id="step-login">Login</a>
                </div>
            </div>
        @endauth
        <div id="navbar" class="navbar-collapse collapse text-center justify-content-end">
            <ul class="navbar-nav mx-auto align-items-center">
                <li class="nav-item">
                    <!--Artikel Page -->
                    @if (auth()->user())
                        @php
                            $user = auth()->user();
                        @endphp
                        @if ($user->is_completed === 0)
                            <a href="/lengkapi-profile/{{ $user->id }}"
                                class="nav-link custom-fs-1 btn-hover-orange">Program</a>
                        @else
                            <a href="/program" class="nav-link custom-fs-1 btn-hover-orange">Program</a>
                        @endif
                    @else
                        <a href="/program" class="nav-link custom-fs-1 btn-hover-orange">Program</a>
                    @endif

                </li>
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
                    <a class="nav-link custom-fs-1 btn-hover-orange dropdown-toggle" href="#" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Tentang Kami
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item btn-hover-orange custom-fs-1" href="profil_company">Profil
                                Perusahaan</a></li>
                        <!--Profil Perusahaan-->
                        <li><a class="dropdown-item btn-hover-orange custom-fs-1" href="profil_tutor">Profil Tutor</a>
                        </li>
                        <!--Profil Tutor-->
                        <li><a class="dropdown-item btn-hover-orange custom-fs-1"
                                href="http://linktr.ee/goalsacademyid">Media Sosial</a></li>
                        <!--Media Sosial-->
                    </ul>
                </li>
            </ul>
        </div>
        @auth
            <div class="navbar-button flex-row justify-content-end align-items-center gap-2 gap-md-3 m-0 text-center d-none d-xl-flex p-0"
                style="list-style: none">
                <div class="dropdown" id="notification">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        id="dropdown-notification">
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
                            <a class="dropdown-item fw-bold btn-hover-orange p-3 pb-0 p-0" href="">Notifikasi
                                1</a>;aller p-3 pt-0">
                                Lorem ipsum dolor sit amet
                            </span>
                        </li>
                        
                        <li class="list-footer text-center my-2">
                            <a href="" class="dropdown-item text-orange btn-hover-orange text-smaller">Notifikasi
                                selengkapnya</a>
                        </li>
                    </ul>
                </div>
                <div class="dropdown" id="account">
                    <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"
                        id="dropdown-profile">
                        <i class="fa-solid fa-circle-user fa-lg" style="color: #ff8854;"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item btn-hover-orange custom-fs-1"
                                href="/{{ auth()->user()->user_level }}">Profil</a></li>
                        <!--Profil User-->
                        <li>
                            <form action="/logout" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item btn-hover-orange custom-fs-1">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        @else
            <div class="navbar-button m-0 text-center d-none d-xl-block p-0">
                <div class="nav-item d-flex justify-content-center">
                    <!--Button Login-->
                    <a href="/login" class="btn-orange-static btn-login nav-link text-light py-2 my-2 w-100"
                        id="step-login">Login</a>
                </div>
            </div>
        @endauth
    </div>
</nav>
<!-- End Navbar -->
