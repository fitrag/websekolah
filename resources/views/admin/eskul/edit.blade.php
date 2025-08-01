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

@section('title','Edit Ekstrakurikuler')

@section('kontent')
<div class="pcoded-content">
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Edit Data Ekstrakurikuler</h5>
                        <p class="m-b-0">Halaman untuk menambah Ekstrakurikuler</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ url('home') }}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Ekstrakurikuler</a>
                        </li>
                        <li class="breadcrumb-item">
                           <a href="{{ route('admin.eskul.tambah') }}">Edit Ekstrakurikuler</a>
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
                            <form action="{{ route('admin.eskul.edit', $eskul->id) }}" method="post" autocapitalize="off" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="nama_eskul">Nama Ekstrakurikuler</label>
                                    <input type="text" name="nama_eskul" id="nama_eskul" class="form-control" value="{{ old('nama_eskul', $eskul->nama_eskul) }}"> 
                                    @error('nama_eskul')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kegiatan">Kegiatan</label>
                                    <input type="text" name="kegiatan" id="kegiatan" class="form-control" value="{{ old('kegiatan', $eskul->kegiatan) }}"> 
                                    @error('kegiatan')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                            
                                <div class="form-group">
                                    <label for="embeded" >Embeded Video</label>
                                    <textarea type="text" name="embeded" id="embeded" class="form-control " value="" rows="5"> {{ old('embeded', $eskul->embeded) }}</textarea> 
                                    @error('embeded')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="thumbnail" class="control-label">Thumbnail</label>
                                    @if($eskul->thumbnail)
                                        <div class="">
                                            <img src="{{ asset('images/eskul/' . $eskul->thumbnail) }}" class="img-preview img-fluid mb-3 col-sm-5" />
                                        </div>
                                    @endif
                                    <div class="">
                                        <img class="img-preview img-fluid mb-3 col-sm-5"  />
                                        <input type="file" class="uploads form-control" style="margin-top: 20px;" name="thumbnail">
                                    </div>
                                    @error('thumbnail')
                                        <div class="mt-2 text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="title">Status Dipublish</label>
                                    <select class="form-control" name="status" required="">
                                        <option value="publish" {{ $eskul->status == 'publish' ? 'selected' : '' }}>Publish</option>
                                        <option value="pending" {{ $eskul->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                    </select>

                                    @error('status')
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