@extends('layout_adm.app')

@section('title', 'Slider')

@section('kontent')
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Slider</h5>
                            <p class="m-b-0">Halaman untuk mengelola halaman slide </p>
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
                               <a href="{{ route('admin.coursels') }}">Coursel</a>
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
                                <a href="{{ route('admin.coursels.tambah')}}" class="btn btn-success btn-sm-mr">
                                    <i class="fa fa-plus">
                                        Tambah
                                    </i>
                                </a>
                            </div>

                            <div class="card-block table-border-style">
                                <div class="table-responsive">
                                    <table id="example1" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>No.</th>
                                                <th>Title</th>
                                                <th>Kategori</th>
                                                <th>Slug</th>
                                                <th>Body</th>
                                                <th>Status</th>
                                                <th>Gambar</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($coursels as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->category->name }}</td>
                                                    <td>{{ $item->title}}</td> 
                                                    <td>{{ $item->slug}}</td>
                                                    <td>{{ $item->body}}</td>
                                                    <td>{{ $item->status}}</td>
                                                    <td>
                                                    <img  style="width:500px;" class="card-img-top"src="{{ asset('images/slider/'. $item->thumbnail) }}" >  
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="{{route('admin.admin.coursel.update', $item->id)}}" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <form action="admin/coursel/{{ $item->slug }}" class="d-inline" method="POST" onsubmit="return confirm('yakin hapus data')">
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