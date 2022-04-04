
     @extends('layout\template_user')

@section('content')
@parent
     
     <section class="breadcrumbs-custom-inset">
        <div class="breadcrumbs-custom context-dark bg-overlay-60">
          <div class="container">
            <h2 class="breadcrumbs-custom-title">Contact Us</h2>
          
          </div>
          <div class="box-position" style="background-image: url(/images/bg3.jpg);"></div>
        </div>
      </section>
     

      <!-- Contact Form-->
      <section class="section section-sm section-last bg-default text-left">
        <div class="container">
          <article class="title-classic">
            <div class="title-classic-title">
              <h3>Get in touch</h3>
            </div>
            <div class="title-classic-text">
              <p>If you have any questions, just fill in the contact form, and we will answer you shortly.</p>
            </div>
          </article>
          <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="POST" action="{{ route('kontak.store') }}" enctype="multipart/form-data">
          @csrf  
          <div class="row row-14 gutters-14">
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="nama" type="text" name="nama" value="{{ old('nama') }}" data-constraints="@Required">
                  <label class="form-label" for="nama">Your Name</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="email" type="email" name="email" value="{{ old('email') }}" data-constraints="@Email @Required">
                  <label class="form-label" for="email">E-mail</label>
                </div>
              </div>
              <div class="col-md-4">
                <div class="form-wrap">
                  <input class="form-input" id="telp" type="text" name="telp" value="{{ old('telp') }}" data-constraints="@Numeric">
                  <label class="form-label" for="telp">Phone</label>
                </div>
              </div>
              <div class="col-12">
                <div class="form-wrap">
                  <label class="form-label" for="pesan">Message</label>
                  <textarea class="form-input textarea-lg" id="pesan" name="pesan" value="{{ old('pesan') }}" data-constraints="@Required"></textarea>
                </div>
              </div>
            </div>
            <button class="button button-primary button-pipaluk" type="submit">Send Message</button>
          </form>
        </div>
      </section>

      @endsection

@section('footer')
@endsection