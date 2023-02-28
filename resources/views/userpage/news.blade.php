@extends('layouts.user')
<!-- HEADER START-->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="text">
                        <h1 style="text-align:left">Berita</h1>
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 
</header>
<!-- HEADER END -->

@section('content')
<!-- BERITA START -->
<div class="container py-5">
    <div class="row py-5">
        <div class="col-lg-6">
            <div class="row px-10">
                <div class="col-5 p-1">
                    <img class="img-fluid w-100" src="assets_user/images/fauna.jpg" style="height:200px">
                </div>
                <div class="col-5 p-1">
                    <img class="img-fluid w-100" src="assets_user/images/flora.jpg" style="height:200px">
                </div>
                <div class="col-10 p-1">
                    <img class="img-fluid w-100" src="assets_user/images/hutan.jpg" style="height:200px">
                </div>
            </div>
        </div>

        <div class="col-lg-6 pb-5 pb-lg-0 px-3 px-lg-7">
                <h1>Hutan Hujan Tropis</h1> <br>
                <p class="mb-4">Hutan hujan tropis atau sering juga ditulis sebagai hutan hujan tropis adalah bioma berupa hutan yang selalu basah atau lembap, yang dapat ditemui di wilayah sekitar khatulistiwa; yakni kurang lebih pada lintang 0°–10° ke utara dan ke selatan garis khatulistiwa.</p>
                <p class="mb-4">Keanekaragaman flora dan fauna yang tumbuh dan berkembang di hutan hujan tropis membuat hutan tersebut lebih asri. Biasanya flora yang ditemukan adalah yang menempel pada tumbuhan (flora epifit), jamur (cendawan), lumut, anggrek, dan rotan. Sementara itu, jenis fauna di hutan hujan tropis, seperti burung, mamalia, monyet, hingga kupu-kupu.</p>
            <br>
        </div> 
    </div>

    <div class="d-flex flex-column text-center mb-5">
        <h1>Berita</h1>
    </div>
    <!-- CARD BERITA START -->
    <div class="row pb-3 container">
        @foreach ($berita as $data)
        <div class="col-lg-4 mb-5 container">
            <div class="card border-0 mb-2">
                <img class="card-img-top" src="{{ $data->image() }}" style="height:210px">
                <div class="card-body p-3">
                    <p class="card-title"><h5>{{ $data->judul }}</h5></p>
                    <p class="card-text">{{ $data->subjudul }}</p>
                    
                    <a class="btn-solid-reg page-scroll" href="{{ route('detailednews.show', $data->id) }}">DETAILS</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <!-- CARD BERITA END -->

</div>
<!-- BERITA END -->
@endsection