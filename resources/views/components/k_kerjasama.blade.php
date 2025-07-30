<section id="clients" class="clients">
    <div class="container" data-aos="fade-up">
      <div class="section-title" data-aos="fade-up">
        <br>
        <h2>Kerjasama</h2>
      </div>
      <div class="owl-carousel clients-carousel">
        
        @foreach($mous as $item)
            <img src="{{ asset('images/mou/' . $item->logo) }}" alt="">

        @endforeach
        
      </div>

    </div>
  </section>