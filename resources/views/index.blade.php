@extends('layout.app')
@section('title','Home')
@section('content')
    
<main id="main">

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container">

        <div class="row">
          <div class="col-xl-4 col-lg-5" data-aos="fade-up">
            <div class="content">
              <h3>Sejarah SMKN 1 Seputih Agung</h3>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                Asperiores dolores sed et. Tenetur quia eos. Autem tempore quibusdam vel necessitatibus optio ad corporis.
              </p>
              <div class="text-center">
                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-xl-8 col-lg-7 d-flex">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-xl-12 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <div class="icon-box mt-4 mt-xl-0">
                    <i class="bx bx-receipt"></i>
                    <h4>Corporis voluptates sit</h4>
                    <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                      Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                      Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                      Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                      Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                      Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                      Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                      Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                      Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                      Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                      Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip
                    </p>
                  </div>
                </div>
                
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= About Section ======= -->
    {{-- <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Services</li>
        </ol>
        <h2>Services</h2>

      </div>
    </section><!-- End Breadcrumbs --> --}}

    <section id="sejarah" class="about section-bg">
      <div class="container">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <a href="https://www.youtube.com/watch?v=P19bjxy-PDk" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
            <!-- <img src="https://img.youtube.com/vi/tgxj_yL3OSM/maxresdefault.jpg"  style="height:300px; object-fit: cover; object-position: center;"> -->
          
            <img src="https://img.youtube.com/vi/P19bjxy-PDk/maxresdefault.jpg" 
              class="img-fluid" 
              alt="Video thumbnail"
              style="width: 100%; height: auto; object-fit: cover; border-radius: 10px;">
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
            <h4 data-aos="fade-up">Tentang</h4>
            <h3 data-aos="fade-up">Sejarah SMK Negeri 1 Seputih Agung</h3>
            <p data-aos="fade-up">SMKN 1 SEPUTIH AGUNG beralamat di JL. RAYA DONO ARUM. SIMPANG AGUNG, Dono Arum, Kec. Seputih Agung, Kab. Lampung Tengah, Lampung, dengan kode pos 34166.</p>

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
                        Mewujudkan sumber daya manusia yang profesional dan bersertifikat kompetensi, beriman dan bertaqwa kepada Tuhan Yang Maha Esa, berakhlak mulia, berkebinekaan global, gotong royong, mandiri, bernalar kritis dan kreatif 
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
              <p class="description">MAJU TERUS : | Mutu | Amanah | Jujur | Unggul | – | Tanggung Jawab | Empati | Rasional | Unjuk Kerja | Santun</p>
              
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->


    <!-- ======= Values Section ======= -->
    <section id="values" class="values">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <br>
          <h2>Berita Sekolah</h2>
        </div>
        <div class="row">
          <div class="col-md-6">

          </div>
          <div class="col-md-6 mb-3">
              <form action="{{ url('cari_berita') }}" method="get">
                @csrf
                <input type="text" name="kata" placeholder="Cari Berita..." class="form-control">
              </form>
            </div>
          </div>

        <div class="row">
        @foreach($data_berita as $item)
              @php
                  $dataThumbnail = $item->thumbnail;
                  $thumbnail= explode(',', $dataThumbnail);
              @endphp
            <div class="col-md-6 d-flex align-items-stretch py-2" data-aos="fade-up">
              
                <div class="card" style="background-image:url('{{ asset('images/berita/'.$thumbnail[0]) }}'); height:380px; object-fit: cover; object-position: center;">
                  <div class="card-body">
                    <h5 class="card-title"><a href="">{{ $item->title }}</a></h5>
                    <p class="card-text">{!! Str::limit($item->body, 100) !!}</p>
                    <div class="read-more"><a href="{{ url('show/'.$item->id)}}"><i class="icofont-arrow-right"></i> Read More</a></div>
                  </div>
                </div>
            </div>
          @endforeach
        </div>
        <div>Jumlah Berita: <span class="badge badge-primary mb-3 mt-3">{{$jml_berita}}</span></div>
        <div>
            {{ $data_berita->fragment('values')->links('pagination::bootstrap-5') }}
        </div>
        	

      </div>
    </section><!-- End Values Section -->

    <!-- ======= Featured Section ======= -->
    <x-konsentrasi/>
  <!-- ======= Why Us Section ======= -->
  <!-- End Why Us Section -->
    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="fade-up">
        <div class="section-title" data-aos="fade-up">
          <br>
          <h2>Kerjasama</h2>
        </div>
        <div class="owl-carousel clients-carousel">
          <img src="images/mou/telkom.png" alt="">
          <img src="images/mou/Mitsubishi_Motors_logo.png" alt="">
          <img src="images/mou/alfamart.png" alt="">
          <img src="images/mou/honda.png" alt="">
        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <!-- End Services Section -->

    

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="images/siswa.png" class="testimonial-img" alt="">
            <h3>Fadila Fitra Kusuma Jaya</h3>
            <h4>Programmer, Desain Grafis</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="images/siswa.png" class="testimonial-img" alt="">
            <h3></h3>
            <h4></h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="images/siswi.png" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="images/siswa.png" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="images/siswa.png" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
             
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container">
        <br>
        <div class="section-title">
          <h2 data-aos="fade-up">Portfolio</h2>
          <p data-aos="fade-up">Foto seputar SMKN 1 Seputih Agung.</p>
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
                                ['categorie_id','=','1'],
                            ])
                        ->orderby('id','DESC')
                        ->paginate(10);
                @endphp
            @foreach($kur as $item)
              
              <div class="col-lg-4 col-md-6 portfolio-item filter-kurikulum">
                  <img src="{{ asset('images/berita/'.$item->foto1) }}"  class="img-preview img-fluid rounded mr-3" alt="" style="height:300px; width:400px; object-fit: cover; object-position: center;">
                  <div class="portfolio-info">
                    <h4>{{ $item->title }}</h4>
                    <p>{!! Str::limit($item->body, 30) !!}</p>
                    <a href="{{ asset('images/berita/'.$item->foto1) }}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
                    <a href="#" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
                  </div>        
                </div>
            
            @endforeach

                @php
                    $kesis = App\Models\Berita::select('id','title','body','thumbnail','foto1')
                        ->where([
                                ['categorie_id','=','2'],
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
                                ['categorie_id','=','7'],
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
                              ['categorie_id','=','10'],
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
                            ['categorie_id','=','8'],
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

    <!-- ======= Team Section ======= -->
    

    <!-- ======= Pricing Section ======= -->
    

    <!-- ======= F.A.Q Section ======= -->
    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-up">Contact</h2>
          <p data-aos="fade-up">Anda dapat menghubungi kami, menuliskan pesan, jika ada kritik dan saran.</p>
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
          <div class="col-xl-9 col-lg-12 mt-4">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
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