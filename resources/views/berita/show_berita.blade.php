
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

@php
    $dataThumbnail = $berita->thumbnail;
    $thumbnail = explode(',', $dataThumbnail);
@endphp

<section id="deatilberita" class="contact">
    <div class="hero-berita" style="background-image: url('{{ asset('img/' . $pengaturan->tumbnail) }}'); height: 200px;"> 
        <div class="overlay-berita">
            <div class="container">
                <br>
                    <h1>{{ $berita->title }}</h1> 
                    <br>
                    <nav class="mb-6 mt-4" aria-label="Breadcrumb">
                            <a href="#" class="hover:text-white-600 transition duration-300">
                                Beranda
                            </a>
                            <span class="mx-2">/</span>
                            <a href="#" class="hover:text-white-600 transition duration-300">
                                Artikel
                            </a>
                        
                            
                    </nav>  
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
        <!-- Artikel Utama -->
        <div class="col-md-8">
            <div class="card mb-4">
                <div class="info-box">
                    <i class="bx bx-book"></i>
                    <h3> {{ $berita->title }} </h3>
                    <div class="blockquote-footer">
                        {{ date('d-M-Y', strtotime($berita->edit_at)) }}

                    </div>
                    <br>
                    <img src=" {{ asset('images/berita/' . $thumbnail[0]) }}" class="img-preview img-fluid mb-4 col-sm-12"
                        alt="" srcset="" style="width:980px; object-fit: cover; object-position: center;">
                    <br>
                    <div class="container text-justify">
                        {!! $berita->body !!}
                    </div>

                    <div class="text-secondary mt-3 ">
                        <a href="">{{ $berita->categori->name }} </a>
                        &middot; {{ $berita->created_at->diffForHumans() }}
                        &middot;
                        <div class="media my-1">
                            <img width="60" class="rounded-circle mr-3" src=" {{ asset('images/avtr.jpg') }}" alt="">
                            <div class="media-body">
                                <div>
                                    Wrote by {{ $berita->user->username }}
                                </div>
                                @smkn1Sepa
                            </div>
                        </div>
                    </div>
                    <hr>
                <br>
                

                <h5>Komentar</h5>
                @foreach($berita->comments->where('parent_id', null) as $comment)
                    @include('partials.comment', ['comment' => $comment])
                @endforeach

                <!-- Form Komentar -->
                <h6>Tinggalkan Komentar</h6>
                @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <form action="{{ route('komentar.store', $berita->id) }}" method="POST">
                @csrf
                <div class="form-group mb-2">
                    <input type="text" name="nama" class="form-control" placeholder="Nama Anda" required>
                </div>
                <div class="form-group mb-2">
                    <textarea name="komentar" class="form-control" rows="3" placeholder="Tulis komentar..." required></textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-sm">Kirim Komentar</button>
                </form>
                </div>
            </div>
            @php
                $ber = App\Models\Berita::select('id', 'title', 'body', 'thumbnail', 'foto1', 'edit_at')
                    ->where([
                        ['category_id', '=', $berita->category_id],
                        ['status', '=', 'publish'],
                    ])
                    ->orderby('id', 'DESC')
                    ->paginate(10);
            @endphp
              @foreach($ber as $item)
              @endforeach
            <!-- Video -->
            <div class="video-section">
                <div class="info-box">

                    <div class="row g-2 g-md-4">
                        <div class="col-6 col-md-4">
                            <a href="{{ asset('images/berita/' . $berita->foto1) }}" data-gall="portfolioGallery"
                                class="venobox preview-link" title="{{$item->title}}">
                                <img class="w-100 rounded mr-3" src="{{ asset('images/berita/' . $berita->foto1) }}"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-6 col-md-4">
                            <a href="{{ asset('images/berita/' . $berita->foto2) }}" data-gall="portfolioGallery"
                                class="venobox preview-link" title="{{$item->title}}">
                                <img class="w-100 rounded mr-3" src="{{ asset('images/berita/' . $berita->foto2) }}"
                                    alt="">
                            </a>
                        </div>
                        <div class="col-6 col-md-4">
                            <a href="{{ asset('images/berita/' . $berita->foto3) }}" data-gall="portfolioGallery"
                                class="venobox preview-link" title="{{$item->title}}">
                                <img class="w-100 rounded mr-3" src="{{ asset('images/berita/' . $berita->foto3) }}"
                                    alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="video-section">
                

                <div class="info-box">

                    <i class="bx bx-link"></i>
                    <h3>Video</h3>
                    <br>
                    <div class="media py-4">
                        <div class="media-body">
                            {!! $berita->embeded !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sidebar -->
        <div class="col-md-4">
            <!-- Berita Terkait -->
            <div class="mb-4">
                <div class="info-box">
                    <i class="bx bx-link"></i>
                    <h3>Berita Terkait</h3>
                    <p><strong>Tentang : {{ $berita->categori->name }}</strong></p>

                    <br>
                    @foreach($ber as $item)
                        <div class="media my-3">
                            <img class="rounded mr-3" src=" {{ asset('images/berita/' . $item->foto1) }}"
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