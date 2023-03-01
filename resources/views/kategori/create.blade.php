@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card">
                    <div class="card-header">
                        Kategori
                    </div>
                    <div class="card-body">
                        <form action="{{ route('kategori.store') }}" method="post" enctype="multipart/form-data">
                               @csrf
                            <div class="form-outline mb-4 form-floating">
                                <label class="form-label">Nama Kategori</label>
                                <input type="text" class="form-control  @error('namakategori') is-invalid @enderror" name="namakategori">
                                @error('namakategori')
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