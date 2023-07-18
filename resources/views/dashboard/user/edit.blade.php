@extends('dashboard.layouts.main')

@section('container')
    <!-- Isi Page -->
    <section class="d-flex flex-column flex-xl-row container-fluid container-xl gap-3 gap-xl-4" id="user-profile">
        @include('dashboard.user.partials.sidebar')

        <div class="card col-xl mb-4 p-3 p-md-4 side-program">
            <div>
                <div class="d-flex justify-content-between">
                    <h3 class="d-inline text-purple fw-bold">Edit Profil</h3>
                    <a href="/{{ auth()->user()->user_level }}" class="d-inline btn-outline-orange py-2 px-4 small"
                        style="cursor: pointer">Back</a>
                </div>

                <div class="d-flex align-items-center form-group mb-2">
                    @if ($posts->image)
                        <img id="preview-image" src="{{ $posts->image }}" width="80px" height="80px"
                            alt="Image Preview" />
                    @else
                        <img id="preview-image" src="{{ asset('image/assets/images/login/profile-grey.png') }}"
                            width="80px" height="80px" alt="Image Preview" />
                    @endif
                    <div class="ms-3">
                        <label for="input-image" class="btn-outline-orange px-3 py-2 fw-bold"
                            style="cursor: pointer;">Unggah Foto</label><br>
                        <small style="font-size: 0.7rem">*Maksimum 2MB</small>
                    </div>
                    <input type="file" accept="image/*" class="form-control is-invalid d-none" name="input-image"
                        id="input-image">
                </div>
                {{-- popup --}}
                <div id="cropper" class="bg-fixed d-flex d-none">
                    <div class="card d-flex m-auto gap-3 p-3" style="overflow: hidden">
                        <img id="temp-image" class="border rounded" src="{{ asset('image/assets/icons/video-goals.svg') }}"
                            alt="Temporary Image" style="object-fit: cover">
                        <a id="save-image" class="btn btn-primary">Submit</a>
                    </div>
                </div>

                <form action="/user/update/profile/{{ auth()->user()->id }}" method="POST" class="from row mt-3 px-2">
                    @method('put')
                    @csrf
                    <div class="form-group col-12 col-md-6 mb-xl-2">
                        <label class="form-label small" for="name">NAMA</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="name" placeholder=" " value="{{ $posts->name }}" required />
                        <div class="invalid-feedback">
                            Input tidak valid
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-6 mb-xl-2">
                        <label class="form-label small" for="name">USERNAME</label>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            id="username" placeholder=" " value="{{ $posts->username }}" required />
                        <div class="invalid-feedback">
                            Input tidak valid
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-6 mb-xl-2">
                        <label class="form-label small" for="university">UNIVERSITAS</label>
                        <input type="text" name="university"
                            class="form-control @error('university') is-invalid @enderror" id="university" placeholder=" "
                            value="{{ $posts->university }}" required />
                        <div class="invalid-feedback">
                            Input tidak valid
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-6 mb-xl-2">
                        <label class="form-label small" for="major">JURUSAN</label>
                        <input type="text" name="major" class="form-control @error('major') is-invalid @enderror"
                            id="major" placeholder=" " value="{{ $posts->major }}" required />
                        <div class="invalid-feedback">
                            Input tidak valid
                        </div>
                    </div>
                    <div class="form-group col-12 col-md-6 mb-xl-2">
                        <label class="form-label small" for="phone_number">NOMOR HP.</label>
                        <input type="text" name="phone_number"
                            class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
                            placeholder=" " value="{{ $posts->phone_number }}" required />
                        <div class="invalid-feedback">
                            Input tidak valid
                        </div>
                    </div>
                    <div class="form-button col-12 col-md-6 mb-md-3 d-flex justify-content-end pt-3 pt-md-5">
                        <button class="btn-orange-static px-4 d-inline text-end" id="button"
                            type="submit">Simpan</button>
                    </div>
                </form>
            </div>
            <hr class="w-100">
            <div id="form2" data-bs-toggle="collapse"
            href="#form-email" role="button" aria-expanded="false"
            aria-controls="form-email">
                <h3 class="d-inline text-purple fw-bold">Ubah Email</h3>
                <form id="form-email" class="collapse" action="/user/update/email/{{ auth()->user()->id }}" method="POST"
                    class="from mt-3 px-2 d-none d-xl-block">
                    @method('put')
                    @csrf
                    <div class="row mx-0">
                        <div class="form-group col-12 col-md-6 mb-xl-2">
                            <label class="form-label small" for="email">EMAIL</label>
                            <input type="email" name="email"
                                class="form-control @error('email') is-invalid @enderror" id="email" placeholder=" "
                                value="{{ $posts->email }}" required />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-6 mb-xl-2">
                            <label class="form-label small" for="password">PASSWORD</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror" id="password"
                                placeholder=" " required />
                            <div class="invalid-feedback">
                                Input tidak valid
                            </div>
                        </div>
                        <div class="form-button col-12 mb-xl-3 d-flex justify-content-end pt-3 pt-xl-3">
                            <button class="btn-orange-static px-4 d-inline text-end" id="button"
                                type="submit">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
            <hr class="w-100">
            <div id="form3" data-bs-toggle="collapse"
            href="#form-password" role="button" aria-expanded="false"
            aria-controls="form-password">
                <h3 class="d-inline text-purple fw-bold">Ubah Password</h3>
                <form id="form-password" class="collapse" action="/user/update/password/{{ auth()->user()->id }}" method="POST"
                    class="from row mt-3 px-2 d-none d-xl-block">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group col-12 mb-xl-2">
                                <label class="form-label small" for="new_password">PASSWORD BARU</label>
                                <input type="password" name="new_password"
                                    class="form-control @error('new_password') is-invalid @enderror" id="new_password"
                                    placeholder=" " required />
                                <div class="invalid-feedback">
                                    Input tidak valid
                                </div>
                            </div>
                            <div class="form-group col-12 mb-xl-2">
                                <label class="form-label small" for="confirmation_password">ULANGI PASSWORD BARU</label>
                                <input type="password" name="confirmation_password"
                                    class="form-control @error('confirmation_password') is-invalid @enderror"
                                    id="confirmation_password" placeholder=" " required />
                                <div class="invalid-feedback">
                                    Input tidak valid
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group col-12 mb-xl-2">
                                <label class="form-label small" for="old_password">PASSWORD LAMA</label>
                                <input type="password" name="old_password"
                                    class="form-control @error('old_password') is-invalid @enderror" id="old_password"
                                    placeholder=" " required />
                                <div class="invalid-feedback">
                                    Input tidak valid
                                </div>
                            </div>
                            <div class="form-button col-12 mb-md-3 d-flex justify-content-end pt-3 pt-md-5">
                                <button class="btn-orange-static px-4 d-inline text-end" id="button"
                                    type="submit">Simpan</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Last Page -->
