@extends('frontend.main')

@section('content')

<!-- page title -->
<section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.webp') }}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">About Us</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Our courses offer a good compromise between the continuous assessment favoured by some universities and the emphasis placed on final exams by others.</p>
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
        <img class="img-fluid w-100 mb-4" src="{{ asset('frontend/images/about/about-page.webp') }}" alt="about image">
        <h2 class="section-title">ABOUT OUR JOURNEY</h2>
        <p>NLRS, Nepal Language and Research Solutions (Pvt.) Ltd., is one of the unprecedented language and localization agencies in Nepal. Nepal Language & Research Solutions is a Nepali company specializing in translation, writing, content development and research related services.</p>
        <p> We are inspired by our passion for discovery of knowledge and our desire to eliminate the barrier of language in accessing knowledge.NLRS, Nepal Language and Research Solutions (Pvt.) Ltd., is one of the unprecedented language and localization agencies in Nepal!</p>
      </div>
    </div>
  </div>
</section>
<!-- /about -->



<!-- success story -->
<section class="section bg-cover" data-background="{{ asset('frontend/images/backgrounds/success-story.webp') }}">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-4 position-relative success-video">
        <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5">
          <h2 class="section-title">Success Stories</h2>
          <p>NLRS, Nepal Language and Research Solutions (Pvt.) Ltd., is one of the unprecedented language and localization agencies in Nepal. Nepal Language & Research Solutions is a Nepali company specializing in translation, writing, content development and research related services.</p>
          <p> We are inspired by our passion for discovery of knowledge and our desire to eliminate the barrier of language in accessing knowledge.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->
@stop