@extends('dashboard.layouts.main')

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row mx-0 gap-2">
            @include('dashboard.layouts.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between w-75">
                    <h3 class="text-purple fw-bold">Edit User</h3>
                    <a class="d-inline btn-outline-orange py-2 px-4 small" onclick="history.back()"
                        style="cursor: pointer">Back</a>
                </div>

                <!-- Alert -->
                @if (session()->has('update-failed'))
                    <div class="alert alert-danger alert-dismissible fade mt-4 show" role="alert">
                        {{ session('update-failed') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="form w-75 mt-3">
                    <div class="d-flex align-items-center form-group mb-2">
                        @if ($data->image)
                            <img id="preview-image" src="{{ $data->image }}" width="80px" height="80px"
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
                            <img id="temp-image" class="border rounded"
                                src="{{ asset('image/assets/icons/video-goals.svg') }}" alt="Temporary Image"
                                style="object-fit: cover">
                            <a id="save-image" class="btn btn-primary">Submit</a>
                        </div>
                    </div>
                    <form class="row" action="/admin/tambah_user/update/{{ $data->id }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="form-group col-6 mb-3">
                            <label class="form-label small" for="name">NAMA</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                id="name" value="{{ $data->name }}" placeholder=" " required />
                            <div class="invalid-feedback">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group
                                col-6 mb-3">
                            <label class="form-label small" for="name">USERNAME</label>
                            <input type="text" name="username"
                                class="form-control @error('username') is-invalid @enderror" id="username"
                                value="{{ $data->username }}" placeholder=" " required />
                            <div class="invalid-feedback">
                                @error('username')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group
                                col-6 mb-3">
                            <label class="form-label small" for="university">UNIVERSITAS</label>
                            <input type="text" name="university"
                                class="form-control @error('university') is-invalid @enderror" id="university"
                                value="{{ $data->university }}" placeholder=" " required />
                            <div class="invalid-feedback">
                                @error('university')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group
                                col-6 mb-3">
                            <label class="form-label small" for="major">JURUSAN</label>
                            <input type="text" name="major" class="form-control @error('major') is-invalid @enderror"
                                id="major" value="{{ $data->major }}" placeholder=" " required />
                            <div class="invalid-feedback">
                                @error('major')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group
                                col-6 mb-3">
                            <label class="form-label small" for="email">EMAIL</label>
                            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                                id="email" value="{{ $data->email }}" placeholder=" " required />
                            <div class="invalid-feedback">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group
                                col-6 mb-3">
                            <label class="form-label small" for="phone_number">NOMOR HP.</label>
                            <input type="text" name="phone_number"
                                class="form-control @error('phone_number') is-invalid @enderror" id="phone_number"
                                value="{{ $data->phone_number }}" placeholder=" " required />
                            <div class="invalid-feedback">
                                @error('phone_number')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        @if ($data->user_level !== 'admin')
                            <div class="form-group
                                col-6 mb-3">
                                <label class="form-label small" for="user_level">USER LEVEL</label>
                                <select class="form-select border-orange" name="user_level" id="user_level"
                                    aria-label="Default select example">
                                    <option value="user" {{ $data->user_level == 'user' ? 'selected' : '' }}>User
                                    </option>
                                    <option value="moderator" {{ $data->user_level == 'moderator' ? 'selected' : '' }}>
                                        Moderator</option>
                                    <option value="tutor" {{ $data->user_level == 'tutor' ? 'selected' : '' }}>Tutor
                                    </option>
                                    <option value="admin" {{ $data->user_level == 'admin' ? 'selected' : '' }}>Admin
                                    </option>
                                </select>
                            </div>
                        @else
                            <div class="form-group
                                col-6 mb-3">
                                <label class="form-label small" for="user_level">USER LEVEL</label>
                                <select class="form-select border-orange" name="user_level" id="user_level"
                                    aria-label="Default select example">
                                    <option value="admin" {{ $data->user_level == 'admin' ? 'selected' : '' }}>Admin
                                    </option>
                                </select>
                            </div>
                        @endif
                        <!-- Profile Image -->
                        {{-- <div class="form-group col-6 mb-2">
                            <label for="image" class="form-label">Profile Image</label>
                            <input class="form-control @error('image') is-invalid @enderror" type="file"
                                name="image" id="image">
                            @error('image')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div> --}}
                        <div class="form-button col-6 mb-3 d-flex justify-content-end pt-3 pt-xl-5">
                            <button class="btn-orange-static px-4 mt-4 mt-xl-0 d-inline text-end small" id="edit-button"
                                type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Last Page -->
@endsection

@section('script')
    <script>
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
                        url: '/admin/upload',
                        data: {
                            '_token': $('meta[name="_token"]').attr('content'),
                            'user_id': {{ $data->id }}, 'image': roundedCanvas.toDataURL()
                        },
                        dataType: 'json',
                        success: function(response) {
                            alert(response.success);
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

        const formInput = document.querySelectorAll(".form-group input");

        formInput.forEach((element) => {
            element.addEventListener("input", (e) => {
                document.querySelector("#edit-button").setAttribute("disabled", true);
            })
        })

        formInput.forEach((element) => {
            element.addEventListener("change", (e) => {
                validate("edit_user", [
                    "name",
                    "username",
                    "email",
                    "phone_number",
                    "university",
                    "major"
                ], "edit-button", {{ $data->id }});
            });
        });
    </script>
@endsection
