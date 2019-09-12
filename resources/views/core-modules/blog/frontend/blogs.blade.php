@extends('frontend.main')

@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.webp') }}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Our Blog</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten"> The main purpose of a blog is to connect you to the relevant audience. Another one is to boost your traffic and send quality leads to your website.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- blogs -->
<section class="section">
  <div class="container">
    <div class="row">
        @foreach($blogs as $b)
      <!-- blog post -->
      <article class="col-lg-4 col-sm-6 mb-5">
        <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ route('get-asset', ['blog', $b->asset]) }}" alt="{{ $b->title }}">
          <div class="card-body">
            <!-- post meta -->
            <ul class="list-inline mb-3">
              <!-- post date -->
              <li class="list-inline-item mr-3 ml-0">{{ \App\Http\Controllers\HelperController::changeDateFormat($b->publish_date, 'Y-m-d', 'd M, Y') }}</li>
              <!-- author -->
              <li class="list-inline-item mr-3 ml-0">By {{ $b->author }}</li>
            </ul>
            <a href="{{ route('blog', $b->slug) }}">
              <h4 class="card-title">{{ $b->title }}</h4>
            </a>
            <p class="card-text">{{ $b->short_description }}</p>
            <a href="{{ route('blog', $b->slug) }}" class="btn btn-primary btn-sm">read more</a>
          </div>
        </div>
      </article>
      @endforeach
      
      {{ $blogs->links() }}
    </div>
  </div>
</section>
<!-- /blogs -->
@stop