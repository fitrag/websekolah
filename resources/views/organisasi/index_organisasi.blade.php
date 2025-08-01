<style>
    .org-container {
      position: relative;
      text-align: center;
    }

    .org-level {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      margin-bottom: 40px;
      position: relative;
    }

    .org-box {
      background-color: white;
      border: 2px solid #0d6efd;
      padding: 10px;
      margin: 10px;
      border-radius: 10px;
      min-width: 220px;
      max-width: 250px;
      position: relative;
      box-shadow: 0 2px 8px rgba(0,0,0,0.1);
      text-align: left;
    }

    .org-box .foto {
      float: left;
      width: 50px;
      height: 50px;
      margin-right: 10px;
    }

    .org-box .foto img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      border-radius: 50%;
    }

    .org-box .info {
      overflow: hidden;
    }

    .org-line-down {
      width: 2px;
      height: 20px;
      background: #000;
      margin: 0 auto;
    }

    .org-group {
      position: relative;
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
    }

    .org-group::before {
      content: '';
      position: absolute;
      top: -20px;
      left: 0;
      height: 2px;
      width: 100%;
      background: #000;
    }

    .org-group > .org-box::before {
      content: '';
      position: absolute;
      top: -20px;
      left: 50%;
      transform: translateX(-50%);
      width: 2px;
      height: 20px;
      background: #000;
    }

    .wali-kelas-box {
      background-color: #f8f9fa;
      border: 1px solid #dee2e6;
      font-size: 14px;
    }
</style>

@extends('components.layouts.app')
@section('title', 'Struktur Organisasi')
@section('content')

<section id="struktur-organisasi" class="py-5 bg-light">
    <div class="hero-berita" style="background-image: url('{{ asset('img/' . $pengaturan->tumbnail) }}'); height: 200px;"> 
        <div class="overlay-berita">
            <div class="container">
                <br>
                    <h1>Struktur Organisasi Sekolah</h1> 
                    <br>
                    <nav class="mb-6 mt-4" aria-label="Breadcrumb">
                            <a href="{{ url('beranda') }}" class="hover:text-white-600 transition duration-300">
                                Beranda
                            </a>
                            <span class="mx-2">/</span>
                            <a href="{{ url('struktur/organisasi') }}" class="hover:text-white-600 transition duration-300">
                                Struktur Organisasi
                            </a>
                        
                            
                    </nav>  
            </div>
        </div>
    </div>


    <div class="container py-5">
    <h2 class="text-center mb-5">Struktur Organisasi SMKN 1 Seputih Agung</h2>

    <!-- Kepala Sekolah -->
    <div class="org-container">
        <div class="org-level">
        <div class="org-box">
            <div class="foto">
            <img src="{{asset('images/guru/teguh.png')}}" alt="Foto">
            </div>
            <div class="info">
            <strong>Kepala Sekolah</strong><br>
            Drs. H. Sutrisno, M.Pd
            </div>
            
            <div class="org-line-down mt-4"></div>
        </div>
        </div>

        <!-- Wakil Kepala Sekolah -->
        <div class="org-level org-group">
        <div class="org-box">
            <div class="foto">
            <img src="https://via.placeholder.com/50" alt="Foto">
            </div>
            <div class="info">
            <strong>Waka Kurikulum</strong><br>Sri Wahyuni, S.Pd
            </div>
        </div>

        <div class="org-box">
            <div class="foto">
            <img src="https://via.placeholder.com/50" alt="Foto">
            </div>
            <div class="info">
            <strong>Waka Kesiswaan</strong><br>Ahmad Fauzi, M.Pd
            </div>
        </div>

        <div class="org-box">
            <div class="foto">
            <img src="https://via.placeholder.com/50" alt="Foto">
            </div>
            <div class="info">
            <strong>Waka Sarpras</strong><br>Dewi Lestari, S.T
            </div>
        </div>

        <div class="org-box">
            <div class="foto">
            <img src="https://via.placeholder.com/50" alt="Foto">
            </div>
            <div class="info">
            <strong>Waka HKI</strong><br>Irma Handayani, S.Kom
            </div>
        </div>
        </div>

        <!-- Kepala Program -->
        <div class="org-level org-group">
        <!-- Tambahkan 5 Kaprog di sini -->
        <div class="org-box">
            <div class="foto"><img src="https://via.placeholder.com/50" alt="Foto"></div>
            <div class="info"><strong>Kaprog. Otomotif</strong><br>Heri Pratama, S.T</div>
        </div>

        <div class="org-box">
            <div class="foto"><img src="https://via.placeholder.com/50" alt="Foto"></div>
            <div class="info"><strong>Kaprog. Pengelasan</strong><br>Susi Andriani, S.T</div>
        </div>

        <div class="org-box">
            <div class="foto"><img src="https://via.placeholder.com/50" alt="Foto"></div>
            <div class="info"><strong>Kaprog. DKV</strong><br>Dina Aulia, S.Sn</div>
        </div>

        <div class="org-box">
            <div class="foto"><img src="https://via.placeholder.com/50" alt="Foto"></div>
            <div class="info"><strong>Kaprog. TKJ</strong><br>Rian Kurniawan, M.Kom</div>
        </div>

        <div class="org-box">
            <div class="foto"><img src="https://via.placeholder.com/50" alt="Foto"></div>
            <div class="info"><strong>Kaprog. Pemasaran</strong><br>Andika Putra, S.E</div>
        </div>
        </div>

        <!-- Kepala Tata Usaha -->
        <div class="org-level">
        <div class="org-box">
            <div class="foto">
            <img src="https://via.placeholder.com/50" alt="Foto">
            </div>
            <div class="info">
            <strong>Kepala Tata Usaha</strong><br>Yanto, S.Sos
            </div>
            <div class="org-line-down mt-3"></div>
        </div>
        </div>

        <!-- Wali Kelas -->
        <div class="org-level org-group">
        <!-- Contoh 6 wali kelas dari 36 -->
        <div class="org-box wali-kelas-box">
            <div class="foto"><img src="https://via.placeholder.com/50" alt="Foto"></div>
            <div class="info">Wali Kelas X-1<br>Budi</div>
        </div>

        <div class="org-box wali-kelas-box">
            <div class="foto"><img src="https://via.placeholder.com/50" alt="Foto"></div>
            <div class="info">Wali Kelas X-2<br>Citra</div>
        </div>

        <div class="org-box wali-kelas-box">
            <div class="foto"><img src="https://via.placeholder.com/50" alt="Foto"></div>
            <div class="info">Wali Kelas XI-1<br>Deni</div>
        </div>

        <div class="org-box wali-kelas-box">
            <div class="foto"><img src="https://via.placeholder.com/50" alt="Foto"></div>
            <div class="info">Wali Kelas XI-2<br>Eka</div>
        </div>

        <div class="org-box wali-kelas-box">
            <div class="foto"><img src="https://via.placeholder.com/50" alt="Foto"></div>
            <div class="info">Wali Kelas XII-1<br>Fajar</div>
        </div>

        <div class="org-box wali-kelas-box">
            <div class="foto"><img src="https://via.placeholder.com/50" alt="Foto"></div>
            <div class="info">Wali Kelas XII-2<br>Gita</div>
        </div>
        </div>
    </div>
    </div>
</section>
@endsection