@extends('frontend.main')

@section('content')
<section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.webp') }}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Contact Us</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Do you have other questions? Don't worry, there aren't any dumb questions. Just fill out the form below and we'll get back to you as soon as possible.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- contact -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">Contact Us</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 mb-4 mb-lg-0">
        <form action="#">
          <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Name">
          <input type="email" class="form-control mb-3" id="mail" name="mail" placeholder="Your Email">
          <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject">
          <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message"></textarea>
          <button type="submit" value="send" class="btn btn-primary">SEND MESSAGE</button>
        </form>
      </div>
      <div class="col-lg-5">
        <p class="mb-5">{!! nl2br($data->more_info) !!}</p>
        @if($data->mobile)
        <a href="tel:{{ $data->mobile }}" class="text-color h5 d-block">Mobile: {{ $data->mobile }}</a>
        @endif
        @if($data->landline)
        <a href="tel:{{ $data->landline }}" class="text-color h5 d-block">Phone: {{ $data->landline }}</a>
        @endif
        @if($data->fax)
        <a href="tel:{{ $data->fax }}" class="text-color h5 d-block">Fax: {{ $data->fax }}</a>
        @endif
        <a href="mailto:{{ $data->email }}" class="mb-5 text-color h5 d-block">{{ $data->email }}</a>
        @if($data->business_hours)
        <p>{!! nl2br($data->business_hours) !!}</p>
        @endif
        <p>{!! nl2br($data->address) !!}</p>
      </div>
    </div>
  </div>
</section>
<!-- /contact -->

<!-- gmap -->
<section class="section pt-0">
  <!-- Google Map -->
 
  
    <div class="gmap_canvas">
      <iframe  width="100%" height="500px" id="gmap_canvas" src="{{ $data->google_map }}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
    </div>

</section>
<!-- /gmap -->
@stop