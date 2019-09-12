@extends('backend.main')

@section('content')

<style type="text/css">
	.subscriptionrequest{text-align: center; margin-top: 20px; }
	.subscriptionrequest h1{color:#0E4F88; font-size:36px; border-bottom: 2px #0E4F88 solid; padding-bottom: 10px;}
		.subscriptionrequest p{font-size: 16px; font-weight: bold;}

</style>

<div class="row sierra-row">	
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
					<div class="d-flex align-items-center">
						<a href="{{ route('admin-testimonials-list') }}" class="btn btn-primary btn-round ml-auto">
							<i class="fa fa-list"></i>&nbsp;
							 List Team
						</a>
					</div>	
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="subscriptionrequest">
							<h3>Edit {{ $data->name }}</h3>
						</div>	
					</div>		
				</div>
			</div>
			<form method="post" enctype="multipart/form-data" class="submit-once">
				<div class="card-body">
					<div class="col-sm-10">
						<div class="form-group">
							<label for="client">Client</label>
							<input id="client" type="text" name="data[client]" class="form-control client" required value="{{ $data->client }}">
							<span class="error-block">	@if($errors->has('client'))
								@foreach($errors->get('client') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
							</span>
						</div>

						<div class="form-group">
							@if($data->asset)
								<img src="{{ route('get-asset', ['testimonials', $data->asset]) }}" height="150px"><br/>
							@endif
							<label for="asset">Picture</label>
							<input type="file" name="data[asset]" accept="image/png, image/webp, image/jpeg">
							<span class="error-block">	@if($errors->has('asset'))
								@foreach($errors->get('asset') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
							</span>
						</div>

						<div class="form-group">
							<label for="testimonial">Testimonial</label>
							<textarea name="data[testimonial]" class="form-control" rows="5" required>{{ $data->testimonial }}</textarea>
							
							<span class="error-block">	@if($errors->has('testimonial'))
								@foreach($errors->get('testimonial') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
							</span>
						</div>

						<div class="form-group">
							<label for="rating">Rating</label>
							<input id="rating" type="number" name="data[rating]" step=1 min=0 class="form-control rating" value="{{ $data->rating }}" required>
							@if($errors->has('rating'))
								@foreach($errors->get('rating') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
						</div>

						<div class="form-group">
							<label for="ordering">Ordering</label>
							<input id="ordering" type="number" name="data[ordering]" step=1 min=0 class="form-control ordering" value="{{ $data->ordering }}" required>
							@if($errors->has('ordering'))
								@foreach($errors->get('ordering') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
						</div>


					</div>	
				</div>
			{{ csrf_field() }}
				<div class="card-action">
					<div class="col-sm-5">				
						<button type="submit" class="btn btn-success">Submit</button>
					</div>	
				</div>
			</form>
		</div>
	</div>
</div>			
@stop

@section('custom-js')
	
@stop