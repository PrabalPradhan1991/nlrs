@extends('frontend.main')

@section('content')

<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <textarea name="message" id="message" class="form-control mb-3" placeholder="Your Message"></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- page title -->
<section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.webp') }}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="{{ route('events') }}">Upcoming Events</a></li>
          <li class="list-inline-item text-white h3 font-secondary nasted">Event Details</li>
        </ul>
        <p class="text-lighten">You can see our event details here.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- event single -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">{{  $event->title }}</h2>
      </div>
      <!-- event image -->
      <div class="col-12 mb-4">
        <img src="{{ route('get-asset', ['events', $event->asset]) }}" alt="{{ $event->title }}" class="img-fluid w-100">
      </div>
    </div>
    <!-- event info -->
    <div class="row align-items-center mb-5">
      <div class="col-lg-9">
        <ul class="list-inline">
          <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
            <div class="d-flex align-items-center">
              <i class="ti-location-pin text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">LOCATION</h6>
                <p class="mb-0">{{ $event->location }}</p>
              </div>
            </div>
          </li>
          <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
            <div class="d-flex align-items-center">
              <i class="ti-calendar text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">DATE</h6>
                <p class="mb-0">{{ \App\Http\Controllers\HelperController::changeDateFormat($event->start_date, 'Y-m-d', 'd M') }} - {{ \App\Http\Controllers\HelperController::changeDateFormat($event->end_date, 'Y-m-d', 'd M, Y') }}</p>
              </div>
            </div>
          </li>
          <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
            <div class="d-flex align-items-center">
              <i class="ti-time text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">TIME</h6>
                <p class="mb-0">{{ $event->event_time }}</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <div class="col-lg-3 text-lg-right text-left">
        <a class="btn btn-primary" href="#" data-toggle="modal" data-target="#signupModal">Apply now</a>
      </div>
      <!-- border -->
      <div class="col-12 mt-4 order-4">
        <div class="border-bottom border-primary"></div>
      </div>
    </div>
    <!-- event details -->
    <div class="row">
      <div class="col-12 mb-50">
        <h3>About Event</h3>
        <p>{!! nl2br($event->long_description) !!}</p>
      </div>
    </div>
    <!-- event speakers -->
   
  </div>
</section>
<!-- /event single -->

<!-- events -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">More Events</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
           
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
    <?php $events = \App\Http\Controllers\CoreModules\Events\EventsModel::orderBy('start_date', 'DESC')->take(3)->get(); ?>
  <!-- event -->
  @foreach($events as $e)
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="{{ route('get-asset', ['events', $e->asset]) }}" alt="{{ $e->title }}">
        <div class="card-date"><span>{{ \App\Http\Controllers\HelperController::changeDateFormat($e->start_date, 'Y-m-d', 'd') }}</span><br>{{ \App\Http\Controllers\HelperController::changeDateFormat($e->start_date, 'Y-m-d', 'M') }}</div>
      </div>
      <div class="card-body">
        <!-- location -->
        <p><i class="ti-location-pin text-primary mr-2"></i>{{ $e->location }}</p>
        <a href="{{ route('event-single', $e->id) }}"><h4 class="card-title">{{ $e->title }}</h4></a>
        <p>{{ $e->short_description }}</p>
      </div>
    </div>
  </div>
  @endforeach
  
</div>
    
    
  </div>
</section>
@stop