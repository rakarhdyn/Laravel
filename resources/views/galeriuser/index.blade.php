@extends('layout\template_user')

@section('content')
@parent
      <!-- Breadcrumbs -->
      <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-60">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Gallery</h2>
           
          </div>
          <div class="box-position" style="background-image: url(/images/bg3.jpg);"></div>
        </div>
      </section>
      <!-- Why choose us-->

     <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
   
        <div class="container-fluid">
          <h6 class="gallery-title">Gallery</h6>
          <!-- Owl Carousel-->
          <div class="owl-carousel owl-classic owl-dots-secondary" >
            <!-- Thumbnail Classic-->
            @forelse ($galeris as $galeri)
            <article class="thumbnail thumbnail-mary">
              <div class="thumbnail-mary-figure"><img src="{{ Storage::url('public/galeris/').$galeri->gambar }}" alt="" width="270" height="195"/>
              @empty 
            </div>
            <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60" href="{{ Storage::url('public/galeris/').$galeri->gambar }}" data-lightgallery="item"><img src="images/gallery-image-2-270x195.jpg" alt="" width="270" height="195"/></a>
              </div>
             
            </article>
            @endforelse
          </div>
        </div>
      </section>
      @endsection

@section('footer')
@endsection