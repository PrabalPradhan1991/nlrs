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
            <li class="list-inline-item m-3 text-uppercase" data-filter=".all">all</li>
            @foreach($services as $s)
                <li class="list-inline-item m-3 text-uppercase" data-filter=".{{ str_slug($s) }}">{{ $s }}</li>
            @endforeach
        </ul>
      </div>
    </div>
    <!-- teacher list -->
    <div class="row" data-ref="mixitup-container">
        @foreach($portfolios as $p)
      <!-- teacher -->
      <div data-ref="mixitup-target" class="col-lg-4 col-sm-6 mb-5 all {{ str_slug($p->category) }}">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ route('get-asset', ['portfolio', $p->asset]) }}" alt="{{ $p->category }}">
          <div class="card-body">
            <a href="{{ route('portfolio', $p->id) }}">
              <h4 class="card-title">{{ $p->title }}</h4>
            </a>
            <p>{{ $p->category }}</p>
             <p class="card-text mb-4">{{ $p->short_description }}</p>
            
          </div>
        </div>
      </div>
      @endforeach
    </div>
    {{ $portfolios->links() }}
  </div>
</section>
@stop