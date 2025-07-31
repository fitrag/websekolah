@extends('layout_adm.app')

@section('title', 'Alumni')

@section('kontent')
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Alumni</h5>
                            <p class="m-b-0">Halaman untuk mengelola halaman Alumni </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ url('home') }}"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Alumni</a>
                            </li>
                            <li class="breadcrumb-item">
                               <a href="{{ route('admin.alumni.index') }}">alumni</a>
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
                                <a href="{{ route('admin.alumni.tambah')}}" class="btn btn-success btn-sm-mr">
                                    <i class="fa fa-plus">
                                        Tambah
                                    </i>
                                </a>
                            </div>
                            <br>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-sm table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Foto</th>
                                                <th>Nama</th>
                                                <th>Angkatan</th>
                                                <th>Pesan</th>
                                                <th>Status Kerja</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($alumni as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td class="py-1">
                                                        <img src="{{url($item->foto)}}" alt="image" style="margin-right: 10px;" width="150"/>
                                                    </td> 
                                                    <td>{{ $item->nama }}</td>
                                                    <td>{{ $item->angkatan }}</td> 
                                                    <td>{{ $item->pesan }}</td>
                                                    <td>
                                                        {{ $item->status_kerja }}
                                                   </td> 
                                                    <td class="text-center">
                                                        <a href="alumni/{{ $item->id }}/edit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <form action="alumni/{{ $item->id }}" class="d-inline" method="POST" onsubmit="return confirm('yakin hapus data')">
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

    
@endsection