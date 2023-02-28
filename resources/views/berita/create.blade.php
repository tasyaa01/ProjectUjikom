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
                        <form action="{{ route('berita.store') }}" method="post" enctype="multipart/form-data">
                               @csrf
                            <div class="form-outline mb-4 form-floating">
                                <label class="form-label">Judul</label>
                                <input type="text" class="form-control  @error('judul') is-invalid @enderror" name="judul">
                                @error('judul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4 form-floating">
                                <label class="form-label">Sub Judul</label>
                                <input type="text" class="form-control  @error('subjudul') is-invalid @enderror" name="subjudul">
                                @error('subjudul')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4 form-floating">
                                <label class="form-label">Isi</label>
                                <textarea id="summernote" name="isi"></textarea>
                                <!-- <input name="isi" id="isi" type="hidden"> -->
                                <!-- <trix-editor input="isi"></trix-editor> -->
                                @error('isi')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4 form-floating">
                                <label class="form-label">Foto</label>
                                <input type="file" class="form-control  @error('foto') is-invalid @enderror" name="foto">
                                @error('foto')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-outline mb-4 form-floating">
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