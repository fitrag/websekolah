@extends('layout_adm.app')

@section('title', 'Kategori')

@section('kontent')
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Kategori</h5>
                            <p class="m-b-0">Halaman untuk mengelola halaman Kategori </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ url('home') }}"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Kategori</a>
                            </li>
                            <li class="breadcrumb-item">
                               <a href="{{ route('admin.kategori.index') }}">Kategori</a>
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
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif

                        <div class="card">
                            <div class="card-header">
                                
                                <button class="btn btn-success float-left mb-2" data-target="#exampleModal" data-toggle="modal">
                                    <i class="fa fa-plus">
                                        Tambah
                                    </i>
                                </button>
                            </div>
                            <br>
                    

                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-sm table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Nama</th>
                                                <th>Slug</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($jurusans as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->name}}</td>
                                                    <td>{{ $item->slug}}</td>
                                                    <td class="text-center">
                                                        <a href="{{route('admin.jurusan.edit', ['id' => $item->id])}}" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <form action="jurusan/{{ $item->slug }}" class="d-inline" method="POST" onsubmit="return confirm('yakin hapus data')">
                                                            @method('delete')
                                                            @csrf
                                                            <button class="btn btn-danger btn-sm">
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
        </div>
    </div>

<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">  
    <div class="modal-dialog modal-m" role="document">
    <div class="modal-content">
        <div class="modal-header">
        <h5 class="modal-title">Tambah Kelas</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{ route('admin.jurusan.store') }}" class="needs-validation" novalidate="">
                @csrf
                <div class="form-group">
                    <label for="name">Nama Jurusan</label>
                    <input id="name" type="text" class="form-control" name="name" tabindex="1" placeholder="contoh: DKV" required autofocus>
                    @error('name')
                        <div class="alert alert-danger">Mohon di isi nama jurusan</div>
                    @enderror
                    <div class="invalid-feedback">
                        Mohon di isi nama jurusan
                    </div>
                </div>

                <div class="form-group">
                    <label for="description">Deskripsi</label>
                    <textarea id="description" class="form-control" name="description" tabindex="2" placeholder="" required></textarea>
                    @error('description')
                        <div class="alert alert-danger">Mohon di isi deskripsi jurusan</div>
                    @enderror
                    <div class="invalid-feedback">
                        Mohon di isi deskripsi jurusan
                    </div>

                <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary btn-m">
                    Tambah
                    </button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>
    
@endsection