@extends('layouts.user')
<!-- HEADER START-->
<header id="header" class="header">
    <div class="header-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="text">
                        <h1 style="text-align:left">Tentang Kami</h1>
                    </div>
                </div> 
            </div> 
        </div> 
    </div> 
</header>
<!-- HEADER END -->

@section('content')

<div class="container py-5">
    <div class="row py-5">
        @foreach ($about as $data)
        <div class="col-lg-6 pb-5 pb-lg-0 px-3 px-lg-7">
                <h1>{{ $data->judul }}</h1>
                <h5 class="text-muted mb-3">{{ $data->subjudul }}</h5>
                <p class="mb-4">{{ $data->deskripsi }}</p>
            <br>
        </div>
        <div class="col-lg-6">
            <div class="row px-10">
                <div class="col-6 p-2">
                    <img class="img-fluid w-100" src="{{  $data->foto1  }}" style="height:210px">
                </div>
                <div class="col-6 p-2">
                    <img class="img-fluid w-100" src="{{  $data->foto2  }}" style="height:210px">
                </div>
                <div class="col-12 p-2">
                    <img class="img-fluid w-100" src="{{  $data->foto3  }}" style="height:210px">
                </div>
            </div>
        </div>

        <div class="col-lg-6 pb-5 pb-lg-0 px-3 px-lg-7">
            <h2>VISI</h2>
            <P class="mb-4">{{ $data->visi }}</P>
            <br>
            <H2>MISI</H2>
            <P class="mb-4">{{ $data->misi }}</P>
        </div>
        @endforeach
    </div>
</div>
@endsection