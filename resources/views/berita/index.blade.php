@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header">
                        Berita
                        <a href="{{ route('berita.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div>  

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Judul</th>
                                        <!-- <th>Sub Judul</th> -->
                                        <th>Kategori</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($berita as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $data->judul }}</td>
                                            <!-- <td>{{ $data->subjudul }}</td> -->
                                            @foreach($kategori as $kategoris)
                                                <td>{{ $kategoris->namakategori }}</td>
                                            @endforeach
                                            <td>
                                                <img src="{{$data->image()}}" width="100" height="100">
                                            </td>
                                            <td>
                                                <form action="{{ route('berita.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('berita.edit', $data->id) }}" class="btn btn-sm btn-outline-success ">
                                                        <i class="fa fa-edit"></i>
                                                    </a> |
                                                    <a href="{{ route('berita.show', $data->id) }}" class="btn btn-sm btn-outline-warning">
                                                        <i class="fa fa-eye"></i>
                                                    </a> |
                                                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Apakah Anda Yakin?')">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
@endsection
