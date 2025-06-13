@extends('components.layouts.app')
@section('title','Detail Berita')
@section('content')

        @php
            $dataThumbnail = $berita->thumbnail;
            $thumbnail= explode(',', $dataThumbnail);
        @endphp

<section id="deatilberita" class="contact">
      <div class="container">
            <nav class="mb-6 mt-4" aria-label="Breadcrumb" >
                <ol class="flex items-center space-x-2 text-sm text-gray-500">
                    
                        <a href="#" class="hover:text-orange-600 transition duration-300">
                            Beranda
                        </a>
                        <span class="mx-2">/</span>
                        <a href="#" class="hover:text-orange-600 transition duration-300">
                            Artikel
                        </a>
                        <span class="mx-2">/</span>
                        {{ $berita->title }}
            </nav>
        <div class="section-title">

        </div>

        <div class="row justify-content">

                <div class="col-xl-8 col-lg-4 mt-4" data-aos="fade-up">
                    <div class="info-box">
                    <i class="bx bx-book"></i>
                        <h3>  {{ $berita->title }} </h3>
                        <div class="blockquote-footer">
                            {{ date('d-M-Y', strtotime($berita->edit_at)) }} 

                        </div>
                        <br>
                            <img src=" {{ asset('images/berita/'.$thumbnail[0]) }}" class="img-preview img-fluid mb-4 col-sm-12" alt="" srcset="" style="width:980px; object-fit: cover; object-position: center;">
                        <br>
                        <div class="container border text-justify">
                             {!! $berita->body !!}
                        </div>


                        <div class="text-secondary py-2 ">
                            <a href="">{{ $berita->categori->name }} </a> 
                            &middot; {{ $berita->created_at->diffForHumans() }} 
                            &middot; 
                                <div class="media my-3">
                                    <img width="60" class="rounded-circle mr-3" src=" {{ asset('images/avtr.jpg') }}" alt="">
                                    <div class="media-body">
                                        <div>
                                        Wrote by {{ $berita->user->username }}
                                        </div>
                                        @smkn1Sepa
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>

                @php
                    $ber = App\Models\Berita::select('id','title','body','thumbnail','foto1','edit_at')
                        ->where([
                                ['categorie_id','=',$berita->categorie_id],
                                ['status', '=', 'publish'],
                            ])
                        ->orderby('id','DESC')
                        ->paginate(10);
                @endphp
            <div class="col-xl-4 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-link"></i>
              <h3>Berita Terkait</h3>
              <p><strong>Tentang : {{ $berita->categori->name }}</strong></p>
              
              <br>
              @foreach($ber as $item)
                <div class="media my-3">
                    <img class="rounded mr-3" src=" {{ asset('images/berita/'.$item->foto1) }}" style="height:60px; width:60px; object-fit: cover; object-position: center;" alt="">
                    <div class="media-body">
                        <div>
                            <a href="{{ url('show/'.$item->id)}}"> {{$item->title}}</a>
                        </div>
                        {{date('d-M-Y',strtotime($item->edit_at))}}
                        
                    </div>
                </div>
             
              @endforeach
            </div>
          </div>
          

        </div>

        <div class="row justify-content-left" data-aos="fade-up" data-aos-delay="300">
          <div class="col-xl-8 col-lg-12 mt-4">
            <div class="info-box">
                
                <div class="row g-2 g-md-4">
                    <div class="col-6 col-md-4">
                        <a href="{{ asset('images/berita/'.$berita->foto1) }}" data-gall="portfolioGallery" class="venobox preview-link" title="{{$item->title}}">
                            <img class="w-100 rounded mr-3" src="{{ asset('images/berita/'.$berita->foto1) }}" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-md-4">
                    <a href="{{ asset('images/berita/'.$berita->foto2) }}" data-gall="portfolioGallery" class="venobox preview-link" title="{{$item->title}}">
                            <img class="w-100 rounded mr-3" src="{{ asset('images/berita/'.$berita->foto2) }}" alt="">
                        </a>
                    </div>
                    <div class="col-6 col-md-4">
                    <a href="{{ asset('images/berita/'.$berita->foto3) }}" data-gall="portfolioGallery" class="venobox preview-link" title="{{$item->title}}">
                            <img class="w-100 rounded mr-3" src="{{ asset('images/berita/'.$berita->foto3) }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-left" data-aos="fade-up" data-aos-delay="300">
          <div class="col-xl-8 col-lg-10 mt-4">
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

      </div>
    </section>
@endsection