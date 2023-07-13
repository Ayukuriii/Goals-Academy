<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="row text-center mt-5">
        <h1>Our Services</h1>
    </div>
    <div class="row">
        <div class="container col-5">
            @foreach ($datas as $data)
                <div class="card my-2">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->title }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Rp. {{ $data->price }}</h6>
                        <p class="card-text">
                            {{ $data->description }}
                        </p>
                        <a href="/midtrans/order/{{ $data->id }}" class="card-link">Beli Sekarang!</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>

</body>

</html>
