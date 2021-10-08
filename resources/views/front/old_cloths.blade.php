@extends ('layouts.master')
@section('content')
  <main id="main">
    <br><br><br><br>


    <!-- ======= Portfolio Section ======= -->
    <section id="clothes" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Featured Clothes</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
          
          @foreach($clothes as $cloth)
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>{{$cloth->price}}</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="{{route('cloth.show', $cloth->slug) }} " title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
            
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Portfolio Section -->


  </main><!-- End #main -->
  @endsection