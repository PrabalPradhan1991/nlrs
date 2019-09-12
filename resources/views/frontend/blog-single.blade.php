@extends('frontend.main')

@section('content')
<!-- page title -->
<section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.webp') }}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="blog.html">Our Blog</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Blog Details</li>
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
        <img src="{{ asset('frontend/images/blog/blog-single.webp') }}" alt="blog-thumb" class="img-fluid w-100">
      </div>
      <div class="col-12">
        <ul class="list-inline">
          <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><span class="font-weight-bold mr-2">Post:</span>Somrat</li>
          <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light">August 28, 2017</li>
          <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i class="ti-book mr-2"></i>Read 289</li>
          <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><i class="ti-share mr-2"></i>289</li>
          <li class="list-inline-item mr-4 mb-3 mb-md-0 text-light"><a class="text-light" href="#"><i class="ti-comments mr-2"></i>265</a></li>
        </ul>
      </div>
      <!-- border -->
      <div class="col-12 mt-4">
        <div class="border-bottom border-primary"></div>
      </div>
      <!-- blog contect -->
      <div class="col-12 mb-5">
        <h2>Blog Tittle </h2>
        <p>Super Bowl commercials are incredibly underpriced – even at a $5 million+ price tag, they should cost 
          way more than they do in 2019. If you told me that you have $25 million and you wanted to sell some stuff,
          I would look at Super Bowl commercials first — then I would look at Facebook, Instagram, and YouTube ads.
          This is why I talk a lot about being in the attention business over the social media business. The only 
          reason I’m interested in social media is because it has captured the attention of so many. The Super Bowl 
          is one of the single biggest events in America. Virtually everyone is watching – and the attitudes towards 
          Super Bowl ads haven’t really changed for over a decade. </p>
        <p>I felt it back in 2014, when I didn’t watch the Super Bowl. I just laid in bed. It felt surreal – it was 
          mind blowing knowing that all of America was doing one thing, and my brother AJ and I were just sitting in 
          silence.For me, that really drilled home the fact that this is such a massive event in America with so much attention around it.From a marketing standpoint, there’s a “brand” that’s been built around Super Bowl commercials. The reason I’m so bullish on them because the commercials actually get consumed. During the event, there are 
          always a ton of people watching them, and even after the event people love to look up Super Bowl commercials 
          on YouTube and vote on the best ones.</p>
        <p>When it comes to regular TV, the “event” is to consume the actual TV show and reach for your phone during the   commercial breaks. The event is not to consume  the commercial — but during the Super Bowl, the commercials are 
        a big part of the fun. . </p>
      </div>
      <!-- comment box -->
      <div class="col-12">
        <form action="#" class="row">
          <div class="col-sm-6">
            <input type="text" class="form-control mb-4" id="name" name="name" placeholder="Full Name">
          </div>
          <div class="col-sm-6">
            <input type="email" class="form-control mb-4" id="mail" name="mail" placeholder="Email Address">
          </div>
          <div class="col-12">
            <textarea name="comment" id="comment" class="form-control mb-4" placeholder="Comment Here..."></textarea>
          </div>
          <div class="col-12">
            <button type="submit" value="send" class="btn btn-primary">post comment</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!-- /blog details -->

<!-- blog -->
<section class="section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">Recommended</h2>
      </div>
    </div>
    <div class="row justify-content-center">
  <!-- blog post -->
  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="{{ asset('frontend/images/blog/blog02.webp') }}" alt="Post thumb">
      <div class="card-body">
        <!-- post meta -->
        <ul class="list-inline mb-3">
          <!-- post date -->
          <li class="list-inline-item mr-3 ml-0">August 28, 2019</li>
          <!-- author -->
          <li class="list-inline-item mr-3 ml-0">By Jonathon</li>
        </ul>
        <a href="{{ route('blog-single') }}">
          <h4 class="card-title">The Expenses You Are Thinking.</h4>
        </a>
        <p class="card-text">Super Bowl commercials are incredibly underpriced...</p>
        <a href="{{ route('blog-single') }}" class="btn btn-primary btn-sm">read more</a>
      </div>
    </div>
  </article>
  <!-- blog post -->
  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="{{ asset('frontend/images/blog/blog.webp') }}" alt="Post thumb">
      <div class="card-body">
        <!-- post meta -->
        <ul class="list-inline mb-3">
          <!-- post date -->
          <li class="list-inline-item mr-3 ml-0">August 13, 2019</li>
          <!-- author -->
          <li class="list-inline-item mr-3 ml-0">By Jonathon Drew</li>
        </ul>
        <a href="{{ route('blog-single') }}">
          <h4 class="card-title">Tips to Succeed in an Online Course</h4>
        </a>
        <p class="card-text">Super Bowl commercials are incredibly underpriced...</p>
        <a href="{{ route('blog-single') }}" class="btn btn-primary btn-sm">read more</a>
      </div>
    </div>
  </article>
  <!-- blog post -->
  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
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
          <h4 class="card-title">Orientation Program for the new students</h4>
        </a>
        <p class="card-text">Super Bowl commercials are incredibly underpriced...</p>
        <a href="{{ route('blog-single') }}" class="btn btn-primary btn-sm">read more</a>
      </div>
    </div>
  </article>
</div>
  </div>
</section>
@stop