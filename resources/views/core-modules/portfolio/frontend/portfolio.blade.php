@extends('frontend.main')

@section('content')
<section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.webp') }}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{ route('portfolios') }}">Portfolio</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">{{ $portfolio->title }}</li>
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
        <img src="{{ route('get-asset', ['portfolio', $portfolio->asset]) }}" class="img-fluid w-100">
      </div>
    </div>
    <!-- course info -->
    <div class="row align-items-left mb-5" style="justify-content: left;">
      <div class="col-xl-3 order-1 col-sm-6 mb-4 mb-xl-0">
        <h2>{{ $portfolio->title }}</h2>
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
        
          <p>{!! nl2br($portfolio->long_description) !!}</p>
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
      <?php $portfolios = \App\Http\Controllers\CoreModules\Portfolio\PortfolioModel::where('category', $portfolio->category)->take(3)->orderBy('ordering', 'ASC')->get(); ?>

      @foreach($portfolios as $p)
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card p-0 border-primary rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ route('get-asset', ['portfolio', $p->asset]) }}" alt="{{ $p->title }}">
          <div class="card-body">
            
            <a href="{{ route('portfolio', $p->id) }}">
              <h4 class="card-title">{{ $p->title }}</h4>
            </a>
            <p class="card-text mb-4">{{ $p->short_description }}</p>
            <a href="{{ route('portfolio', $p->id) }}" class="btn btn-primary btn-sm">See more..</a>
          </div>
        </div>
      </div>
      @endforeach
      <!-- course item -->
      </div>
    </div>
</section>
@stop