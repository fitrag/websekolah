@push('scripts')
    <script type="text/javascript">
        function readURL() {
            var input = this;
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $(input).prev().attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $(function () {
            $(".uploads").change(readURL)
            $("#f").submit(function(){
                // do ajax submit or just classic form submit
              //  alert("fake subminting")
                return false
            })
        })
        $(function () {
            $(".upload1").change(readURL)
            $("#f").submit(function(){
                // do ajax submit or just classic form submit
              //  alert("fake subminting")
                return false
            })
        })
        $(function () {
            $(".upload2").change(readURL)
            $("#f").submit(function(){
                // do ajax submit or just classic form submit
              //  alert("fake subminting")
                return false
            })
        })
        $(function () {
            $(".upload3").change(readURL)
            $("#f").submit(function(){
                // do ajax submit or just classic form submit
              //  alert("fake subminting")
                return false
            })
        })


    </script>

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
                        <h5 class="m-b-10">Edit Data Berita</h5>
                        <p class="m-b-0">Halaman untuk menambah Berita </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ url('home') }}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Berita</a>
                        </li>
                        <li class="breadcrumb-item">
                           <a href="{{ route('admin.berita.create') }}">Edit Berita</a>
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
                        
                            <form action="{{ url('berita/'.$data->id) }}" method="post" autocapitalize="off" enctype="multipart/form-data">
                            @method('PUT')    
                            @csrf
                                <div class="form-group">
                                    <label for="title">Kategori</label>
                                    <select class="form-control" name="categorie_id" required="">
                                        <option value="">(Pilih Kategori)</option>
                                        @foreach($categori as $item)
                                            <option value="{{$item->id}}" {{ old('categorie_id', $data->categorie_id)== $item->id? 'selected' : null }}>{{$item->name}}</option>
                                            
                                        @endforeach
                                    </select>

                                    @error('categorie_id')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="title">Judul</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $data->title)}}"> 
                                    @error('title')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                
                                
                                <div class="form-group">
                                    <label for="body">Body / Isi Berita</label>
                                    <textarea name="body" id="konten" class="form-control"> {{ old('body', $data->body) }} </textarea>
                                
                                    @error('body')
                                        <div class="text-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="embeded" >Embeded Video</label>
                                    <textarea type="text" name="embeded" id="embeded" class="form-control " value="" rows="5"> {{ old('embeded', $data->embeded)}} </textarea>
                                    @error('embeded')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="email" class="control-label">Gambar Judul</label>
                                    <div class="">
                                        <img class="img-preview img-fluid mb-3 col-sm-5" @if($data->thumbnail) src="{{ asset('images/berita/'.$judul) }}" @endif />
                                       
                                        <input type="file" value="{{ $data->thumbnail }}"  class="uploads form-control" style="margin-top: 20px;" name="thumbnail">
                                    </div>
                                    @error('thumbnail')
                                        <div class="mt-2 text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">Foto 1 </label>
                                    <div class="">
                                        <img class="img-preview img-fluid mb-3 col-sm-5" @if($data->foto1) src="{{ asset('images/berita/'.$data->foto1) }}" @endif />
                                        <input type="file" value="{{ $data->foto1 }}" class="upload1 form-control" style="margin-top: 20px;" name="foto1">
                                    </div>
                                    @error('foto1')
                                        <div class="mt-2 text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">Foto 2</label>
                                    <div class="">
                                    <img class="img-preview img-fluid mb-3 col-sm-5" @if($data->foto2) src="{{ asset('images/berita/'.$data->foto2) }}" @endif />
                                        <input type="file" class="upload2 form-control" style="margin-top: 20px;" name="foto2">
                                    </div>
                                    @error('foto2')
                                        <div class="mt-2 text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">Foto 3</label>
                                    <div class="">
                                    <img class="img-preview img-fluid mb-3 col-sm-5" @if($data->foto3) src="{{ asset('images/berita/'.$data->foto3) }}" @endif />
                                        <input type="file" class="upload3 form-control" style="margin-top: 20px;" name="foto3">
                                    </div>
                                    @error('foto3')
                                        <div class="mt-2 text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="control-label">Tanggal</label>
                                    <div class="">
                                        <img class="img-preview img-fluid mb-3 col-sm-5" />
                                        <input id="tgl" type="date"  class="form-control" name="edit_at" value="{{   $data->edit_at }}"  >
                                    </div>
                                    @error('edit_at')
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