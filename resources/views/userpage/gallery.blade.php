@extends('layouts.user')
<!-- HEADER START-->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="text">
                        <h1 style="text-align:left">Galeri</h1>
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 
</header>
<!-- HEADER END -->

@section('content')
<br>
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
                                        <img class="img-fluid" src="assets_user/images/kurakura.png" style="height:250px; width:1100px">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-0 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/buaya2.png" style="height:250px; width:1100px">

                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="carousel-item">
                            <div class="row">
                                <div class="col-md-0 mb-3">
                                    <div class="card">
                                        <img class="img-fluid" src="assets_user/images/singa2.png" style="height:250px; width:1100px">

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

<div class="container">
<div class="row g-0">
    @foreach ($gallery as $data)
    <div class="col-md-3 container">
        <img class="w-100" src="{{ $data->image() }}" style="height:220px"><br><br>
    </div>
    @endforeach
</div>
</div>
@endsection