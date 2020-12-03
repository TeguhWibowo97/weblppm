@extends('template/template')

@section('title','Penelitian Udinus')

@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="container">
            <h1 class="text-center mt-5">Daftar Penelitian Universitas Dian Nuswantoro</h1>
            <hr>
            <form class="form-inline my-3 float-right" method="POST" action="penelitian/cari">
                @csrf
                <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Cari Data Disini" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fas fa-search"> Cari</i></button>
            </form>
            <br>
            <table class="table mt-3">
                <tbody>
                @foreach($penelitian as $p)
                    <tr>
                        <tr> 
                            <td><h5 class="text-justify">  
                                    <a href="penelitian/detail/{{$p->id}} " target="_blank">{{$p->judul}}</a>
                                </h5>
                                
                                Penulis : <span class="badge badge-warning">{{$p->peneliti}}</span>
                                NPP : <span class="badge badge-success">{{$p->npp}}</span>
                                NIDN : <span class="badge badge-info">{{$p->nidn}}</span>
                                JabFungsional : <span class="badge badge-danger">{{$p->jabfung}}</span>
                            </td>
                        </tr>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
