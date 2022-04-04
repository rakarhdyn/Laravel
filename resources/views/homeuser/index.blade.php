@extends('layout\template_user')

@section('content')
@parent

<!-- Swiper-->
<section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2" data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
  <div class="swiper-wrapper text-left">
    <div class="swiper-slide context-dark" data-slide-bg="/images/bg1.jpg">
      <div class="swiper-slide-caption section-md">
        <div class="container">
          <div class="row">
            <div class="col-md-10">
              <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Enjoy the Best Destinations with Our Travel Agency</h6>
              <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Explore</span><span class="font-weight-bold"> The World</span></h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Get in touch</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide context-dark" data-slide-bg="/images/bg2.jpg">
      <div class="swiper-slide-caption section-md">
        <div class="container">
          <div class="row">
            <div class="col-md-10">
              <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">A team of professional Travel Experts</h6>
              <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Trust</span><span class="font-weight-bold"> Our Experience</span></h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Get in touch</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide context-dark" data-slide-bg="/images/bg3.jpg">
      <div class="swiper-slide-caption section-md">
        <div class="container">
          <div class="row">
            <div class="col-md-10">
              <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">Build your Next Holiday Trip with Us</h6>
              <h2 class="oh font-weight-light" data-caption-animate="slideInUp" data-caption-delay="100"><span>Create</span><span class="font-weight-bold"> Your Tour</span></h2><a class="button button-default-outline button-ujarak" href="#" data-caption-animate="fadeInLeft" data-caption-delay="0">Get in touch</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Swiper Pagination-->
  <div class="swiper-pagination"></div>
</section>
<!-- Section Box Categories-->
<section class="section section-lg section-top-4 bg-gray-4">
  <div class="container offset-negative-1">
    <div class="box-categories cta-box-wrap">
      <div class="box-categories-content">
        <div class="row justify-content-center">
          @forelse ($destinasis->slice(0, 3) as $destinasi)
          <div class="col-md-4 wow fadeInDown col-9" data-wow-delay=".2s">
            <ul class="list-marked-2 box-categories-list">
              <li><a href="#"><img src="{{ Storage::url('public/destinasis/').$destinasi->gambar }}" alt="" /></a>
                <h5 class="box-categories-title">{{ $destinasi->nama }}</h5>
              </li>
            </ul>
          </div>
          @empty
          @endforelse
        </div>
      </div>
    </div><a class="link-classic wow fadeInUp" href="/destinasiuser">Other Tours<span></span></a>
    <!-- Owl Carousel-->
  </div>
</section>
{{ $destinasis->links() }}

<!--	Our Services-->
<section class="section section-sm">
  <div class="container">
    <h3>Our Services</h3>
    <div class="row row-30">
      @forelse ($services as $service)
      <div class="col-sm-6 col-lg-4">
        <article class="box-icon-classic">
          <div class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
            <div class="unit-left">
              <div class="box-icon-classic-icon fl-bigmug-line-equalization3"></div>
            </div>
            <div class="unit-body">
              <h5 class="box-icon-classic-title"><a href="#">{{ $service->judul }}</a></h5>
              <p class="box-icon-classic-text">{!! $service->deskripsi !!}</p>
            </div>
          </div>
        </article>
      </div>
      @empty
      @endforelse
    </div>
    {{ $services->links() }}
  </div>
</section>
<!-- Hot tours-->
<section class="section section-sm bg-default">
  <div class="container">
    <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Hot Tours</span></h3>
    <div class="row row-sm row-40 row-md-50">
      @forelse ($pakets->slice(0, 2) as $paket)
      <div class="col-sm-6 col-md-12 wow fadeInRight">
        <!-- Product Big-->

        <article class="product-big">
          <div class="unit flex-column flex-md-row align-items-md-stretch">
            <div class="unit-left"><a class="product-big-figure" href="#"><img src="{{ Storage::url('public/pakets/').$paket->gambar }}" alt="" width="600" height="366" /></a></div>
            <div class="unit-body">
              <div class="product-big-body">
                <h5 class="product-big-title"><a href="#">{{ $paket->nama }}</a></h5>
                <div class="group-sm group-middle justify-content-start">
                  <div class="product-big-rating"><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star"></span><span class="icon material-icons-star_half"></span></div><a class="product-big-reviews" href="#">4 customer reviews</a>
                </div>
                <p class="product-big-text">{!! $paket->deskripsi !!}</p><a class="button button-black-outline button-ujarak" href=" {{ route('paketuser.create', $paket->id) }}">Buy This Tour</a>
                <div class="product-big-price-wrap"><span class="product-big-price">{!! $paket->harga !!}</span></div>
              </div>
            </div>
          </div>
        </article>
      </div>
      @empty
      @endforelse
      {{ $pakets->links() }}
    </div>
</section>
<!-- Different People-->

<!-- Section Subscribe-->
<section class="section bg-default text-center offset-top-50">
  <div class="parallax-container" data-parallax-img="/images/bg4.jpg">
    <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
      <div class="container">
        <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span class="d-block font-weight-semi-bold">First-class Impressions</span><span class="d-block font-weight-light">are Waiting for You!</span></h2>
        <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s">Our agency offers travelers various tours and excursions with destinations all over the world. Browse our website to find your dream tour!</p><a class="button button-secondary button-pipaluk" href="/paketuser">Book a Tour Now</a>
      </div>
    </div>
  </div>
</section>
<!--	Instagrram wondertour-->

@endsection

@section('footer')
@endsection