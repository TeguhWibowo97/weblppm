@extends('template/template')

@section('title','Pengabdian Masyarakat Udinus')

@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="container">
            <h1 class="text-center mt-5">Daftar Pengabdian Masyarakat Universitas Dian Nuswantoro</h1>
            <hr>
            <form class="form-inline my-3 float-right ">
                <input class="form-control mr-sm-2" type="search" placeholder="Cari Data Disini" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fas fa-search"> Cari</i></button>
            </form>
            <br>
            <table class="table mt-3">
                <tbody>
                <?php for($i=1; $i<=10; $i++):?>
                    <tr>
                        <tr> 
                            <td><h5 class="text-justify">Sistem Informasi Manajemen Lingkungan Sistem Informasi Manajemen Lingkungan Sistem Informasi Manajemen Lingkungan Sistem Informasi Manajemen Lingkungan</h5>
                                
                                Penulis : <span class="badge badge-warning">Teguh Wibowo</span>
                                NPP : <span class="badge badge-success">0686.11.2019.2020</span>
                                NIDN : <span class="badge badge-info">07898765</span>
                                JabFungsional : <span class="badge badge-danger">Guru Besar</span>
                            </td>
                        </tr>
                    </tr>
                </tbody>
                <?php endfor;?>
            </table>
        </div>
    </div>
</div>

@endsection
