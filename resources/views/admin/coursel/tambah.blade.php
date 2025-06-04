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
       


    </script>

@endpush()

@extends('layout_adm.app')

@section('title','Tambah')

@section('kontent')
<div class="pcoded-content">
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Tambah Data Coursel</h5>
                        <p class="m-b-0">Halaman untuk menambah coursel </p>
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
                           <a href="{{ route('admin.coursels.tambah') }}">Tambah Coursel</a>
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
                            <h5>Isilah data dengan lengkap</h5>
                        </div>
                        <div class="card-body">
                            <form action="{{url('admin/admin/coursels/store')}}" method="post" autocapitalize="off" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group">
                                    <label for="title">Judul</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title') ?? $coursel->title}}"> 
                                    @error('title')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select name="category" id="category" class="form-control">
                                        <option disabled selected>--Pilih--</option>
                                        @foreach ($categories as $category )
                                            <option value="{{$category->id}}"> {{ $category->name }} </option>
                                        @endforeach
                                    </select> 
                                    
                                    @error('category')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="body">Isi</label>
                                    <textarea name="body" id="konten" rows="10" cols="50" class="form-control"> {{ old('body') ?? $coursel->body}} </textarea>
                                    
                                    @error('body')
                                        <div class="text-danger mt-2">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="body">Gambar</label>
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
                                    <label for="embeded">Embeded Video</label>
                                    <input type="text" name="embeded" id="embeded" class="form-control" value="{{ old('embeded') ?? $coursel->embeded}}"> 
                                    @error('embeded')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="link">Link</label>
                                    <input type="text" name="link" id="link" class="form-control" value="{{ old('link') ?? $coursel->link}}"> 
                                    @error('link')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="title">Status Dipublish</label>
                                    <select class="form-control" name="status" required="">
                                        <option value="publish">Publish</option>
                                        <option value="pending">Pending</option>
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

@push('scripts')
<script>
   var konten = document.getElementById("konten");
     CKEDITOR.replace(konten,{
     language:'en-gb'
   });
   CKEDITOR.config.allowedContent = true;
</script>
@endpush