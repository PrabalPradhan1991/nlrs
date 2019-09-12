@extends('frontend.main')

@section('content')

<!-- page title -->
<section class="page-title-section overlay" data-background="images/backgrounds/page-title.webp">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">About Us</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">This is our description</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- about -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <img class="img-fluid w-100 mb-4" src="{{ route('get-asset', ['about-us', $data->asset]) }}" alt="{{ $data->title_text }}">
        <h2 class="section-title">{{ $data->title_text }}</h2>
        <p>{!! nl2br($data->long_description) !!}</p>
      </div>
    </div>
  </div>
</section>
<!-- /about -->



<!-- success story -->
<section class="section bg-cover" data-background="{{ route('get-asset', ['about-us', $data->box_asset]) }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-4 position-relative success-video">
        <a class="play-btn venobox" href="{{ $data->box_link }}" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5">
          <h2 class="section-title">{{ $data->box_title }}</h2>
          <p>{!! nl2br($data->box_description) !!}</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->

@stop