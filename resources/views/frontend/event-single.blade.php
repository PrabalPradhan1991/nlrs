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
        <h2 class="section-title">English Spoken</h2>
      </div>
      <!-- event image -->
      <div class="col-12 mb-4">
        <img src="{{ asset('frontend/images/events/event-single.webp') }}" alt="event thumb" class="img-fluid w-100">
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
                <p class="mb-0">Kathmandu, Nepal</p>
              </div>
            </div>
          </li>
          <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
            <div class="d-flex align-items-center">
              <i class="ti-calendar text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">DATE</h6>
                <p class="mb-0">December-12-18</p>
              </div>
            </div>
          </li>
          <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
            <div class="d-flex align-items-center">
              <i class="ti-time text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">TIME</h6>
                <p class="mb-0">04: 00 pm</p>
              </div>
            </div>
          </li>
          <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
            <div class="d-flex align-items-center">
              <i class="ti-wallet text-primary icon-md mr-2"></i>
              <div class="text-left">
                <h6 class="mb-0">ENTRY FEE</h6>
                <p class="mb-0">From: $699</p>
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
        <p>NLRS, Nepal Language and Research Solutions (Pvt.) Ltd., is one of the unprecedented language and localization
           agencies in Nepal. Nepal Language & Research Solutions is a Nepali company specializing in translation, writing,
           content development and research related services.We are inspired by our passion for discovery of knowledge and 
           our desire to eliminate the barrier of language in accessing knowledge.Nepal Language & Research Solutions providing simultaneous interpretation services to British Council Nepal for its day-long symposium on teachers' professional development.NLRS, Nepal Language and Research Solutions (Pvt.) Ltd., is one of the unprecedented language and localization agencies in Nepal. Nepal Language & Research Solutions is a Nepali company specializing in translation,writing,content development and research related services.</p>
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
  <!-- event -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="{{ asset('frontend/images/events/event.webp') }}" alt="event thumb">
        <div class="card-date"><span>18</span><br>December</div>
      </div>
      <div class="card-body">
        <!-- location -->
        <p><i class="ti-location-pin text-primary mr-2"></i>Kathmandu, Nepal</p>
        <a href="{{ route('event-single') }}"><h4 class="card-title">NLRS providing interpretation services to Oxfam in Nepal for its five-day long workshop on early and child marriage.</h4></a>
      </div>
    </div>
  </div>
  <!-- event -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="{{ asset('frontend/images/events/event02.webp') }}" alt="event thumb">
        <div class="card-date"><span>21</span><br>December</div>
      </div>
      <div class="card-body">
        <!-- location -->
        <p><i class="ti-location-pin text-primary mr-2"></i>Kathmandu, Nepal</p>
        <a href="{{ route('event-single') }}"><h4 class="card-title">NLRS providing interpretation services to Oxfam in Nepal for its five-day long workshop on early and child marriage.</h4></a>
      </div>
    </div>
  </div>
  <!-- event -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="{{ asset('frontend/images/events/event.webp') }}" alt="event thumb">
        <div class="card-date"><span>23</span><br>December</div>
      </div>
      <div class="card-body">
        <!-- location -->
        <p><i class="ti-location-pin text-primary mr-2"></i>Kathmandu, Nepal</p>
        <a href="{{ route('event-single') }}"><h4 class="card-title">NLRS providing interpretation services to Oxfam in Nepal for its five-day long workshop on early and child marriage.</h4></a>
      </div>
    </div>
  </div>
</div>
    
    
  </div>
</section>
@stop