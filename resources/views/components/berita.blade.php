<div>
    @php
    $dataThumbnail = $headline->thumbnail;
    $thumbnail = explode(',', $dataThumbnail);
    @endphp

    {{-- Headline --}}
     <section id="berita" class="gambar-berita py-4" >

        <div class="container py-4">
           <b> <h2 class="fw-bold mb-4">Berita Terbaru</h2></b>
           <hr class="text-left" style="width: 205px; border: 2px solid orange; margin-left:0px; margin-top:-25px; ">
            <div class="row mb-4">

                <div class="berita-item col-md-4" data-aos="fade-up">
                    <div class="image-wrapper">
                        <img src="{{ asset('images/berita/' . $thumbnail[0]) }}" class="img-fluid" alt="{{ $headline->title }}">
                        <span class="tanggal-overlay">
                            <i class="bx bx-calendar"></i> {{ \Carbon\Carbon::parse($headline->created_at)->translatedFormat('l, d F Y') }}
                            |&nbsp; {{ $headline->comments->count() }} <i class="bx bx-message"></i> |
                             {{ $headline->views }}x dilihat 
                        </span>
                    </div>
                    <div class="meta-info mt-2 text-muted small">
                    </div>
                </div>
    
                <div class="col-md-8" data-aos="fade-up">
                    <p class="text-primary fw-semibold mb-1">#headline</p>
                    <h4 class="fw-bold">{{ $headline->title }}</h4>
                    <p style="text-align: justify;">{{ Str::limit(strip_tags($headline->body), 200) }}</p>
                    <a href="{{ url('show/' .$headline->id) }}" class="btn btn-primary btn-sm">READ POST</a>
                </div>
            </div>

            <div class="row">
                @foreach ($berita as $item)
                    @php
                        
                    @endphp 
                    <div class="col-md-4 mb-4" data-aos="fade-up"> 
                        <div class="image-wrapper">
                            <img src="{{ asset('images/berita/' . $item->foto1) }}" class="card-img-top" alt="{{ $item->judul }}">
                            <div class="card-body">
                                <h6 class="card-title mt-2 text-left"><a href="{{ url('show/' . $item->id)}}" class="btn-outline-primar">{{ $item->title }}</a></h6>
                                <small class="text-muted">
                                    <i class="bx bx-calendar"></i>
                                    {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('l, d F Y') }} |
                                    &nbsp; {{ $item->comments->count() }} <i class="bx bx-message"></i> | {{ $item->views }}x dilihat
                                </small>
                                <p class="card-text" style="text-align: justify;">{{ Str::limit(strip_tags($item->body), 100) }}</p>
                                <a href="{{ url('show/' . $item->id)}}" class="btn btn-outline-primary btn-sm">READ POST</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <hr>
        
                    <div class="wrapper-berita-lainnya">
                        <a href="{{ url('all_berita')}}" class="btn-berita">
                            <i class="bi bi-folder-fill"></i> BERITA LAINNYA
                        </a>
                    </div>
            </div>
        </div>
    </section>
</div>