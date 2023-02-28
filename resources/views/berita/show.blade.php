@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Berita
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Judul</label>
                            <input type="text" class="form-control" name="judul" value="{{ $berita->judul }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Sub Judul</label>
                            <input type="text" class="form-control" name="subjudul" value="{{ $berita->subjudul }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Isi</label>
                            <!-- <textarea class="form-control" name="isi" readonly>{{ $berita->isi }}</textarea> -->
                            {!! $berita->isi !!}
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Foto</label>
                            @if (isset($berita) && $berita->foto)
                                <p>
                                    <img src="{{ asset('images/berita/' . $berita->foto) }}" class="img-rounded img-responsive"
                                        style="width: 75px; height:75px;" alt="">
                                </p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <div class="d-grid gap-2">
                                <a href="{{ route('berita.index') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection