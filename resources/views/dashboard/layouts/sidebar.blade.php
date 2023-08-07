@if (auth()->user()->user_level === 'admin')
    <div class="col-2 side-profile card py-5 d-flex flex-direction-column">
        <div class="card-image mb-4 mx-auto">
            @if (auth()->user()->image)
                <img class="rounded-circle" src="{{ auth()->user()->image }}" width="120" height="120" />
            @else
                <img src="{{ asset('image/assets/images/login/profile-grey.png') }}" />
            @endif
        </div>
        <p class="d-inline text-center fs-6">{{ auth()->user()->name }}</p>
        <div class="d-flex flex-row flex-wrap gap-2 mt-2">
            <a href="/admin" class="mx-auto fw-bold btn-nav p-2 w-100">Dashboard</a>
            <a href="/admin/bimbingan" class="mx-auto fw-bold btn-nav p-2 w-100">Bimbingan</a>
            <a href="/admin/list_user" class="mx-auto fw-bold btn-nav p-2 w-100">List User</a>
            <a href="/admin/artikel" class="mx-auto fw-bold btn-nav p-2 w-100">Artikel</a>
        </div>
    </div>
@elseif (auth()->user()->user_level === 'moderator')
    <div class="col-2 side-profile card py-5 d-flex flex-direction-column">
        <div class="card-image mb-4 mx-auto">
            @if (auth()->user()->image)
                <img class="rounded-circle" src="{{ asset('storage/' . auth()->user()->image) }}" width="120"
                    height="120" />
            @else
                <img src="{{ asset('image/assets/images/login/profile-grey.png') }}" />
            @endif
        </div>
        <p class="d-inline text-center fs-6">{{ auth()->user()->name }}</p>
        <div class="d-flex flex-row flex-wrap gap-2 mt-2">
            <a href="/moderator" class="mx-auto fw-bold btn-nav p-2 w-100">Dashboard</a>
            <a href="/moderator/atur_jadwal" class="mx-auto fw-bold btn-nav p-2 w-100">Atur Jadwal</a>
        </div>
    </div>
@elseif (auth()->user()->user_level === 'tutor')
    <div class="col-2 side-profile card py-5 d-flex flex-direction-column">
        <div class="card-image mb-4 mx-auto">
            @if (auth()->user()->image)
                <img class="rounded-circle" src="{{ asset('storage/' . auth()->user()->image) }}" width="120"
                    height="120" />
            @else
                <img src="{{ asset('image/assets/images/login/profile-grey.png') }}" />
            @endif
        </div>
        <p class="d-inline text-center fs-6">{{ auth()->user()->name }}</p>
        <div class="d-flex flex-row flex-wrap gap-2 mt-2">
            <a href="/tutor" class="mx-auto fw-bold btn-nav p-2 w-100">Dashboard</a>
            <a href="/tutor/bimbingan" class="mx-auto fw-bold btn-nav p-2 w-100">Bimbingan</a>
        </div>
    </div>
@endif
