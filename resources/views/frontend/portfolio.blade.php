@extends('frontend.main')

@section('content')
<section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.webp') }}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Portfolio</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">Portfolio is the union of two passions - media and technology. We focus on using emerging media to connect bussiness with clients, customers and staff in meaningful and engaging ways.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- teachers -->
<section class="section">
  <div data-ref="mixitup-target" class="container">
    <div class="row">
      <div class="col-12">
        <!-- teacher category list -->
        <ul class="list-inline text-center filter-controls mb-5">
          <li class="list-inline-item m-3 text-uppercase" data-filter=".arts">arts</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".bio-science">biological science</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".business-study">business studies</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".law">law</li>
          <li class="list-inline-item m-3 text-uppercase" data-filter=".pharmacy">pharmacy</li>
         
        </ul>
      </div>
    </div>
    <!-- teacher list -->
    <div class="row" data-ref="mixitup-container">
      <!-- teacher -->
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts law">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ asset('frontend/images/portfolio/portfolio.webp') }}" alt="teacher">
          <div class="card-body">
            <a href="{{ route('portfolio-single') }}">
              <h4 class="card-title">Overcoming the barrier of language</h4>
            </a>
            <p>Category</p>
             <p class="card-text mb-4">  NLRS providing interpretation services to Oxfam in Nepal for its five-day long workshop on early and child marriage.....</p>
            
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts pharmacy">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ asset('frontend/images/portfolio/portfolio02.webp') }}" alt="teacher">
          <div class="card-body">
            <a href="{{ route('portfolio-single') }}">
              <h4 class="card-title">Overcoming the barrier of language</h4>
            </a>
            <p>Category</p>
             <p class="card-text mb-4">  NLRS providing interpretation services to Oxfam in Nepal for its five-day long workshop on early and child marriage.....</p>
            
          </div>
        </div>
      </div>
      <!-- teacher -->
       <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts business-study">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ asset('frontend/images/portfolio/portfolio03.webp') }}" alt="teacher">
          <div class="card-body">
            <a href="{{ route('portfolio-single') }}">
              <h4 class="card-title">Overcoming the barrier of language</h4>
            </a>
            <p>Category</p>
             <p class="card-text mb-4">  NLRS providing interpretation services to Oxfam in Nepal for its five-day long workshop on early and child marriage.....</p>
             
          </div>
        </div>
      </div>
      <!-- teacher -->
       <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts bio-science">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ asset('frontend/images/portfolio/portfolio03.webp') }}" alt="teacher">
          <div class="card-body">
            <a href="{{ route('portfolio-single') }}">
              <h4 class="card-title">Overcoming the barrier of language</h4>
            </a>
            <p>Category</p>
             <p class="card-text mb-4">  NLRS providing interpretation services to Oxfam in Nepal for its five-day long workshop on early and child marriage.....</p>
            
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts law">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ asset('frontend/images/portfolio/portfolio02.webp') }}" alt="teacher">
          <div class="card-body">
            <a href="{{ route('portfolio-single') }}">
              <h4 class="card-title">Overcoming the barrier of language</h4>
            </a>
            <p>Category</p>
             <p class="card-text mb-4">  NLRS providing interpretation services to Oxfam in Nepal for its five-day long workshop on early and child marriage.....</p>
             
          </div>
        </div>
      </div>
      <!-- teacher -->
       <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 arts business-study">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ asset('frontend/images/portfolio/portfolio.webp') }}" alt="teacher">
          <div class="card-body">
            <a href="{{ route('portfolio-single') }}">
              <h4 class="card-title">Overcoming the barrier of language</h4>
            </a>
            <p>Category</p>
             <p class="card-text mb-4">  NLRS providing interpretation services to Oxfam in Nepal for its five-day long workshop on early and child marriage.....</p>
             
          </div>
        </div>
      </div>
      
     
      
    </div>
    <ul class="pagination pagination-lg">
                            <li><a href="#">«</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
  </div>
</section>
@stop