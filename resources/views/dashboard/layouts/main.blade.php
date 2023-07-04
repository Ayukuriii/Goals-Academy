<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="us-ascii">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('image/apple-touch-icon.png') }}" rel="apple-touch-icon" sizes="180x180" />
	<link href="{{ asset('image/favicon-32x32.png') }}" rel="icon" sizes="32x32" type="image/png" /> <!-- Logo Title -->
	<link href="{{ asset('image/favicon-16x16.png') }}" rel="icon" sizes="16x16" type="image/png" /> <!-- Logo Title -->
	<link href="{{ asset('image/site.webmanifest') }}" rel="manifest" /><meta http-equiv="X-UA-Compatible" content="IE=edge"><meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Goals Academy | {{ $title }}</title><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Bootstrap -->
    <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<!-- Fontawesome -->
	<script src="https://kit.fontawesome.com/1c256bdeea.js" crossorigin="anonymous"></script>
	<link href="{{ asset('css/style-nav-footer.css') }}" rel="stylesheet" /> <!-- // style navbar & footer -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet" /> <!-- // style main -->
	<link href="{{ asset('css/style-form.css') }}" rel="stylesheet" /> <!-- // style login -->
	<link href="{{ asset('css/style-karir.css') }}" rel="stylesheet" /> <!-- // style karir -->
	<link href="{{ asset('css/style-user.css') }}" rel="stylesheet" /> <!-- style profile -->
	{{-- <link href="{{ asset('css/style-profil.css') }}" rel="stylesheet" /> <!-- // style profil --> --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&amp;family=Work+Sans:wght@300;400;500;700&amp;display=swap" rel="stylesheet" /><script src="https://kit.fontawesome.com/3f9eda8ca0.js" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" integrity="sha512-+EoPw+Fiwh6eSeRK7zwIKG2MA8i3rV/DGa3tdttQGgWyatG/SkncT53KHQaS5Jh9MNOT3dmFL0FjTY08And/Cw==" referrerpolicy="no-referrer" rel="stylesheet" /><script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js" integrity="sha512-IsNh5E3eYy3tr/JiX2Yx4vsCujtkhwl7SLqgnwLNgf04Hrt9BT9SXlLlZlWx+OK4ndzAoALhsMNcCmkggjZB1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Swiper JS -->
	<link crossorigin="anonymous" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.css" integrity="sha512-T3xwtELy3dqQUajk2sl4V6x/VnT+WbXgAKIu/Go7L6oDDWf4A5dJbG49vKn0am3dTNh/KHAbU2+4Ih2vVioxSg==" referrerpolicy="no-referrer" rel="stylesheet" /><script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.3.2/swiper-bundle.min.js" integrity="sha512-V1mUBtsuFY9SNr+ptlCQAlPkhsH0RGLcazvOCFt415od2Bf9/YkdjXxZCdhrP/TVYsPeAWuHa+KYLbjNbeEnWg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<!-- Animate AOS -->
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    @include('partials.navbar')

    <section class="mt-5">
		@yield('container')
	</section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <!-- Bootstrap Javascript Links -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Animate AOS -->
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>AOS.init(); </script>
</body>
<!-- JavaScript links -->
<script type="text/javascript" src="js/main.js"></script>

</html>
