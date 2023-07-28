@extends('layouts.main')

@section('container')
<!-- Isi Page -->
    <section id="karir" class="bg-2 mt-5 py-5 px-3 px-xl-0">
        <div class="container-md justify-content-center align-items-center">
            <h1 class="text-center text-purple fw-bold fs-3 pt-3 pb-4">Yuk, Jadi Bagian dari Goals Academy</h1>
            <div class="photo-karir">
                <img class="img-fluid" src="{{ asset('image/assets/icons/steps.svg') }}" />
            </div>
            <div class="photo-karir-mobile">
                <img class="img-fluid" src="{{ asset('image/assets/icons/karir-mobile.svg') }}" />
            </div>
            <div id="karir-list">
                <div class="card-group justify-content-center">
                    <div class="col-12 col-md-6 col-xl-4 d-flex justify-content-center p-3">
                        <div class="card w-100 shadow border-0 rounded-4 p-4">
                            <div class="text-end">
                                <span class="text-xx-small fst-italic">01 Agustus 2023</span>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img class="w-100" src="{{ asset('image/assets/icons/job.png') }}" alt="Karir Icon"/>
                                </div>
                                <div class="col ps-0">
                                    <h2 class="fw-bold fs-6 m-0">Tutor Skripsi</h2>
                                    <span class="text-x-small">Freelance</span>
                                </div>
                            </div>
                            <hr class="w-100">
                            <div class="card-body p-2">
                                <h3 class="fw-bold text-smaller pb-2">Kualifikasi :</h3>
                                <ul class="d-flex flex-column gap-2 ps-3 m-0 text-x-small">
                                    <li>Pendidikan Minimal S1 Semua Jurusan</li>
                                    <li>IPK Minimum 3.5 untuk Jurusan Soshum atau 3.25 untuk Jurusan Saintek</li>
                                    <li>Mempunyai Komunikasi yang Baik</li>
                                    <li>Berpengalaman dalam Penulisan Karya Tulis Ilmiah</li>
                                </ul>
                            </div>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfzl7tOOgtIKlQ9La6zWw9T0qP9nNAtt_axagw80oo8qf9m_A/viewform?usp=sharing" class="btn-orange-static w-100 text-center py-1 mt-3" target="_blank">Lamar</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 d-flex justify-content-center p-3">
                        <div class="card w-100 shadow border-0 rounded-4 p-4">
                            <div class="text-end">
                                <span class="text-xx-small fst-italic">01 Agustus 2023</span>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img class="w-100" src="{{ asset('image/assets/icons/job.png') }}" alt="Karir Icon"/>
                                </div>
                                <div class="col ps-0">
                                    <h2 class="fw-bold fs-6 m-0">Brand Ambassador</h2>
                                    <span class="text-x-small">Kontrak</span>
                                </div>
                            </div>
                            <hr class="w-100">
                            <div class="card-body p-2">
                                <h3 class="fw-bold text-smaller pb-2">Kualifikasi :</h3>
                                <ul class="d-flex flex-column gap-2 ps-3 m-0 text-x-small">
                                    <li>Aktif Sosial Media</li>
                                    <li>Usia Minimal 18 Tahun</li>
                                    <li>Minimal 5K Followers di Sosial Media</li>
                                    <li>Memiliki Kemauan untuk Mencari Jaringan Pemasaran Afiliasi</li>
                                </ul>
                            </div>
                            <a href="https://forms.gle/RqJtqzsMyhm3i2s27" class="btn-orange-static w-100 text-center py-1 mt-3" target="_blank">Lamar</a>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-4 d-flex justify-content-center p-3">
                        <div class="card w-100 shadow border-0 rounded-4 p-4">
                            <div class="text-end">
                                <span class="text-xx-small fst-italic">01 Agustus 2023</span>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-3">
                                    <img class="w-100" src="{{ asset('image/assets/icons/job.png') }}" alt="Karir Icon"/>
                                </div>
                                <div class="col ps-0">
                                    <h2 class="fw-bold fs-6 m-0">Tutor Olah Data</h2>
                                    <span class="text-x-small">Freelance</span>
                                </div>
                            </div>
                            <hr class="w-100">
                            <div class="card-body p-2">
                                <h3 class="fw-bold text-smaller pb-2">Kualifikasi :</h3>
                                <ul class="d-flex flex-column gap-2 ps-3 m-0 text-x-small">
                                    <li>Memahami Tools Olah Data Penelitian</li>
                                    <li>Pendidikan Minimal S1 Semua Jurusan</li>
                                    <li>IPK Minimum 3.25</li>
                                    <li>Memiliki Kemampuan Komunikasi yang Baik</li>
                                </ul>
                            </div>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSfzl7tOOgtIKlQ9La6zWw9T0qP9nNAtt_axagw80oo8qf9m_A/viewform?usp=sharing" class="btn-orange-static w-100 text-center py-1 mt-3" target="_blank">Lamar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section class="bg-2 mt-5 py-5 px-3 px-xl-0" id="karir">
        <div class="container-xl justify-content-center align-items-center"></div>
        <h1 class="text-center text-purple fw-bold fs-3 mb-3 pt-3 pb-4">Yuk, Jadi Bagian dari Goals Academy</h1>
        <div class="photo-karir">
            <img class="img-fluid" src="{{ asset('image/assets/icons/steps.svg') }}" />
        </div>
        <div class="photo-karir-mobile">
            <img class="img-fluid" src="{{ asset('image/assets/icons/karir-mobile.svg') }}" />
        </div>
        {{-- <div class="karir-input">
            <!-- <i class="fa-solid fa-magnifying-glass fa-lg" style="color: #ff8854;"></i> -->
            <input type="text" placeholder="Pembimbing" />
        </div> --}}
        <div class="karir-content">
            <div class="d-flex justify-content-center">
            <div class="karir-card card-1">
                <p
                style="
                    text-align: right;
                    font-size: 9px;
                    font-style: italic;
                    color: #807d7d;
                "
                >
                24 Mei 2023
                </p>
                <div class="top-karir">
                <img
                    src="{{ asset('image/assets/icons/job.png') }}"
                    alt=""
                    width="70px"
                    height="70px"
                />
                <div class="text-top-karir">
                    <h4 style="font-weight: bold; font-size: 15px">
                    Tutor Skripsi
                    </h4>
                    <h3 style="font-size: 10px">Freelance</h3>
                </div>
                <div class="text-bottom-karir">
                    <hr />
                    <p
                    style="font-weight: bold; font-size: 12px; padding-left: 20px"
                    >
                    Kualifikasi:
                    </p>
                    <ul>
                    <li>Pendidikan Minimal S1 Semua Jurusan</li>
                    <li>IPK Minimum 3.5 untuk Jurusan Soshum/3.25 untuk Jurusan Saintek</li>
                    <li>Mempunyai Komunikasi yang Baik</li>
                    <li>Berpengalaman dalam Penulisan dan Penelitian Karya Tulis</li>
                    </ul>
                </div>
                <a id="submit" class="btn-orange-static w-100 text-center py-1" href="https://docs.google.com/forms/d/e/1FAIpQLSfzl7tOOgtIKlQ9La6zWw9T0qP9nNAtt_axagw80oo8qf9m_A/viewform?usp=sharing">
                    Lamar
                </a>
                </div>
            </div>
            <div class="karir-card card-2">
                <p
                style="
                    text-align: right;
                    font-size: 9px;
                    font-style: italic;
                    color: #807d7d;
                "
                >
                24 Mei 2023
                </p>
                <div class="top-karir">
                <img
                    src="{{ asset('image/assets/icons/job.png') }}"
                    alt=""
                    width="70px"
                    height="70px"
                />
                <div class="text-top-karir">
                    <h4 style="font-weight: bold; font-size: 15px">
                    Brand Ambassador
                    </h4>
                    <h3 style="font-size: 10px">Kontrak Tertentu</h3>
                </div>
                <div class="text-bottom-karir">
                    <hr />
                    <p
                    style="font-weight: bold; font-size: 12px; padding-left: 20px"
                    >
                    Kualifikasi:
                    </p>
                    <ul>
                    <li>Aktif Sosial Media</li>
                    <li>Usia Minimal 18 Tahun</li>
                    <li>Minimal 5K Followers di Media Sosial</li>
                    <li>Memiliki Kemauan untuk Mencari Jaringan Pemasaran Affiliasi</li>
                    </ul>
                </div>
                <a id="submit" class="btn-orange-static w-100 text-center py-1" href="https://forms.gle/RqJtqzsMyhm3i2s27">Lamar</a>
                </div>
            </div>
            <div class="karir-card card-3">
                <p
                style="
                    text-align: right;
                    font-size: 9px;
                    font-style: italic;
                    color: #807d7d;
                "
                >
                24 Mei 2023
                </p>
                <div class="top-karir">
                <img
                    src="{{ asset('image/assets/icons/job.png') }}"
                    alt=""
                    width="70px"
                    height="70px"
                />
                <div class="text-top-karir">
                    <h4 style="font-weight: bold; font-size: 15px">
                    Tutor Olah Data
                    </h4>
                    <h3 style="font-size: 10px">Freelance</h3>
                </div>
                <div class="text-bottom-karir">
                    <hr />
                    <p
                    style="font-weight: bold; font-size: 12px; padding-left: 20px"
                    >
                    Kualifikasi:
                    </p>
                    <ul>
                    <li>Memahami Tools Olah Data Penelitian</li>
                    <li>Pendidikan Minimal S1 Semua Jurusan</li>
                    <li>IPK Minimum 3.25</li>
                    <li>Memiliki Kemampuan Komunikasi yang Baik</li>
                    </ul>
                </div>
                <a id="submit" class="btn-orange-static w-100 text-center py-1" href="https://docs.google.com/forms/d/e/1FAIpQLSfzl7tOOgtIKlQ9La6zWw9T0qP9nNAtt_axagw80oo8qf9m_A/viewform?usp=sharing">Lamar</a>
                </div>
            </div>
            </div>
        </div>
    </section> -->
<!-- Last Page -->
@endsection
