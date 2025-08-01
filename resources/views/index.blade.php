
@extends('layout.app')
@section('title', 'Home')
@section('content')

<main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="sambutan">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5" data-aos="fade-up">
            <div class="conten">
              <img src="{{ $pengaturan->foto_kepsek ? asset('images/' . $pengaturan->foto_kepsek) : asset('images/avtr.jpg') }}" width="400" alt="Tumbnail">
                <div class="card-nama nama-guru text-center "><h4><b>{{ $pengaturan->nm_kepsek}}</b></h4></div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-flex">
            <div class="icon-boxes d-flex flex-column justify">
              <div class="row">
                <div class="col-xl-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="row mt-4 mt-xl-0">
                    <div class="col-md-12">
                      <div class="z-1">
                        <h3 class="text-3xl text-gray-900 font-bold" style="text-align: left;">Sambutan Kepala Sekolah</h3>
                        <div class="mt-5 text-lg" style="text-align: justify;">
                            Assalamualaikum Warahmatullahi Wabarakatuh,<br/>
                            Selamat datang di website SMKN 1 Seputih Agung.
                            <br/>
                            <br/>
                            Sebagai Kepala SMKN 1 Seputih Agung, saya mengucapkan terima kasih atas kunjungan Anda. Sekolah kami berkomitmen untuk menghasilkan generasi terampil dan siap bersaing di dunia kerja. Kami menawarkan berbagai program keahlian yang mengedepankan kombinasi antara teori dan praktik.
                            <br/>
                            <br/>
                            Segala puji dan syukur kita panjatkan ke hadirat Allah SWT, Tuhan Yang Maha Esa, karena atas rahmat dan karunia-Nya, website resmi sekolah ini dapat hadir sebagai sarana informasi dan komunikasi yang bermanfaat bagi seluruh warga sekolah dan masyarakat luas.
                            <br/>
                            <br/>
                            Website ini merupakan salah satu bentuk komitmen kami dalam menjawab tuntutan kemajuan teknologi informasi yang semakin pesat. Di era digital seperti sekarang ini, keberadaan media daring sangat penting untuk menjembatani berbagai kebutuhan informasi, baik bagi siswa, guru, orang tua, maupun pihak lain yang berkepentingan.
                            <br/>
                            Melalui website ini, kami berharap segala informasi terkait kegiatan belajar mengajar, prestasi siswa, agenda sekolah, hingga data akademik dapat tersampaikan secara cepat, tepat, dan transparan. Selain itu, website ini juga menjadi wadah promosi bagi sekolah dalam menunjukkan potensi dan kualitas yang dimiliki.
                            Kami menyadari bahwa keberhasilan pengelolaan website sekolah ini tidak lepas dari dukungan semua pihak — mulai dari tim pengelola IT, dewan guru, siswa, hingga orang tua. Oleh karena itu, kami mengajak seluruh warga sekolah untuk bersama-sama menjaga dan memanfaatkan website ini sebaik-baiknya. Akhir kata, semoga kehadiran website ini dapat menjadi langkah awal yang baik menuju transformasi digital di lingkungan sekolah kita tercinta.
                            <br>
                            </br>
                            <br/>
                            Wassalamualaikum Warahmatullahi Wabarakatuh.
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Why Us Section -->

  <!-- ======= About Section ======= -->
  <section id="sejarah" class="about section-bg">
    <div class="container">

      <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=P19bjxy-PDk" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            <!-- <img src="https://img.youtube.com/vi/tgxj_yL3OSM/maxresdefault.jpg"  style="height:300px; object-fit: cover; object-position: center;"> -->

            <img src="https://img.youtube.com/vi/P19bjxy-PDk/maxresdefault.jpg" class="img-fluid" alt="Video thumbnail"
            style="width: 100%; height: auto; object-fit: cover; border-radius: 10px;">
          </div>

        <div  class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
          <h4 data-aos="fade-up">Tentang</h4>
          <h3 data-aos="fade-up">Sejarah SMK Negeri 1 Seputih Agung</h3>
          <p data-aos="fade-up" style="text-align: justify;">
            {{ \Illuminate\Support\Str::limit($pengaturan->sejarah, 250, '...') }}  
          </p>
          <div class="text-center">
                <a href="{{ url('showsejarah/' . $pengaturan->id)}}" class="more-btn">Baca selanjutnya.. <i class="bx bx-chevron-right"></i></a>
          </div>
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="bx bx-glasses"></i></div>
              <h4 class="title"><a href="">Visi</a></h4>
              <p class="description">Mewujudkan Lulusan Yang Berdaya Saing Global Dan Berkarakter Profile Pelajar Pancasila</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <div class="icon"><i class="bx bx-bullseye"></i></div>
                <h4 class="title"><a href="">Misi</a></h4>
                <br>

                <p class="description">
                  <ol type="a">
                    <li>
                    Mengembangkan kurikulum sesuai dengan kebutuhan dunia kerja
                    </li>
                    <li>
                    Mengimplementasikan Sistem Informasi Manajemen (SIM) sekolah secara maksilal
                    </li>
                    <li>
                    Mewujudkan sumber daya manusia yang profesional dan bersertifikat kompetensi, beriman dan bertaqwa
                    kepada Tuhan Yang Maha Esa, berakhlak mulia, berkebinekaan global, gotong royong, mandiri, bernalar
                    kritis dan kreatif
                    </li>
                    <li>
                    Mengembangkan pembelajaran berbasis Kewirausahaan (enterpreneurship)
                    </li>
                    <li>
                    Meningkatkan kemitraan (Link and Match) dengan dunia kerja baik tingkat lokal dan internasional
                    </li>
                    <li>
                    Menciptakan lingkungan belajar yang berdaya kerja, 5R dan 7S
                    </li>
                  </ol>
                </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Moto</a></h4>
              <p class="description">MAJU TERUS : | Mutu | Amanah | Jujur | Unggul | – | Tanggung Jawab | Empati |
                Rasional | Unjuk Kerja | Santun</p>
            </div>
        </div>
      </div>

    </div>
  </section><!-- End About Section -->

  <!-- Jurusan dan Event Sekolah -->
      
  <div class="jurusaneventcontainer py-4" style="background:url('{{ asset('assets/img/bg_testimoni.jpg') }}') no-repeat center center; background-size: cover;background-attachment: fixed;" data-aos="fade-up">
    <br>  
    <div class="layerblack"></div>
    <div class="container">
      <div class="row">
        <!-- Jurusan SMK Section -->
        <div class="col-lg-8 col-md-12" data-aos="fade-up">
          <h2 class="section-title text-left">Jurusan SMK</h2>
          <hr class="text-left" style="width: 173px; border: 2px solid orange; margin-left:0px; margin-top:-60px; ">
            <div class="row">
                @foreach($jurusans as $jurusan)
                    <div class="col-md-6 mb-3">
                      <a href="{{ route('jurusan', $jurusan->slug) }}">
                        <div class="jurusan-btn">
                          <div class="text-white jurusan-title">{{ $jurusan->name }}</div>
                          <div class="text-white jurusan-subtitle">Program 3 Tahun</div>
                        </div>
                      </a>
                    </div>
                @endforeach
            </div>
        </div>
        
        <!-- Event Sekolah Section -->
        <x-eventsekolah/>
      </div>
    </div>
  </div>

  <!-- ======= berita ======= -->
  <x-berita/>
  
  <!-- ======= Kerjasama ======= -->
  <section id="clients" class="clients">
    <div class="container" data-aos="fade-up">
      <div class="section-title" data-aos="fade-up">
        <br>
        <h2>Kerjasama</h2>
      </div>
      <div class="owl-carousel clients-carousel">
        
        @foreach($mou as $item)
          <a href="{{ url('show-logo-mou/' . $item->id)}}">
            <img src="{{ asset('images/mou/' . $item->logo) }}" alt="">
          </a>
        @endforeach
        
      </div>

    </div>
  </section><!-- End Clients Section -->
  

  <!-- ======= Testimonials Section ======= -->
  <section id="testimonials" class="testimonials">
    <div class="container" data-aos="fade-up">
      <div class="owl-carousel testimonials-carousel">
        @foreach($alumni as $item)
          <div class="testimonial-item">
            <img src="{{ asset('images/alumni/' . $item->foto) }}" class="testimonial-img" alt="">
            <h3>{{$item->nama}}</h3>
            <h4>{{$item->status_kerja}}</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                {{ $item->pesan}}
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>
        @endforeach

      
      </div>
    </div>
  </section><!-- End Testimonials Section -->
  
  <!-- portofolio -->
  <section id="portfolio" class="portfolio">
      <div class="container">
        <br>
        <div class="section-title">
          <h2 data-aos="fade-up">Portofolio</h2>
          <h5 data-aos="fade-up" style="color: black;">Foto seputar SMKN 1 Seputih Agung.</h5>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-kurikulum">Kurikulum</li>
              <li data-filter=".filter-kesiswaan">Kesiswaan</li>
              <li data-filter=".filter-hki">Humas HKI</li>
              <li data-filter=".filter-gebyar">Gebyar SMK</li>
              <li data-filter=".filter-bkk">BKK</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                @php
                    $kur = App\Models\Berita::select('id','title','body','thumbnail','foto1')
                        ->where([
                                ['category_id','=','1'],
                            ])
                        ->orderby('id','DESC')
                        ->paginate(10);
                @endphp
            @foreach($kur as $item)
              
              <div class="col-lg-4 col-md-6 portfolio-item filter-kurikulum">
                  <img src="{{ asset('images/berita/'.$item->foto1) }}"  class="img-preview img-fluid rounded mr-3" alt="" style="height:300px; width:400px; object-fit: cover; object-position: center;">
                  <div class="portfolio-info">
                    <h4>{!! Str::limit($item->title , 20) !!}</h4>
                    <p>{!! Str::limit($item->body, 30) !!}</p>
                    <a href="{{ asset('images/berita/'.$item->foto1) }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                  </div>        
                </div>
            
            @endforeach

                @php
                    $kesis = App\Models\Berita::select('id','title','body','thumbnail','foto1')
                        ->where([
                                ['category_id','=','2'],
                            ])
                        ->orderby('id','DESC')
                        ->paginate(12);
                @endphp

            @foreach($kesis as $item)
             
              <div class="col-lg-4 col-md-6 portfolio-item filter-kesiswaan">
                <img src="{{ asset('images/berita/'.$item->thumbnail) }}" class="img-fluid rounded mr-3" alt="" style="height:300px; width:400px; object-fit: cover; object-position: center;">
                <div class="portfolio-info">
                    <h4>{{ $item->title }}</h4>
                    {!! Str::limit($item->body, 30 ) !!}
                  <a href="{{ asset('images/berita/'.$item->thumbnail) }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            @endforeach


              @php
                    $hki = App\Models\Berita::select('id','title','body','thumbnail','foto1')
                        ->where([
                                ['category_id','=','7'],
                            ])
                        ->orderby('id','DESC')
                        ->paginate(12);
                @endphp

            @foreach($hki as $item)
              <div class="col-lg-4 col-md-6 portfolio-item filter-hki">
                <img src="{{ asset('images/berita/'.$item->foto1) }}" class="img-fluid rounded mr-3" alt="" style="height:300px; width:400px; object-fit: cover; object-position: center;">
                <div class="portfolio-info">
                    <h4>{{ $item->title }}</h4>
                    <p>{!! Str::limit($item->body, 30) !!}</p>
                  <a href="{{ asset('images/berita/'.$item->foto1) }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            @endforeach              
            
            @php
                  $lks = App\Models\Berita::select('id','title','body','thumbnail','foto1')
                      ->where([
                              ['category_id','=','10'],
                          ])
                      ->orderby('id','DESC')
                      ->paginate(12);
              @endphp

          @foreach($lks as $item)
            <div class="col-lg-4 col-md-6 portfolio-item filter-gebyar">
              <img src="{{ asset('images/berita/'.$item->foto1) }}" class="img-fluid rounded mr-3" alt="" style="height:300px; width:400px; object-fit: cover; object-position: center;">
              <div class="portfolio-info">
                  <h4>{{ $item->title }}</h4>
                  <p>{!! Str::limit($item->body, 30) !!}</p>
                <a href="{{ asset('images/berita/'.$item->foto1) }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          @endforeach              
          
          @php
                $bkk = App\Models\Berita::select('id','title','body','thumbnail','foto1')
                    ->where([
                            ['category_id','=','8'],
                        ])
                    ->orderby('id','DESC')
                    ->paginate(12);
            @endphp

        @foreach($bkk as $item)
          <div class="col-lg-4 col-md-6 portfolio-item filter-bkk">
            <img src="{{ asset('images/berita/'.$item->foto1) }}" class="img-fluid rounded mr-3" alt="" style="height:300px; width:400px; object-fit: cover; object-position: center;">
            <div class="portfolio-info">
                <h4>{{ $item->title }}</h4>
                <p>{!! Str::limit($item->body, 30) !!}</p>
              <a href="{{ asset('images/berita/'.$item->foto1) }}" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>
        @endforeach              

        </div>

      </div>


      
    </section><!-- End Portfolio Section -->

  <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <div class="section-title" data-aos="fade-up">
            <br>
            <h2>Contact</h2>
          </div>
          <hr class="text-center" style="width: 130px; border: 2px solid orange; margin-left:490px; margin-top:-80px; ">
          
        </div>
          
        <div class="row justify-content-center">
          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up">
            <div class="info-box">
            <i class="bx bx-map"></i>
            <h3>Alamat Kami</h3>
            <p>Jln, Raya Dono Arum, Lampung Tengah</p>
          </div>
        </div>

          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
            <i class="bx bx-envelope"></i>
            <h3>Email Kami</h3>
            <p>smkn.1.sepa@gmail.com</p>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 mt-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box">
            <i class="bx bx-phone-call"></i>
            <h3>Telpon Kami</h3>
            <p></p>
            </div>
          </div>
          </div>
        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-xl-9 col-lg-12 mt-4 info-box">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d591.2287424360018!2d105.13842865768804!3d-4.9402404108934475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40ae99503530a3%3A0x92214cda2b9fff3a!2sSMK%20Negeri%201%20Seputih%20Agung!5e1!3m2!1sid!2sid!4v1753499955566!5m2!1sid!2sid" width="800" height="450" style="border:2;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">

            </iframe>
          </div>
        </div>

        <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="300">
          <div class="col-xl-9 col-lg-12 mt-4">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="form-row">
              <div class="col-md-6 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
              </div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
              data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validate"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required"
              data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validate"></div>
            </div>
            <div class="mb-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->
@endsection