@extends('frontend.main')

@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.webp') }}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{ route('blogs') }}">Our Blog</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">{{ $blog->title }}</li>
        </ul>
        <p class="text-lighten"> The main purpose of a blog is to connect you to the relevant audience. Another one is to boost your traffic and send quality leads to your website.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- blog details -->
<section class="section-sm bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-12 mb-4">
        <img src="{{ route('get-asset', ['blog', $blog->asset]) }}" alt="{{ $blog->title }}" class="img-fluid w-100">
      </div>
      <div class="col-12">
        <ul class="list-inline">
          <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><span class="font-weight-bold mr-2">Post:</span>{{ $blog->author }}</li>
          <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light">{{ \App\Http\Controllers\HelperController::changeDateFormat($blog->publish_date, 'Y-m-d', 'd M, Y') }}</li>
        </ul>
      </div>
      <!-- border -->
      <div class="col-12 mt-4">
        <div class="border-bottom border-primary"></div>
      </div>
      <!-- blog contect -->
      <div class="col-12 mb-5">
        <h2>{{ $blog->title }}</h2>
        <p>{!! nl2br($blog->long_description) !!}</p>
      </div>
    </div>
  </div>
</section>
<!-- /blog details -->

<!-- blog -->
<?php $blogs = \App\Http\Controllers\CoreModules\Blog\BlogModel::orderBy('publish_date', 'DESC')->take(3)->get(); ?>
<section class="section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">Recent</h2>
      </div>
    </div>
    <div class="row justify-content-center">
  <!-- blog post -->
  @foreach($blogs as $b)
  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="{{ route('get-asset', ['blog', $b->asset]) }}" alt="Post thumb">
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
  
</div>
  </div>
</section>
@stop