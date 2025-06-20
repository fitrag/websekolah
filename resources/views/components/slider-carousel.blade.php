<div>
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background: url(images/gerbang.png">
            <div class="carousel-container">
              <div class="carousel-content text-white">
                <h2 class="animate__animated animate__fadeInDown text-white">Selamat Datang <span>SMKN 1 Seputih
                    Agung</span></h2>
                <p class="animate__animated animate__fadeInUp">Sekolah Menengah Keujuruan di Kabupaten Lampung Tengah,
                  yang memiliki 6 Paket Keahlian diantaranya..</p>
                <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          @if($coursel->count() > 0)
          @foreach($coursel as $item)
        <div class="carousel-item" style="background-image:url('{{ asset('images/slider/' . $item->thumbnail) }}'); ">
        <div class="carousel-container">
          <div class="carousel-content text-white">
          <h2 class="animate__animated fanimate__adeInDown text-white">{!! $item->title !!} </h2>
          <p class="animate__animated animate__fadeInUp text-white">{!! $item->body !!} </p>
          <a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>
          </div>
        </div>
        </div>
        @endforeach
      @endif




        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->
</div>