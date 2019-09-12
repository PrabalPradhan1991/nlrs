@extends('frontend.main')

@section('content')

<?php $_parameters; ?>



<!-- hero slider -->
<?php $_parameters['slider'] = \App\Http\Controllers\CoreModules\Slider\SliderModel::orderBy('ordering','ASC')->where('is_active', 'yes')->get(); 
      $_parameters['background_image'] = (new \App\HelperModel)->getHelperValue('slider_background_image');     
?>

<section class="hero-section overlay bg-cover" @if($_parameters['background_image']) data-background="{{ route('get-asset', ['slider-background', $_parameters['background_image']]) }}" @endif>
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->

      @foreach($_parameters['slider'] as $s)
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1">{{ $s->main_text }}</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4">{{ $s->sub_text }}</p>
           
          </div>
        </div>
      </div>
      @endforeach
      
    </div>
  </div>
</section>
<!-- /hero slider -->

<!-- banner-feature -->
<section class="bg-gray">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <div class="col-xl-4 col-lg-5 align-self-end">
        <?php $_parameters['background_image'] = (new \App\HelperModel)->getHelperValue('service_side_image');  ?>
        @if($_parameters['background_image'])
        <img class="img-fluid w-100" src="{{ route('get-asset', ['service-side-image', $_parameters['background_image']]) }}" alt="banner-feature">
        @endif
      </div>
      <div class="col-xl-8 col-lg-7">
        <div class="row feature-blocks bg-gray justify-content-between">
          <?php $_parameters['services'] = \App\Http\Controllers\CoreModules\Service\ServiceModel::orderBy('ordering','ASC')->get();  ?>
          @foreach($_parameters['services'] as $s)
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="{{ $s->icon }} mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">{{ $s->service }}</h3>
            <p>{!! nl2br($s->description) !!}</p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /banner-feature -->

<!-- about us -->
<?php $_parameters['about_us'] = (new \App\Http\Controllers\CoreModules\AboutUs\AboutUsModel)->getAboutUs();  ?>
<section class="section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title">{{ $_parameters['about_us']->title_text }}</h2>
        <p>{!! nl2br($_parameters['about_us']->short_description) !!}</p>
        <a href="{{ route('about-us') }}" class="btn btn-primary-outline">Learn more</a>
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
        <img class="img-fluid w-100" src="{{ route('get-asset', ['about-us', $_parameters['about_us']->asset]) }}" alt="about image">
      </div>
    </div>
  </div>
</section>
<!-- /about us -->

<!-- courses -->
<?php $_parameters['portfolios'] = (new \App\Http\Controllers\CoreModules\Portfolio\PortfolioModel)->orderBy('ordering', 'ASC')->take(6)->get();  ?>
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Recent Works</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="{{ route('portfolios') }}" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>
          </div>
        </div>
      </div>
    </div>
    <!-- courses list -->
<div class="row justify-content-center">
  <!-- course item -->

  @foreach($_parameters['portfolios'] as $p)
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src="{{ route('get-asset', ['portfolio', $p->asset]) }}" alt="{{ $p->title }}">
      <div class="card-body">

        <a href="{{ route('portfolio', $p->id) }}">
          <h4 class="card-title">{{ $p->title }}</h4>
          <p>{{ $p->category }}</p>
        </a>
        <p class="card-text mb-4"> {{ $p->short_description }}</p>
        <a href="{{ route('portfolio', $p->id) }}" class="btn btn-primary btn-sm">See more..</a>
      </div>
    </div>
  </div>
  @endforeach
  
</div>
<!-- /course list -->
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="portfolio.html" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /courses -->

<?php $_parameters['testimonials'] = \App\Http\Controllers\CoreModules\Testimonials\TestimonialsModel::orderBy('ordering','ASC')->get(); ?>
<!-- testimonial -->
  <section class="section testimonial">
    <div class="testimonials">
      <div class="inner">
        <h1>Testimonials</h1>
        <div class="border"></div>
        <div class="row">
          @foreach($_parameters['testimonials'] as $t)
          <div class="col">
             <div class="testimonial">
                <img src="{{ route('get-asset', ['testimonials', $t->asset]) }}" alt="{{ $t->client }}">
                <div class="name">{{ $t->client }}</div>
                <div class="stars">
                  @for($i = 0; $i < $t->rating; $i++)
                  <i class="fas fa-star"></i>
                  @endfor
                  @for($i; $i<=5 ; $i++)
                  <i class="far fa-star"></i>
                  @endfor
                </div>
                <p> {{ $t->testimonial }}</p>
             </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
 <!-- testimonial -->


