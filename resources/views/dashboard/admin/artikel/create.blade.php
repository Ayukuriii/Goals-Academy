@extends('dashboard.layouts.main')

@section('trix')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
@endsection

@section('container')
    {{-- {{ dd($collections) }} --}}
    <!-- Isi Page -->
    <section class="container-fluid mb-5" id="user-profile">
        <div class="row mx-0 gap-2">
            @include('dashboard.layouts.sidebar')

            <div class="card col ml-3 p-4 side-program">
                <div class="d-flex justify-content-between">
                    <h3 class="d-inline text-purple fw-bold">Tambah Artikel Baru</h3>
                </div>

                <form action="{{ route('artikel.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="p-2 mt-2">
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="title">Judul</label>
                            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror"
                                id="title" placeholder=" " value="{{ old('title') }}" required />
                            <div class="invalid-feedback text-smaller">
                                @error('title')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="p-2 mt-2">
                        <div class="form-group col-6 mb-2">
                            <label class="form-label small" for="slug">Slug</label>
                            <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror"
                                id="slug" placeholder=" " value="{{ old('slug') }}" disabled readonly />
                            <div class="invalid-feedback text-smaller">
                                @error('slug')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="p-2 mt-2">
                        <div class="form-group mb-2">
                            <label class="form-label small" for="body">Body</label>
                            <input id="body" type="hidden" name="content">
                            <trix-editor input="body"></trix-editor>
                            <div class="invalid-feedback text-smaller">
                                @error('body')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('script')
    <script>
        const title = document.querySelector('#title');
        const slug = document.querySelector('#slug');

        title.addEventListener('change', function() {
            console.log("title changed");
            fetch('/admin/artikel/checkSlug?title=' + title.value)
                .then(response => response.json())
                .then(data => slug.value = data.slug)
                .catch(error => console.error('Error:', error));

        });
    </script>
@endsection
