@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('layouts/_flash')
                <div class="card border-secondary">
                    <div class="card-header">
                        Gallery
                        <a href="{{ route('galeri.create') }}" class="btn btn-sm btn-primary" style="float: right">
                            Tambah Data
                        </a>
                    </div> <br>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-middle" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Foto</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php $no = 1; @endphp
                                    @foreach ($gallery as $data)
                                        <tr>
                                            <td>{{ $no++ }}</td>    
                                            <td>
                                                <img src="{{$data->image()}}" width="100" height="100">
                                            </td>
                                            <td>
                                                <form action="{{ route('galeri.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <a href="{{ route('galeri.edit', $data->id) }}" class="btn btn-sm btn-outline-success ">
                                                        <i class="fa fa-edit"></i>
                                                    </a> |
                                                    <a href="{{ route('galeri.show', $data->id) }}" class="btn btn-sm btn-outline-warning">
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
@endsection