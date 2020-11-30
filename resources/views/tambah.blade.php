@extends('template/template')


@section('title','Tambah Data')


@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="container mt-5">
            <h1 class="text-center"> Tambah Data</h1>
        </div>
        <div class="container">
            @if(session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check"></i>
                <strong> {{ session('pesan') }}</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>
        <div class="container col-md-6">
            <form method="POST" action="/adddata">
                @csrf
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul">
                </div>
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="text" class="form-control" name="tahun">
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="container col-md-6 my-3">
            <table class="table table-striped text-light">
                <thead class="bg-dark">
                    <tr>
                        <td>#</td>
                        <td>Judul</td>
                        <td>Tahun</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody class="text-dark">
                    @foreach($penelitian as $p)
                    <tr>
                        <td> {{$loop->iteration}} </td>
                        <td> {{ $p->judul }} </td>
                        <td> {{ $p->tahun }} </td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
