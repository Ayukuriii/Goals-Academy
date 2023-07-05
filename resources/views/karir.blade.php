@extends('layouts.main')

@section('container')
<!-- Isi Page -->
    <section id="karir">
      <div class="text-karir">
        <h1>Yuk, Jadi Bagian dari Goals Academy</h1>
        <p>Tahapan Seleksi</p>
      </div>
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
        <div class="search-karir"></div>
        <div class="karir-card-wrapper">
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
    </section>
    <!-- Last Page -->
@endsection
