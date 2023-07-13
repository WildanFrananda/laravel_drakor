<section id="testimonials" class="testimonials section-bg">
    <div class="container" data-aos="fade-up">

        <div class="section-header">
            <p>Reviews</p>
        </div>
        <div class="slides-1 swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
                @foreach ($reviews as $review)
                <div class="swiper-slide">
                    <div class="testimonial-item">
                        <div class="row gy-4 justify-content-center">
                            <div class="col-lg-6">
                                <div class="testimonial-content">
                                        <p>
                                            <i class="bi bi-quote quote-icon-left"></i>
                                              {{ $review->description }}
                                            <i class="bi bi-quote quote-icon-right"></i>
                                        </p>
                                        <h3>{{ $review->movies->title }}</h3>
                                        <h4>{{ $review->users->name }}</h4>
                                        <h4><strong>{{ $review->rating }}</strong></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->
                    @endforeach
                </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</section>
