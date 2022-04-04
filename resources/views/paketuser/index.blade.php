@extends('layout\template_user')

@section('content')
@parent
<!-- Breadcrumbs -->
<section class="breadcrumbs-custom-inset">
  <div class="breadcrumbs-custom context-dark bg-overlay-60">
    <div class="container">
      <h2 class="breadcrumbs-custom-title">Packages</h2>
     
    </div>
    <div class="box-position" style="background-image: url(/images/bg3.jpg);"></div>
  </div>
</section>
<!-- Why choose us-->

<section class="section section-sm bg-default">
  <div class="container">
    <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Our Packages</span></h3>
    <div class="row row-sm row-40 row-md-50">
      @forelse ($pakets as $paket)
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
                <p class="product-big-text">{!! $paket->deskripsi !!}</p><a href="{{ route('paketuser.create', $paket->id) }}" class="button button-black-outline button-ujarak">Buy This Tour</a>
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
@endsection

@section('footer')
@endsection