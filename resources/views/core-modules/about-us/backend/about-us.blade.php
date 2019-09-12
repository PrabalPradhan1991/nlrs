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
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="subscriptionrequest">
							<h3>About Us</h3>
							{{-- <p>( List of users who pay by bank for the subscription appear here. confirm the payment and approve users )</p> --}}
						</div>	
					</div>		
				</div>
			</div>
			<form method="post" enctype="multipart/form-data" class="submit-once">
				<div class="card-body">
					<div class="col-sm-10">
						<div class="form-group">
							<label for="title_text">Title</label>
							<input id="title_text" type="text" name="data[title_text]" class="form-control title_text" value="{{ $data->title_text }}" required>
							<span class="error-block">	@if($errors->has('title_text'))
								@foreach($errors->get('title_text') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
							</span>
						</div>

						<div class="form-group">
							@if($data->asset)
								<img src="{{ route('get-asset', ['about-us', $data->asset]) }}" height="150px"><br/>
							@endif
							<label for="asset">Main Image</label>
							<input type="file" name="data[asset]" accept="image/jpg, image/png, image/webp">
							<span class="error-block">	@if($errors->has('asset'))
								@foreach($errors->get('asset') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
							</span>
						</div>

						<div class="form-group">
							<label for="short_description">Short Description</label>
							<textarea id="short_description" type="text" name="data[short_description]" class="form-control short_description">{{ str_replace("<br />", "\n", $data->short_description) }}</textarea>
							<span class="error-block">	@if($errors->has('short_description'))
								@foreach($errors->get('short_description') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
							</span>
						</div>

						<div class="form-group">
							<label for="long_description">Long Description</label>
							<textarea id="long_description" type="text" name="data[long_description]" class="form-control long_description">{{ str_replace("<br />", "\n", $data->long_description) }}</textarea>
							<span class="error-block">	@if($errors->has('long_description'))
								@foreach($errors->get('long_description') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
							</span>
						</div>

						<div class="form-group">
							<label for="box_title">Box Title</label>
							<input id="box_title" type="text" name="data[box_title]" class="form-control box_title" value="{{ $data->box_title }}" required>
							<span class="error-block">	@if($errors->has('box_title'))
								@foreach($errors->get('box_title') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
							</span>
						</div>

						<div class="form-group">
							<label for="box_description">Box Description</label>
							<textarea id="box_description" type="text" name="data[box_description]" class="form-control box_description">{{ str_replace("<br />", "\n", $data->box_description) }}</textarea>
							<span class="error-block">	@if($errors->has('box_description'))
								@foreach($errors->get('box_description') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
							</span>
						</div>

						<div class="form-group">
							@if($data->box_asset)
								<img src="{{ route('get-asset', ['about-us', $data->box_asset]) }}" height="150px"><br/>
							@endif
							<label for="box_asset">Box Image</label>
							<input type="file" name="data[box_asset]" accept="image/jpg, image/png, image/webp">
							<span class="error-block">	@if($errors->has('box_asset'))
								@foreach($errors->get('box_asset') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
							</span>
						</div>

						<div class="form-group">
							<label for="box_link">Link</label>
							<input id="box_link" type="text" name="data[box_link]" class="form-control box_link" value="{{ $data->box_link }}">
							<span class="error-block">	@if($errors->has('box_link'))
								@foreach($errors->get('box_link') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
							</span>
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