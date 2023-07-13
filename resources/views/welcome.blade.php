  @extends('layouts.main')
  
  @section('content')
      
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center section-bg">
    <div class="container">
      <div class="row justify-content-between gy-5">
        <div class="col-lg-5 order-2 order-lg-1 d-flex flex-column justify-content-center align-items-center align-items-lg-start text-center text-lg-start">
          <h2 data-aos="fade-up">{{ $movie->title }}</h2>
          <p data-aos="fade-up" data-aos-delay="100">{{ $movie->synopsys }}</p>
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
            <a href="/about/{{ $movie->id }}" class="btn-book-a-table">Detail</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 text-center text-lg-start">
          <img src="/admin/assets/img/{{ $movie->poster }}" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="300">
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->
  <main id="main">
    <!-- ======= Chefs Section ======= -->
    @include('partials.favorite')
    <!-- End Chefs Section -->
    <!-- ======= Testimonials Section ======= -->
    @include('partials.testimoni')
    <!-- End Testimonials Section -->
    
  </main><!-- End #main -->
@endsection