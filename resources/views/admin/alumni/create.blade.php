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

   <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

<script>
  $('#summernote').summernote({
    height: 300
  });
</script>


@endpush()

@extends('layout_adm.app')

@section('title','Tambah Alumni')

@section('kontent')
<div class="pcoded-content">
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Tambah Data Alumni</h5>
                        <p class="m-b-0">Halaman untuk menambah Alumni</p>
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
                           <a href="{{ route('admin.alumni.tambah') }}">Tambah Alumni</a>
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
                            <form action="{{ route('admin.alumni.store') }}" method="post" autocapitalize="off" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="foto" class="control-label">Foto</label>
                                    <div class="">
                                        <img class="img-preview img-fluid mb-3 col-sm-5"  />
                                        <input type="file" class="uploads form-control" style="margin-top: 20px;" name="foto">
                                    </div>
                                    @error('foto')
                                        <div class="mt-2 text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama')}}"> 
                                    @error('nama')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="angkatan">Angkatan</label>
                                    <input type="text" name="angkatan" id="angkatan" class="form-control" value="{{ old('angkatan')}}"> 
                                    @error('angkatan')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="pesan">Pesan</label>
                                    <input type="text" name="pesan" id="pesan" class="form-control" value="{{ old('pesan')}}"> 
                                    @error('pesan')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="status_kerja">Status Kerja</label>
                                    <input type="text" name="status_kerja" id="status_kerja" class="form-control" value="{{ old('status_kerja')}}"> 
                                    @error('status_kerja')
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