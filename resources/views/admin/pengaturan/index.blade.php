@extends('layout_adm.app')

@section('title','Edit')

@section('kontent')
<div class="pcoded-content">
    <div class="page-header">
        <div class="page-block">
            <div class="row align-items-center">
                <div class="col-md-8">
                    <div class="page-header-title">
                        <h5 class="m-b-10">Pengaturan</h5>
                        <p class="m-b-0">Halaman untuk mengatur aplikasi</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="{{ url('home') }}"> <i class="fa fa-home"></i> </a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Pengaturan</a>
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

                            <form action="{{ route('admin.pengaturan.update') }}" method="post" autocapitalize="off" enctype="multipart/form-data">
                                @method('PUT')
                                @csrf

                                <div class="form-group">
                                    <label for="nama_aplikasi">Nama Aplikasi</label>
                                    <input type="text" name="nama_aplikasi" id="nama_aplikasi" class="form-control" value="{{ old('nama_aplikasi', $pengaturan->nama_aplikasi ?? '') }}"> 
                                    @error('nama_aplikasi')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama_sekolah">Nama Sekolah</label>
                                    <input type="text" name="nama_sekolah" id="nama_sekolah" class="form-control" value="{{ old('nama_sekolah', $pengaturan->nama_sekolah ?? '') }}"> 
                                    @error('nama_sekolah')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="npsn">NPSN</label>
                                    <input type="text" name="npsn" id="npsn" class="form-control" value="{{ old('npsn', $pengaturan->npsn ?? '') }}"> 
                                    @error('npsn')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="alamat_sekolah">Alamat Sekolah</label>
                                    <input type="text" name="alamat_sekolah" id="alamat_sekolah" class="form-control" value="{{ old('alamat_sekolah', $pengaturan->alamat_sekolah ?? '') }}"> 
                                    @error('alamat_sekolah')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nm_kepsek">Nama Kepala Sekolah</label>
                                    <input type="text" name="nm_kepsek" id="nm_kepsek" class="form-control" value="{{ old('nm_kepsek', $pengaturan->nm_kepsek ?? '') }}"> 
                                    @error('nm_kepsek')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nip_kepsek">NIP Kepala Sekolah</label>
                                    <input type="text" name="nip_kepsek" id="nip_kepsek" class="form-control" value="{{ old('nip_kepsek', $pengaturan->nip_kepsek ?? '') }}"> 
                                    @error('nip_kepsek')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="akreditasi">Akreditasi</label>
                                    <input type="text" name="akreditasi" id="akreditasi" class="form-control" value="{{ old('akreditasi', $pengaturan->akreditasi ?? '') }}"> 
                                    @error('akreditasi')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kata_pengantar">Kata Pengantar</label>
                                    <textarea name="kata_pengantar" id="kata_pengantar" class="form-control">{{ old('kata_pengantar', $pengaturan->kata_pengantar ?? '') }}</textarea>
                                    @error('kata_pengantar')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="sejarah">Sejarah</label>
                                    <textarea name="sejarah" id="sejarah" class="form-control">{{ old('sejarah', $pengaturan->sejarah ?? '') }}</textarea>
                                    @error('sejarah')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="visi">Visi</label>
                                    <textarea name="visi" id="visi" class="form-control">{{ old('visi', $pengaturan->visi ?? '') }}</textarea>
                                    @error('visi')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="misi">Misi</label>
                                    <textarea name="misi" id="misi" class="form-control">{{ old('misi', $pengaturan->misi ?? '') }}</textarea>
                                    @error('misi')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <img id="logoPreview" src="{{ asset('images/berita/'.$pengaturan->logo ?? '') }}" alt="Logo Sekolah" style="max-width: 200px; max-height: 200px;">
                                </div>
                                <div class="form-group">
                                    <label for="logo">Logo Sekolah</label>
                                    <input type="file" name="logo" id="logo" class="form-control-file">
                                    @error('logo')
                                            <div class="mt-2 text-danger">
                                                {{ $message }}
                                            </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <img id="fotoKepsekPreview" src="{{ asset('images/kepsek/'.$pengaturan->foto_kepsek ?? '') }}" alt="Foto Kepala Sekolah" style="max-width: 200px; max-height: 200px;">
                                </div>
                                <div class="form-group">
                                    <label for="foto_kepsek">Foto Kepala Sekolah</label>
                                    <input type="file" name="foto_kepsek" id="foto_kepsek" class="form-control-file">
                                    @error('foto_kepsek')
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
    $(document).ready(function() {
        // Initialize any JavaScript plugins or custom scripts here
        //create a function for handle preview logo Sekolah
        function previewLogoSekolah(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#logoPreview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        function previewFotoKepsek(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#fotoKepsekPreview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#logo').change(function() {
            previewLogoSekolah(this);
        });
        $('#foto_kepsek').change(function() {
            previewFotoKepsek(this);
        });
    });
</script>
@endpush