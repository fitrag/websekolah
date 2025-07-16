@extends('layout_adm.app')

@section('title','Edit')

@section('kontent')
<div class="pcoded-content">
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Tambah Data event</h5>
                        <p class="m-b-0">Halaman untuk menambah event </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ url('home') }}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">event</a>
                        </li>
                        <li class="breadcrumb-item">
                           <a href="{{ route('admin.event.tambah') }}">Tambah event</a>
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
                        
                            <form action="{{ url('admin/event/store') }}" method="post" autocapitalize="off" enctype="multipart/form-data">  
                            @csrf
                                <div class="form-group">
                                    <label for="judul">Judul</label>
                                    <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul')}}"> 
                                    @error('judul')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="isi">Isi</label>
                                    <textarea name="isi" id="konten" class="form-control">{{ old('isi') }}</textarea>
                                
                                    @error('isi')
                                        <div class="text-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="lokasi" class="control-label">Lokasi</label>
                                    <div class="">
                                        <input id="lokasi" type="text"  class="form-control" name="lokasi" value="{{ old('lokasi') }}"  >
                                    </div>
                                    @error('lokasi')
                                        <div class="mt-2 text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tgl" class="control-label">Tanggal</label>
                                    <div class="">
                                        <input id="tgl" type="datetime-local" class="form-control" name="tgl" value="{{ old('tgl') }}"  >
                                    </div>
                                    @error('tgl')
                                        <div class="mt-2 text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
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