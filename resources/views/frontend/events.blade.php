@extends('frontend.main')

@section('content')
<section class="page-title-section overlay" data-background="{{ asset('frontend/images/backgrounds/page-title.webp') }}">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <ul class="list-inline custom-breadcrumb">
          <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="@@page-link">Upcoming Events</a></li>
          <li class="list-inline-item text-white h3 font-secondary @@nasted"></li>
        </ul>
        <p class="text-lighten">You can see our upcoming events here.</p>
      </div>
    </div>
  </div>
</section>
<!-- /page title -->

<!-- courses -->
<section class="section">
  <div class="container">
    <div class="row">
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="{{ asset('frontend/images/events/event.webp') }}" alt="event thumb">
            <div class="card-date"><span>18</span><br>December</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Kathmandu, Nepal</p>
            <a href="{{ route('event-single') }}">
              <h4 class="card-title">NLRS providing interpretation services to Oxfam in Nepal for its five-day long workshop on early and child marriage.</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="{{ asset('frontend/images/events/event02.webp') }}" alt="event thumb">
            <div class="card-date"><span>21</span><br>December</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Kathmandu, Nepal</p>
            <a href="{{ route('event-single') }}">
              <h4 class="card-title">Research seminar in clinical science.</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="{{ asset('frontend/images/events/event.webp') }}" alt="event thumb">
            <div class="card-date"><span>23</span><br>December</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Kathmandu, Nepal</p>
            <a href="{{ route('event-single') }}">
              <h4 class="card-title">Toward a public philosophy of justice</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="{{ asset('frontend/images/events/event02.webp') }}" alt="event thumb">
            <div class="card-date"><span>18</span><br>December</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Kathmandu, Nepal</p>
            <a href="{{ route('event-single') }}">
              <h4 class="card-title">Research seminar in clinical science.</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="{{ asset('frontend/images/events/event.webp') }}" alt="event thumb">
            <div class="card-date"><span>21</span><br>December</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Kathmandu, Nepal</p>
            <a href="{{ route('event-single') }}">
              <h4 class="card-title">Inequality seminar returns spring term</h4>
            </a>
          </div>
        </div>
      </div>
      <!-- event -->
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="{{ asset('frontend/images/events/event02.webp') }}" alt="event thumb">
            <div class="card-date"><span>23</span><br>December</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>Kathmandu, Nepal</p>
            <a href="{{ route('event-single') }}">
              <h4 class="card-title">Social media and behavior economics conference</h4>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop