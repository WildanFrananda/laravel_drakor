<section id="chefs" class="chefs section-bg">
    <div class="container" data-aos="fade-up">
        <div class="section-header">
            <p>Favorite Drama Korea</p>
        </div>
        <div class="row gy-4">
            @foreach ($favorites as $favorite)
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                  <a href="/about/{{ $favorite->id }}">
                    <div class="chef-member">
                        <div class="member-img">
                            <img src="/admin/assets/img/{{ $favorite->poster }}" class="img-fluid" alt="">
                        </div>
                        <div class="member-info">
                            <h4>{{ $favorite->title }}</h4>
                            <span>{{ $favorite->genre->name }}</span>
                            <span>{{ $favorite->rating }}</span>
                        </div>
                    </div>
                  </a>
                </div>
            @endforeach
        </div>
    </div>
</section>
