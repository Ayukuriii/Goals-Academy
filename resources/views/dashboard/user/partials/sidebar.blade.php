<div class="col-xl-4 card side-profile h-100">
    <div class="card-header p-3 p-md-4 p-xl-3 d-flex align-items-center justify-content-between d-xl-none">
        <h3 class="card-title m-0">Profil</h3>
        <i class="bi bi-chevron-down fs-4 fw-bold" data-bs-toggle="card-collapse" href="#profile" role="button"
            aria-expanded="false" aria-controls="profile"></i>
    </div>
    <div class="card-collapse d-none d-xl-block" id="profile">
        <div
            class="gap-4 pt-0 gap-md-4 d-flex flex-row-reverse flex-xl-column align-items-md-center justify-content-md-center p-3 p-md-4 p-xl-3">
            <div class="card-image d-flex flex-column align-items-md-center justify-content-md-center mx-auto">
                <div class="px-2 pb-3 pt-0">
                    <img width="128px" style="object-fit: cover" src="{{ asset('image/assets/images/login/profile-grey.png') }}" /><br>
                </div>
                <a href="/user/edit/{{ $posts->id }}"
                    class="mx-auto fw-bold btn-orange py-2 w-100 text-center px-xl-5">Edit Profil</a>
            </div>
            <div class="card-body p-0">
                <small class="card-title">Nama</small>
                <p id="nama-user">{{ $posts['name'] }}</p>
                <small class="card-title">Email</small>
                <p id="email-user">{{ $posts['email'] }}</p>
                <small class="card-title">No. Telepon</small>
                <p id="notelp-user">{{ $posts['phone_number'] }}</p>
                <small class="card-title">Universitas</small>
                <p id="univ-user">{{ $posts['university'] }}</p>
                <small class="card-title">Jurusan</small>
                <p id="jurusan-user">{{ $posts['major'] }}</p>
            </div>
        </div>
    </div>
</div>
