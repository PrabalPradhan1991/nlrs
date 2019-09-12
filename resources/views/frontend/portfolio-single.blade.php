@extends('frontend.main')

@section('content')
<section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.webp') }}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="portfolio.html">Portfolio</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Photography</li>
        </ul>
        <p class="text-lighten">Portfolio is the union of two passions - media and technology. We focus on using emerging media to connect bussiness with clients, customers and staff in meaningful and engaging ways.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- section -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-4">
        <!-- course thumb -->
        <img src="{{ asset('frontend/images/portfolio/portfolio-single.webp') }}" class="img-fluid w-100">
      </div>
    </div>
    <!-- course info -->
    <div class="row align-items-center mb-5">
      <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
        <h2>Overcoming the barrier of language</h2>
      </div>
     
      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
    <!-- course details -->
    <div class="row">
      <div class="col-12 mb-4">
        <h3>Project Description</h3>
        
          <p>NLRS, Nepal Language and Research Solutions (Pvt.) Ltd., is one of the unprecedented language and localization
           agencies in Nepal. Nepal Language & Research Solutions is a Nepali company specializing in translation, writing,
           content development and research related services.We are inspired by our passion for discovery of knowledge and 
           our desire to eliminate the barrier of language in accessing knowledge.Nepal Language & Research Solutions providing simultaneous interpretation services to British Council Nepal for its day-long symposium on teachers' professional development.NLRS, Nepal Language and Research Solutions (Pvt.) Ltd., is one of the unprecedented language and 
           localizationagencies in Nepal. Nepal Language & Research Solutions is a Nepali company specializing in translation,
           writing,content development and research related services.</p>
      </div>
     
      
     
    </div>
  </div>
</section>
<!-- /section -->

<!-- related course -->
<section class="section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">Related Works</h2>
      </div>
    </div>
    <div class="row justify-content-center">
      <!-- course item -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ asset('frontend/images/portfolio/portfolio.webp') }}" alt="course thumb">
          <div class="card-body">
            
            <a href="course-single.html">
              <h4 class="card-title">Overcoming the barrier of language</h4>
            </a>
            <p class="card-text mb-4">  NLRS providing interpretation services to Oxfam in Nepal for its five-day long workshop on early and child marriage....</p>
            <a href="course-single.html" class="btn btn-primary btn-sm">See more..</a>
          </div>
        </div>
      </div>
      <!-- course item -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ asset('frontend/images/portfolio/portfolio.webp') }}" alt="course thumb">
          <div class="card-body">
            
            <a href="course-single.html">
              <h4 class="card-title">Overcoming the barrier of language</h4>
            </a>
            <p class="card-text mb-4">  NLRS providing interpretation services to Oxfam in Nepal for its five-day long workshop on early and child marriage....</p>
            <a href="course-single.html" class="btn btn-primary btn-sm">See more..</a>
          </div>
        </div>
      </div>
      <!-- course item -->
       <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ asset('frontend/images/portfolio/portfolio.webp') }}" alt="course thumb">
          <div class="card-body">
            
            <a href="course-single.html">
              <h4 class="card-title">Overcoming the barrier of language</h4>
            </a>
            <p class="card-text mb-4">  NLRS providing interpretation services to Oxfam in Nepal for its five-day long workshop on early and child marriage....</p>
            <a href="course-single.html" class="btn btn-primary btn-sm">See more..</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop