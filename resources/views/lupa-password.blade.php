<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="image/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png" /> <!-- Logo Title -->
	<link href="image/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png" /> <!-- Logo Title -->
	<link href="image/site.webmanifest" rel="manifest" /><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0">
	
    <title>Goals Academy | {{ $title }}</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<link href="{{ asset('css/style-password.css') }}" rel="stylesheet" /> <!-- // style login -->
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Fontawesome -->
	<script src="https://kit.fontawesome.com/1c256bdeea.js" crossorigin="anonymous"></script>
</head>
<body>
    <section id="lupa-password">
        <div class="card d-flex align-items-center justify-content-center mx-auto bg-light">
            <h1 class="fw-bold">Password Baru* (Minimal 8 Karakter)</h1>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Password Baru* (Minimal 8 Karakter)</label>
                    <div class="input-group">
                        <input type="password" id="pass" class="form-control">
                        <div class="input-group-append">    
                            <span id="mybutton" onclick="change()" class="input-group-text">
    
                                <!-- icon mata bawaan bootstrap  -->
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Ketik Ulang Password Baru*</label>
                    <div class="input-group">
                        <input type="password" id="pass" class="form-control">
                        <div class="input-group-append">    
                            <span id="mybutton" onclick="change()" class="input-group-text">
    
                                <!-- icon mata bawaan bootstrap  -->
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>                        
            </form>
        </div>
    </section>
</body>
</html>