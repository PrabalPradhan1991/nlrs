@extends('frontend.main')

@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.webp') }}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Upload</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Upload your files here.</p>
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
        <h2 class="section-title">Upload Here</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-7 mb-4 mb-lg-0">
        <form action="#" enctype="multipart/form-data" method="post" action="{{ route('upload-post') }}">
          <input type="text" class="form-control mb-3" id="name" name="name" placeholder="Your Name">
          <input type="email" class="form-control mb-3" id="mail" name="mail" placeholder="Your Email">
          <input type="text" class="form-control mb-3" id="subject" name="subject" placeholder="Subject">
          <input type="file" class="form-control mb-3" id="file" name="file">
          <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message"></textarea>
          <button type="submit" value="send" class="btn btn-primary">SEND </button>
        </form>
      </div>
       <div class="col-lg-5">
        <h2>Note</h2>
        <p class="mb-5">{!! nl2br($data->note) !!}</p>
        
      </div>
    </div>
  </div>
</section>
<!-- /contact -->

<!-- funfacts -->
<section class="section-sm bg-primary">
  <div class="container">
    <div class="row">
      <!-- funfacts item -->
      <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="{{ $data->value_1 }}">0</h2>
          <h5 class="text-white">{{ $data->text_1 }}</h5>
        </div>
      </div>
      <!-- funfacts item -->
      <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="{{ $data->value_2 }}">0</h2>
          <h5 class="text-white">{{ $data->text_2 }}</h5>
        </div>
      </div>
      <!-- funfacts item -->
     
      <!-- funfacts item -->
      <div class="col-md-4 col-sm-6 mb-4 mb-md-0">
        <div class="text-center">
          <h2 class="count text-white" data-count="{{ $data->value_3 }}">0</h2>
          <h5 class="text-white">{{ $data->text_3 }}</h5>
        </div>
      </div>
    </div>
  </div>
</section>
@stop