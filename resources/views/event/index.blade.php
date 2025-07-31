
<style>
    .article-image {
      width: 100%;
      height: auto;
      border-radius: 5px;
    }
    .event-card {
      border-left: 4px solid orange;
      padding-left: 10px;
      margin-bottom: 10px;
      background-color: #f8f9fa;
      border-radius: 5px;
    }
    .video-section {
      margin-top: 20px;
    }
  </style>
@extends('components.layouts.app')
@section('title', 'Detail Berita')
@section('content')

<section id="deatilberita" class="contact">
    <div class="hero-berita" style="background-image: url('{{ asset('img/' . $pengaturan->tumbnail) }}'); height: 200px;"> 
        <div class="overlay-berita">
            <div class="container">
                <br>
                    <nav class="mb-6 mt-4" aria-label="Breadcrumb">
                            <a href="#" class="hover:text-white-600 transition duration-300">
                                Beranda
                            </a>
                            <span class="mx-2">/</span>
                            <a href="#" class="hover:text-white-600 transition duration-300">
                                Event
                            </a>       
                    </nav>  
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
        <div class="col-md-8">
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
        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
            <!-- Berita Terkait -->
            <div class="mb-4">
                <div class="info-box">
                    <i class="bx bx-link"></i>
                    <h3>Berita Terkait</h3>
                    <br>
                    @foreach($ber as $item)
                        @php
                            $dataThumbnail = $item->thumbnail;
                            $thumbnail= explode(',', $dataThumbnail);
                        @endphp
                        <div class="media my-3">
                            <img class="rounded mr-3" src=" {{ asset('images/berita/'.$thumbnail[0]) }}"
                                style="height:60px; width:60px; object-fit: cover; object-position: center;" alt="">
                            <div class="media-body">
                                <div>
                                    <a href="{{ url('show/' . $item->id)}}"> {{$item->title}}</a>
                                </div>
                                {{date('d-M-Y', strtotime($item->edit_at))}}

                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        </div>
    </div>
</section>
    
@endsection