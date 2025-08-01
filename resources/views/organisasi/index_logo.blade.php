@extends('components.layouts.app')
@section('title', 'Logo')
@section('content')

<section id="deatilberita" class="contact">
    <div class="hero-berita" style="background-image: url('{{ asset('img/' . $pengaturan->tumbnail) }}'); height: 200px;"> 
        <div class="overlay-berita">
            <div class="container">
                <br>
                    <h1>Logo Resmi SMKN 1 Seputih Agung</h1> 
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

    <div class="container py-5 text-left">
        <div class="row">
            <div class="col-md-8 text-center">
                <div class="info-box mb-4">
                    <h2 class="mb-4"></h2>
                    
                    <div class="mb-4">
                        <img src="{{ asset('images/LOGO_SMK.png') }}" alt="Logo Sekolah" class="img-fluid" style="max-height: 300px;">
                    </div>
                    
                    <a href="{{ asset('images/LOGO_SMK.png') }}" download class="btn btn-primary mt-4 mb-4">
                        <i class="bi bi-download"></i> 
                    </a>
                    
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-4">
                    <div class="info-box">
                        <i class="bx bx-link"></i>
                        <h3>Update Berita</h3>

                        <br>
                        @foreach($berita as $item)
                            <div class="media my-3">
                                <img class="rounded mr-3" src=" {{ asset('images/berita/' . $item->foto1) }}"
                                    style="height:60px; width:60px; object-fit: cover; object-position: center;" alt="">
                                <div class="media-body">
                                    <div>
                                        <a href="{{ url('show/' . $item->id)}}"> {{  Str::limit(strip_tags($item->title), 20)}}</a>
                                    </div>
                                    {{date('d-M-Y', strtotime($item->edit_at))}}

                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="info-box mt-2">
                    <h3 class="font-weight-bold mb-3">Events Sekolah</h3>
                    @foreach($events as $event)
                    <a href="{{ route('event.show', $event->slug) }}">
                        <div class="event-card">
                            <div class="d-flex align-items-center">
                                <div class="event-date">
                                    <div class="event-day">{{ \Carbon\Carbon::parse($event->tgl)->format('d') }}</div>
                                    <div class="event-month">{{ \Carbon\Carbon::parse($event->tgl)->format('M') }}</div>
                                </div>
                                <div class="flex-grow-1">
                                    <div class="event-title">{{$event->judul }}</div>
                                    <div class="event-details">📅
                                        {{ \Carbon\Carbon::parse($event->tgl)->format('d M Y H:i:s') }}
                                    </div>
                                    <div class="event-details">📍 {{ $event->lokasi }}</div>
                                </div>
                            </div>
                        </div>
                    </a>
                    @endforeach
                    <a href="{{ route('event.index') }}" class="btn btn-orange w-100 font-weight-bold">Lihat Semua Event</a>
                </div>
            </div>
        </div>
    </div>

    
</section>

@endsection