@extends('layout_adm.app')

@section('title', 'Berita')

@section('kontent')
    <div class="pcoded-content">
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Berita</h5>
                            <p class="m-b-0">Halaman untuk mengelola halaman Berita </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="{{ url('home') }}"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Berita & Informasi</a>
                            </li>
                            <li class="breadcrumb-item">
                               <a href="{{ route('admin.berita.index') }}">Berita</a>
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
                                <a href="{{ route('admin.berita.create')}}" class="btn btn-success btn-sm-mr">
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
                                                <th>Title</th>
                                                <th>Slug</th>
                                                <th>Body</th>
                                                <th>Thumbnail</th>
                                                <th>Kategori</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($berita as $item)
                                                @php
                                                    $dataThumbnail = $item->thumbnail;
                                                    $thumbnail= explode(',', $dataThumbnail);
                                                @endphp
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->title }}</td>
                                                    <td>{{ $item->slug}}</td> 
                                                    <td>{{ Str::limit($item->body, 30)}}</td> 
                                                    <td class="py-1">
                                                        <img src="{{url('images/berita', $thumbnail[0])}}" alt="image" style="margin-right: 10px;" width="150"/>
                                                    </td> 
                                                    <td>{{ $item->categori->name}}</td> 
                                                    <td>
                                                        @if ($item->status=="publish")
                                                            <span class="badge bg-success">
                                                                {{$item->status}}
                                                            </span> 
                                                        @else
                                                            <span class="badge bg-danger">
                                                                {{$item->status}}
                                                            </span> 
                                                        @endif
                                                   </td> 
                                                    <td class="text-center">
                                                        <a href="publish/{{ $item->id }}" class="btn btn-success btn-sm">
                                                            <i class="fa fa-paper-plane"></i>
                                                        </a>
                                                        <a href="berita/{{ $item->id }}/edit" class="btn btn-primary btn-sm">
                                                            <i class="fa fa-pencil"></i>
                                                        </a>
                                                        <form action="berita/{{ $item->id }}" class="d-inline" method="POST" onsubmit="return confirm('yakin hapus data')">
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