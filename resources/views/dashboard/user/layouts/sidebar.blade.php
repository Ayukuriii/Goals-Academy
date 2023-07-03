<div class="col-4 side-profile card py-5 px-4 d-flex flex-direction-column justify-content-center">
    <div class="card-image pb-4 mx-auto">
        <img src="{{ asset('image/assets/images/login/profile-grey.png') }}" />
    </div>
    <a href="/profile/{{ $posts->name }}/edit" class="mx-auto fw-bold btn-orange py-2 px-5">Edit Profil</a>
    <div class="card-body">
        <p class="card-title">Nama</p>
        <h5 id="nama-user">{{ $posts['name'] }}</h5>
        <p class="card-title">Email</p>
        <h5 id="email-user">{{ $posts['email'] }}</h5>
        <p class="card-title">No. Telepon</p>
        <h5 id="notelp-user">{{ $posts['phone_number'] }}</h5>
        <p class="card-title">Universitas</p>
        <h5 id="univ-user">{{ $posts['university'] }}</h5>
        <p class="card-title">Jurusan</p>
        <h5 id="jurusan-user">{{ $posts['major'] }}</h5>
    </div>
</div>