@endsection

@section('script')
    <script>
        // Cropper image
        const inputImage = document.querySelector('#input-image');
        const cropperDiv = document.querySelector('#cropper');
        const tempImage = document.querySelector('#temp-image');
        const saveImageButton = document.querySelector('#save-image');
        const previewImage = document.querySelector('#preview-image');
        const inputPhoto = document.querySelector('#photo')

        inputImage.addEventListener('change', () => {
            const reader = new FileReader()
            reader.readAsDataURL(inputImage.files[0])
            reader.onload = event => {
                tempImage.src = event.target.result
                cropperDiv.classList.remove('d-none')

                const cropper = new Cropper(tempImage, {
                    aspectRatio: 1,
                    viewMode: 3,
                    dragMode: 'move',
                    scalable: true,
                    center: true,
                    ready: function() {
                        croppable = true;
                    },
                })

                saveImageButton.onclick = event => {
                    if (!croppable) {
                        return;
                    }

                    // Crop
                    const croppedCanvas = cropper.getCroppedCanvas({
                        width: 512,
                        height: 512
                    });
                    // Round
                    const roundedCanvas = getRoundedCanvas(croppedCanvas);

                    $.ajax({
                        type: 'post',
                        url: '/upload',
                        data: {
                            '_token': $('meta[name="_token"]').attr('content'),
                            'image': roundedCanvas.toDataURL()
                        },
                        dataType: 'json',
                        success: function(response) {
                            alert(response.success);
                            document.querySelector('#profile img').src = response.image;
                            previewImage.src = response.image;
                        },
                        error: function(xhr, status, error) {
                            console.log(xhr.responseText);
                        }
                    });

                    // console.log(data.x, data.y, data.width, data.height)

                    cropperDiv.classList.add('d-none')
                    cropper.destroy();
                };
            }
        })

        formInput.forEach((element) => {
            element.addEventListener("change", (e) => {
                validate(e.target);
            });
        });
    </script>
@endsection
