@extends('layouts.main')

@section('container')
<!-- Isi Page -->
<section id="profil_company" class="bg-2 py-5">
    <div class="profil-image container justify-content-center align-items-center mt-5">
        <div class="row card shadow border justify-content-center align-items-center py-5 col-12 col-md-8 col-xl-6 mx-auto" style="background: #ffffff80">
            <img class="img-fluid logo-goals-photo col-6" alt="" src="{{ asset("image/assets/icons/LOGO PRIMARY_ORANGE.png") }}"/>
        </div>
        <div class="text-profile mt-4">
            <div class="text-1">
                <p style="font-weight: bold; color: #4F3F85;">Apa itu Goals Academy?</p>
                <p style="color:#363434 ;">
                    Platform yang berfokus pada bimbingan skripsi secara hybrid, bisa online maupun offline,
                    yang menyediakan berbagai macam program bimbingan yang membantu mahasiswa dalam
                    mengerjakan skripsi dari awal hingga lulus, tentunya dengan bimbingan langsung oleh tutor
                    yang berpengalaman dan ahli di bidangnya.
                </p>
                <br>
                <p style="font-weight: bold; color: #4F3F85;">Visi Kami</p>
                <p style="color:#363434 ;">
                    Berkomitmen dalam mentransformasi tenaga pendidik profesional dan pelajar sebagai pemimpin
                    di masa depan dengan mengedepankan kemajuan dan efektifitas di bidang riset, pendidikan dan
                    keilmuan berbasis inovasi dan teknologi.
                </p>
            </div>
        </div>
    </div>

    </div>
</section>
<!-- Last Page -->
@endsection
