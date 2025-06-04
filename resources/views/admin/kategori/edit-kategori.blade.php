@push('scripts')
   
@endpush()

@extends('layout_adm.app')

@section('title','Edit')

@section('kontent')
<div class="pcoded-content">
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Edit Data kategori</h5>
                        <p class="m-b-0">Halaman untuk menambah kategori </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ url('home') }}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Master</a>
                        </li>
                        <li class="breadcrumb-item">
                           <a href="#">Edit kategori</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                   
                    <div class="card">
                        <div class="card-header">
                            <h5>Isilah data dengan lengkap</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.kategori.update', ['kategori' => $kategori->id])}}" method="post" autocapitalize="off" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="name">Nama Kategori</label>
                                    <input id="name" type="text" class="form-control" name="name" tabindex="1" value="{{ old('name', $kategori->name) }}" required autofocus>
                                    @error('nm_kls')
                                        <div class="alert alert-danger">Mohon di isi nama kategori</div>
                                    @enderror
                                    <div class="invalid-feedback">
                                        Mohon di isi nama kategori
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
   var konten = document.getElementById("konten");
     CKEDITOR.replace(konten,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>
@endpush