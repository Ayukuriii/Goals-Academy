<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <div class="container col-4">
        <div class="row mt-4 mb-2">
            <div class="card">
                <div class="card-body">
                    <h3>{{ $data->title }}</h3>
                </div>
            </div>
        </div>

        <div class="row my-2">
            <div class="card">
                <div class="card-body">
                    <form action="">
                        <div class="input-group mb-3">
                            <div class="form-floating">
                                <label for="date"></label>
                                <input type="date" class="form-control" id="date" placeholder=" ">
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    @foreach ($sesi as $item)
                                    <option value="{{ $item->id }}">{{ $item->sesi }}</option>
                                    @endforeach
                                </select>
                                <label for="floatingSelect">Pilih Jam</label>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder=" " id="catatan" style="height: 75px"></textarea>
                                <label for="catatan">Beri Catatan</label>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>

</html>