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
      @foreach($events as $e)
      <div class="col-lg-4 col-sm-6 mb-5">
        <div class="card border-0 rounded-0 hover-shadow">
          <div class="card-img position-relative">
            <img class="card-img-top rounded-0" src="{{ route('get-asset', ['events', $e->asset]) }}" alt="{{ $e->title }}">
            <div class="card-date"><span>{{ \App\Http\Controllers\HelperController::changeDateFormat($e->start_date, 'Y-m-d', 'd') }}</span><br>{{ \App\Http\Controllers\HelperController::changeDateFormat($e->start_date, 'Y-m-d', 'M') }}</div>
          </div>
          <div class="card-body">
            <!-- location -->
            <p><i class="ti-location-pin text-primary mr-2"></i>{{ $e->location }}</p>
            <a href="{{ route('event-single', $e->id) }}">
              <h4 class="card-title">{{ $e->short_description }}</h4>
            </a>
          </div>
        </div>
      </div>
      @endforeach
      
    </div>
  </div>

  {{ $events->links() }}
</section>


@stop