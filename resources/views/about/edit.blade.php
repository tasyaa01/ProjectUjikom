@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        About
                    </div>
                    <div class="card-body">
                        <form action="{{ route('about.update', $about->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control  @error('judul') is-invalid @enderror"
                                    name="judul" value="{{ $about->judul }}">
                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sub Judul</label>
                                <input type="text" class="form-control  @error('subjudul') is-invalid @enderror"
                                    name="subjudul" value="{{ $about->subjudul }}">
                                @error('subjudul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Deskripsi</label>
                                <input name="deskripsi" id="deskripsi" type="hidden" class="form-control  @error('deskripsi') is-invalid @enderror">
                                <trix-editor input="deskripsi">{!! $about->deskripsi !!}</trix-editor>
                                @error('deskripsi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto1</label>
                                @if (isset($about) && $about->foto1)
                                    <p>
                                        <img src="{{ asset('images/about/' . $about->foto1) }}"
                                            class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                            alt="">
                                    </p>
                                @endif
                                <input type="file" class="form-control  @error('foto1') is-invalid @enderror"
                                    name="foto1" value="{{ $about->foto1 }}">
                                @error('foto1')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto2</label>
                                @if (isset($about) && $about->foto2)
                                    <p>
                                        <img src="{{ asset('images/about/' . $about->foto2) }}"
                                            class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                            alt="">
                                    </p>
                                @endif
                                <input type="file" class="form-control  @error('foto2') is-invalid @enderror"
                                    name="foto2" value="{{ $about->foto2 }}">
                                @error('foto2')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Foto3</label>
                                @if (isset($about) && $about->foto3)
                                    <p>
                                        <img src="{{ asset('images/about/' . $about->foto3) }}"
                                            class="img-rounded img-responsive" style="width: 75px; height:75px;"
                                            alt="">
                                    </p>
                                @endif
                                <input type="file" class="form-control  @error('foto3') is-invalid @enderror"
                                    name="foto3" value="{{ $about->foto3 }}">
                                @error('foto3')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Visi</label>
                                <input name="visi" id="visi" type="hidden" class="form-control  @error('visi') is-invalid @enderror">
                                <trix-editor input="visi">{!! $about->visi !!}</trix-editor>
                                @error('visi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Misi</label>
                                <input name="misi" id="misi" type="hidden" class="form-control  @error('misi') is-invalid @enderror">
                                <trix-editor input="misi">{!! $about->misi !!}</trix-editor>
                                @error('misi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <div class="d-grid gap-2">
                                    <button class="btn btn-primary" type="submit">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection