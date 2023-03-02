@extends('layouts.user')
<!-- HEADER START-->
<header class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text">
                        <h1 style="text-align:left">Hewan Tropis Di Dunia</h1>
                        <p class="p-large" style="text-align:left">Penjelasan seputar hewan tropis akan kami bahas disini</p>
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 
</header>
<!-- HEADER END -->

@section('content')
<!-- INTRO START -->
<div class="container py-5">
    <div class="row py-5    ">
        <div class="col-lg-6 pb-5 pb-lg-0 px-3 px-lg-7">
            <div class="section-title">TENTANG KAMI</div>
                <h1>Membangun Komunitas Hewan</h1>
                <h5 class="text-muted mb-3">Berbagai pembahasan mengenai hewan-hewan tropis yang ada di Dunia.</h5>
                <p class="mb-4">Hewan-hewan tropis tentunya ada di berbagai belahan Dunia. Hewan atau serangga yang hidup dalam ekosistem hutan hujan tropis memiliki banyak macam dan ciri khasnya masing-masing. Website Tropisanimal akan menyajikan berbagai informasi mengenai hewan tropis.</p>
            <br>
            <a href="/aboutus" class="btn-solid-reg page-scroll">SEE MORE -></a>
        </div>
        <div class="col-lg-6">
            <div class="row px-10">
                <div class="col-6 p-2">
                    <img class="img-fluid w-100" src="assets_user/images/gajah.png" style="height:210px">
                </div>
                <div class="col-6 p-2">
                    <img class="img-fluid w-100" src="assets_user/images/komodo.png" style="height:210px">
                </div>
                <div class="col-12 p-2">
                    <img class="img-fluid w-100" src="assets_user/images/buaya.png" style="height:210px">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- INTRO END -->


<!-- About -->
<div class="form-1" style="background: url('assets/images/bg.png'); background-size: cover; height:auto">
    <div class="container">
        <div class="row">
            <div class="container-fluid pt-5">
                <div class="container py-5">
                    <div class="d-flex flex-column text-center mb-5">
                        <h1 class="display-5 m-0 white">Kami Membawa Anda</h1>
                        <h1 class="display-5 m-0 white">Untuk Mengetahui Lebih Dalam</h1>
                    </div>
                    <div class="row pb-4">

                        <!-- ABOUT 1 START -->
                        <div class="col-md-5 col-lg-3 mb-4 container">
                            <div class="d-flex flex-column text-center bg-white mb-3 p-3 p-sm-3">
                                <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                                <h3 class="mb-3">Hutan Hujan Tropis</h3><br>
                                <p>
                                    Hutan hujan tropis merupakan bioma berupa hutan yang selalu basah atau lembap. 
                                    Hutan ini memiliki curah hujan yang cukup tinggi serta sinar matahari sepanjang tahun 
                                    sehingga pohon dan tumbuhan di dalamnya dapat tumbuh lebat.
                                </p>
                            </div>
                        </div>
                        <!-- ABOUT  END -->

                        <!-- ABOUT 2 START -->
                        <div class="col-md-5 col-lg-3 mb-4 container">
                            <div class="d-flex flex-column text-center bg-white mb-3 p-3 p-sm-3">
                                <h3 class="flaticon-food display-3 font-weight-normal text-secondary mb-3"></h3>
                                <h3 class="mb-3">Ciri Hutan <br> Hujan Tropis</h3><br>
                                <p>
                                    Hutan Hujan Tropi memiliki tanah yang tinggi kesuburannya, 
                                    Perubahan suhu udara yang tidak terlalu ekstrim, 
                                    Penguapan air laut yang cukup tinggi, 
                                    Curah hujan yang relatof lebih tinggi dan lama, dan 
                                    Hingga 2000mm tiap tahunnya.<br>
                                </p>
                            </div>
                        </div>
                        <!-- ABOUT 2 END -->

                        <!-- ABOUT 3 START -->
                        <div class="col-md-5 col-lg-3 mb-4 container">
                            <div class="d-flex flex-column text-center bg-white mb-3 p-3 p-sm-3">
                                <h3 class="flaticon-grooming display-3 font-weight-normal text-secondary mb-3"></h3>
                                <h3 class="mb-3">Flora Hutan <br> Hujan Tropis</h3><br>
                                <p>
                                    Beragam tumbuhan yang hidup di hutan hujan tropis.Bahkan kita dapat 
                                    menemukan hingga 2.500 spesies tinggal dalam ekosistem ini. Tanaman 
                                    yang dapat ditemukan yaitu seperti 
                                    bunga anggrek, pohon pinus, rafflesia dan masih banyak lagi.
                                </p>
                            </div>
                        </div>
                        <!-- ABOUT 3 END -->

                        <!-- ABOUT 4 START -->
                        <div class="col-md-5 col-lg-3 mb-4 container">
                            <div class="d-flex flex-column text-center bg-white mb-3 p-3 p-sm-3">
                                <h3 class="flaticon-house display-3 font-weight-normal text-secondary mb-3"></h3>
                                <h3 class="mb-3">Fauna Hutan <br> Hujan Tropis</h3><br>
                                <p>
                                    Seperti tanaman, hewan yang hidup di hutan hujan tropis ini pun begitu beragam. Seperti
                                    Serangga, burung, reptil, hingga mamalia bisa ditemukan di sini. Hewan yang 
                                    dapat ditemukan yaitu seperti babi rusa, Kerbau hitam, gajah, kasuari, dan lainnya.
                                </p>
                            </div>
                        </div>
                        <!-- ABOUT 4 END -->

                    </div>
                </div>
            </div>
        </div> 
    </div> 
</div> 
<!-- end of About -->

<!-- BERITA START -->
<div class="container pt-5">
    <!-- JUDUL START -->
    <div class="d-flex flex-column text-center mb-5">
        <div class="section-title">BERITA</div>
        <h1>Baca Berita Terbaru Kami <br> Dalam Tropisianimal</h1>
    </div>
    <!-- JUDUL END -->
    <div class="row pb-3 container">
        @foreach ($berita as $data)
        <div class="col-lg-4 mb-5 container">
            <div class="card border-0 mb-2">
                <img class="card-img-top" src="{{ $data->image() }}" style="height:210px">
                <div class="card-body p-3">
                    <p class="card-title"><h5>{{ $data->judul }}</h5></p>
                    <p class="card-text">{{ $data->subjudul }}</p>
                </div>
                <div class="button-container">
                    <a class="btn-solid-reg page-scroll" href="{{ route('detailednews.show', $data->id) }}">DETAILS</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- BERITA END -->

<!-- GALLERY START -->
<section class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="d-flex flex-column text-center mb-5 container">
                <div class="section-title">GALLERY</div>
                <h1>Lihat Lebih Banyak Hewan Tropis<br>Pada Gallery Kami</h1>
            </div>
            <div class="col-12">
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-0 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/monyet.png" style="height:200px; width:230px">
                                    </div>
                                </div>
                                <div class="col-md-0 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/gajah.png" style="height:200px; width:230px">
                                    </div>
                                </div>
                                <div class="col-md-0 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/rusa.png" style="height:200px; width:230px">  
                                    </div>
                                </div>
                                <div class="col-md-0 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/burung.png" style="height:200px; width:230px">  
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-0 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/burung2.png" style="height:200px; width:230px">

                                    </div>
                                </div>
                                <div class="col-md-0 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/komodo.png" style="height:200px; width:230px">
                                    </div>
                                </div>
                                <div class="col-md-0 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/bunglon.png" style="height:200px; width:230px">
                                    </div>
                                </div>
                                <div class="col-md-0 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/buaya.png" style="height:200px; width:230px">
                                    </div>
                                </div>

                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-0 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/singa.png" style="height:200px; width:230px">

                                    </div>
                                </div>
                                <div class="col-md-0 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/elang.png" style="height:200px; width:230px">
                                    </div>
                                </div>
                                <div class="col-md-0 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/badak2.png" style="height:200px; width:230px">
                                    </div>
                                </div>
                                <div class="col-md-0 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/singa2.png" style="height:200px; width:230px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-control-prev bg-transparent">
                            <a class="btn mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="prev">
                                <i class="fa fa-arrow-left"></i>
                            </a>
                        </div>
                        <div class="carousel-control-next bg-transparent">
                            <a class="btn mb-3 " href="#carouselExampleIndicators2" role="button" data-slide="next">
                                <i class="fa fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- GALLERY END -->
@endsection