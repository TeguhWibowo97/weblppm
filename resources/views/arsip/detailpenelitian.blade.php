@extends('template/template')

@section('title','Detail Penelitian')


@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="container mt-5">
            <h1 class="text-center">Detail Penelitian</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="container mt-3">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading text-center">Judul Penelitian</h4>
                @foreach($penelitian as $p)
                <p>{{$p->judul}}</p>
                
            </div>
        </div>
        <div class="container">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{url('assetAdmin/foto/dosenlogo.jpg')}}" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td>{{$p->peneliti}}</td>
                                    </tr>
                                    <tr>
                                        <td>NPP</td>
                                        <td>:</td>
                                        <td>{{$p->npp}}</td>
                                    </tr>
                                    <tr>
                                        <td>NIDN</td>
                                        <td>:</td>
                                        <td>{{$p->nidn}}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td>Jl. Singosari Raya No 79</td>
                                    </tr>
                                    <tr>
                                        <td>Jabatan Fungsional</td>
                                        <td>:</td>
                                        <td>{{$p->jabfung}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>dosenudinus@dsn.dinus.ac.id</td>
                                    </tr>
                                    <tr>
                                        <td>Kategori Research</td>
                                        <td>:</td>
                                        <td>{{$p->kategori}}</td>
                                    </tr>
                                    <tr>
                                        <td>Dana</td>
                                        <td>:</td>
                                        <td>Rp {{ number_format(6000000) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Proposal</td>
                                        <td>:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Lap. Kemajuan</td>
                                        <td>:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bukti Kontrak</td>
                                        <td>:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Lap Akhir</td>
                                        <td>:</td>
                                        <td></td>
                                    </tr>
                                    <tr>
                                        <td>Bukti Publikasi</td>
                                        <td>:</td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
