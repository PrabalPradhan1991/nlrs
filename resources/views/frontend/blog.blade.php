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
      <!-- blog post -->
      <article class="col-lg-4 col-sm-6 mb-5">
        <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ asset('frontend/images/blog/blog.webp') }}" alt="Post thumb">
          <div class="card-body">
            <!-- post meta -->
            <ul class="list-inline mb-3">
              <!-- post date -->
              <li class="list-inline-item mr-3 ml-0">August 28, 2018</li>
              <!-- author -->
              <li class="list-inline-item mr-3 ml-0">By Somrat Sorkar</li>
            </ul>
            <a href="{{ route('blog-single') }}">
              <h4 class="card-title">Elegant Light Box Paper Cut Dioramas</h4>
            </a>
            <p class="card-text">Super Bowl commercials are incredibly underpriced...</p>
            <a href="{{ route('blog-single') }}" class="btn btn-primary btn-sm">read more</a>
          </div>
        </div>
      </article>
      <!-- blog post -->
      <article class="col-lg-4 col-sm-6 mb-5">
        <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ asset('frontend/images/blog/blog02.webp') }}" alt="Post thumb">
          <div class="card-body">
            <!-- post meta -->
            <ul class="list-inline mb-3">
              <!-- post date -->
              <li class="list-inline-item mr-3 ml-0">August 13, 2018</li>
              <!-- author -->
              <li class="list-inline-item mr-3 ml-0">By Jonathon Drew</li>
            </ul>
            <a href="{{ route('blog-single') }}">
              <h4 class="card-title">The Expenses You Are Thinking</h4>
            </a>
            <p class="card-text">Super Bowl commercials are incredibly underpriced...</p>
            <a href="{{ route('blog-single') }}" class="btn btn-primary btn-sm">read more</a>
          </div>
        </div>
      </article>
      <!-- blog post -->
      <article class="col-lg-4 col-sm-6 mb-5">
        <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ asset('frontend/images/blog/blog.webp') }}" alt="Post thumb">
          <div class="card-body">
            <!-- post meta -->
            <ul class="list-inline mb-3">
              <!-- post date -->
              <li class="list-inline-item mr-3 ml-0">August 24, 2018</li>
              <!-- author -->
              <li class="list-inline-item mr-3 ml-0">By Alex Pitt</li>
            </ul>
            <a href="{{ route('blog-single') }}">
              <h4 class="card-title">The rise of audio branding</h4>
            </a>
            <p class="card-text">Super Bowl commercials are incredibly underpriced...</p>
            <a href="{{ route('blog-single') }}" class="btn btn-primary btn-sm">read more</a>
          </div>
        </div>
      </article>
      <!-- blog post -->
      <article class="col-lg-4 col-sm-6 mb-5">
        <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ asset('frontend/images/blog/blog02.webp') }}" alt="Post thumb">
          <div class="card-body">
            <!-- post meta -->
            <ul class="list-inline mb-3">
              <!-- post date -->
              <li class="list-inline-item mr-3 ml-0">August 28, 2018</li>
              <!-- author -->
              <li class="list-inline-item mr-3 ml-0">By Somrat Sorkar</li>
            </ul>
            <a href="{{ route('blog-single') }}">
              <h4 class="card-title">Enrolling new members into the Libraray</h4>
            </a>
            <p class="card-text">Super Bowl commercials are incredibly underpriced...</p>
            <a href="{{ route('blog-single') }}" class="btn btn-primary btn-sm">read more</a>
          </div>
        </div>
      </article>
      <!-- blog post -->
      <article class="col-lg-4 col-sm-6 mb-5">
        <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ asset('frontend/images/blog/blog.webp') }}" alt="Post thumb">
          <div class="card-body">
            <!-- post meta -->
            <ul class="list-inline mb-3">
              <!-- post date -->
              <li class="list-inline-item mr-3 ml-0">August 13, 2018</li>
              <!-- author -->
              <li class="list-inline-item mr-3 ml-0">By Jonathon Drew</li>
            </ul>
            <a href="{{ route('blog-single') }}">
              <h4 class="card-title">Completion of Projects before the deadline</h4>
            </a>
            <p class="card-text">Super Bowl commercials are incredibly underpriced...</p>
            <a href="{{ route('blog-single') }}" class="btn btn-primary btn-sm">read more</a>
          </div>
        </div>
      </article>
      <!-- blog post -->
      <article class="col-lg-4 col-sm-6 mb-5">
        <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
          <img class="card-img-top rounded-0" src="{{ asset('frontend/images/blog/blog02.webp') }}" alt="Post thumb">
          <div class="card-body">
            <!-- post meta -->
            <ul class="list-inline mb-3">
              <!-- post date -->
              <li class="list-inline-item mr-3 ml-0">August 24, 2018</li>
              <!-- author -->
              <li class="list-inline-item mr-3 ml-0">By Alex Pitt</li>
            </ul>
            <a href="{{ route('blog-single') }}">
              <h4 class="card-title">The changing scenario in music industry</h4>
            </a>
            <p class="card-text">Super Bowl commercials are incredibly underpriced...</p>
            <a href="{{ route('blog-single') }}" class="btn btn-primary btn-sm">read more</a>
          </div>
        </div>
      </article>
      <ul class="pagination pagination-lg">
                            <li><a href="#">«</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">»</a></li>
                        </ul>
    </div>
  </div>
</section>
<!-- /blogs -->
@stop