<?php $_parameters['clients'] = \App\Http\Controllers\CoreModules\Clients\ClientsModel::orderBy('ordering','ASC')->get(); ?>
 <!-- Our Clients -->
     <section class=" section page-section">
       <div class="container">
           <div class="row">
               <div class="col-md-4 col-md-push-8">
                   <h2 class="title-section"><span class="title-regular">OUR</span><br/>CLIENTS</h2>
                  
                   <p>
                       Serving our clients is privilege and responsibility that we do not take lightly.
                   </p>
               </div>
               <div class="col-md-8 col-md-pull-4 text-center">
                   <div class="row multiple-items">
                    @foreach($_parameters['clients'] as $c)
                       <div class="col-md-4">
                           <img src="{{ route('get-asset', ['clients', $c->asset]) }}" alt="{{ $c->client }}" class="client-logo img img-responsive" />
                       </div>
                    @endforeach
                   </div>
                   <div class="content">
                       <div class="row">
                               <div class="arrows-here">
                               </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </section>
<!-- /Our Clients -->

<!-- events -->
<?php $_parameters['events'] = \App\Http\Controllers\CoreModules\Events\EventsModel::orderBy('start_date','DESC')->take(3)->get(); ?>
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Upcoming Events</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="{{ route('events') }}" class="btn btn-sm btn-primary-outline ml-sm-3 d-none d-sm-block">see all</a>
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
  <!-- event -->
  @foreach($_parameters['events'] as $e)
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="{{ route('get-asset', ['events', $e->asset]) }}" alt="event thumb">
        <div class="card-date"><span>{{ \App\Http\Controllers\HelperController::changeDateFormat($e->start_date, 'Y-m-d', 'd') }}</span><br>{{ \App\Http\Controllers\HelperController::changeDateFormat($e->start_date, 'Y-m-d', 'M') }}</div>
      </div>
      <div class="card-body">
        <!-- location -->
        <p><i class="ti-location-pin text-primary mr-2"></i>{{ $e->location }}</p>
        <a href="{{ route('event-single', $e->id) }}"><h4 class="card-title">{{ $e->title }}</h4></a>
        <p>{!! $e->short_description !!}</p>
      </div>
    </div>
  </div>
  @endforeach
  
</div>
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="{{ route('events') }}" class="btn btn-sm btn-primary-outline d-sm-none d-inline-block">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /events -->

    

<!-- blog -->
<?php $_parameters['blogs'] = \App\Http\Controllers\CoreModules\Blog\BlogModel::orderBy('publish_date','DESC')->where('is_active', 'yes')->take(3)->get(); ?>
<section class="section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">Latest Blogs</h2>
      </div>
    </div>
    <div class="row justify-content-center">
  <!-- blog post -->
  @foreach($_parameters['blogs'] as $b)
  <article class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card rounded-0 border-bottom border-primary border-top-0 border-left-0 border-right-0 hover-shadow">
      <img class="card-img-top rounded-0" src="{{ route('get-asset', ['blog', $b->asset]) }}" alt="Post thumb">
      <div class="card-body">
        <!-- post meta -->
        <ul class="list-inline mb-3">
          <!-- post date -->
          <li class="list-inline-item mr-3 ml-0">{{ \App\Http\Controllers\HelperController::changeDateFormat($b->publish_date, 'Y-m-d', 'd M, Y') }}</li>
          <!-- author -->
          <li class="list-inline-item mr-3 ml-0">{{ $b->author }}</li>
        </ul>
        <a href="blog-single.html">
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
<!-- /blog -->

<!-- footer -->

@stop

@section('custom-js')
<!-- for slider -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
   <script>
       $('.multiple-items').slick({
         infinite: true,
         lazyLoad: 'ondemand',
         slidesToShow: 3,
         slidesToScroll: 1,
         autoplay: true,
         prevArrow: '<img src="{{ asset('images/left-arrow.webp') }}" class="pull-left">',
         nextArrow: '<img src="{{ asset('images/right-arrow.webp') }}" class="pull-right">',
         appendArrows: ".arrows-here"
       });
   </script>
@stop