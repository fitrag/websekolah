<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
@extends('components.layouts.app')
@section('title', 'Detail Berita')
@section('content')

@php
    
@endphp

    <section id="deatilberita" class="contact">
        <div class="hero-berita" style="background-image: url('{{ asset('img/' . $pengaturan->tumbnail) }}'); height: 200px;"> 
            <div class="overlay-berita">
                <div class="container">
                    <br>
                        <h1>Berita Berdasarkan Kategori</h1> 
                        <br>
                        <nav class="mb-6 mt-4" aria-label="Breadcrumb">
                            <a href="{{ url('beranda') }}" class="hover:text-white-600 transition duration-300">
                                Beranda
                            </a>
                            <span class="mx-2">/</span>
                            <a href="{{ url('berita') }}#berita" class="hover:text-white-600 transition duration-300">
                                Berita Sekolah
                            </a>
                            <span class="mx-2">/</span>
                            <a href="{{ url('all_berita') }}" class="hover:text-white-600 transition duration-300">
                                Semua Berita
                            </a>
                                
                        </nav> 
                        
                    
                </div>
                
            </div>
        </div>

        <div class="container mt-4">
            <div class="row">
                <!-- Artikel Utama -->
                <div class="col-md-8">
                    <div class="accordion info-box" id="accordionBerita">
                        @foreach($kategoriList as $index => $kategori)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading{{ $index }}">
                                <button class="accordion-button {{ $index != 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                                    📘 {{ $kategori->name }} ({{ $kategori->berita->count() }})
                                </button>
                            </h2>
                            <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionBerita">
                                <div class="accordion-body">
                                    @if($kategori->berita->count())
                                        <div class="row">
                                            @foreach($kategori->berita as $item)
                                            <div class="col-md-4 mb-4">
                                                <div class="card h-100 shadow-sm">
                                                    <img src="{{ asset('images/berita/' . $item->foto1) }}" class="card-img-top" alt="{{ $item->judul }}">
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $item->judul }}</h5>
                                                        <p class="card-text">{{ \Illuminate\Support\Str::limit(strip_tags($item->isi), 100) }}</p>
                                                        <a href="{{ url('show/' .$headline->id) }}" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    @else
                                        <p class="text-muted">Belum ada berita pada kategori ini.</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-md-4">
                    <!-- Berita Terkait -->
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

                    <!-- Event Sekolah -->
                    <div>
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
                                            <div class="event-title">{{ $event->judul }}</div>
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
        </div>
    </section>

@endsection