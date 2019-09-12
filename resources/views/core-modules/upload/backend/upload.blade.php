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
							<h3>Upload</h3>
							{{-- <p>( List of users who pay by bank for the subscription appear here. confirm the payment and approve users )</p> --}}
						</div>	
					</div>		
				</div>
			</div>
			<form method="post" enctype="multipart/form-data" class="submit-once">
				<div class="card-body">
					<div class="col-sm-10">
						<div class="form-group">
							<label for="note">Note</label>
							<textarea id="note" name="data[note]" class="form-control note">{{ str_replace("<br />", "\n", $data->note) }}</textarea>
							<span class="error-block">	@if($errors->has('note'))
								@foreach($errors->get('note') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
							</span>
						</div>

						<div class="form-group">
							<label for="email">Email</label>
							<input id="email" type="email" name="data[email]" class="form-control email" value="{{ $data->email }}" required>
							<span class="error-block">	@if($errors->has('email'))
								@foreach($errors->get('email') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
							</span>
						</div>

						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
								<label for="text_1">Text 1</label>
								<input id="text_1" type="text" name="data[text_1]" class="form-control text_1" value="{{ $data->text_1 }}">
								<span class="error-block">	@if($errors->has('text_1'))
									@foreach($errors->get('text_1') as $e)
										<p>{{ $e }}</p>
									@endforeach
								@endif
								</span>
								</div>

							</div>
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
								<label for="value_1">Value 1</label>
								<input id="value_1" type="text" name="data[value_1]" class="form-control value_1" value="{{ $data->value_1 }}">
								<span class="error-block">	@if($errors->has('value_1'))
									@foreach($errors->get('value_1') as $e)
										<p>{{ $e }}</p>
									@endforeach
								@endif
								</span>
								</div>

							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
								<label for="text_2">Text 2</label>
								<input id="text_2" type="text" name="data[text_2]" class="form-control text_2" value="{{ $data->text_2 }}">
								<span class="error-block">	@if($errors->has('text_2'))
									@foreach($errors->get('text_2') as $e)
										<p>{{ $e }}</p>
									@endforeach
								@endif
								</span>
								</div>

							</div>
							<div class="col-md-6 col-sm-22">
								<div class="form-group">
								<label for="value_2">Value 2</label>
								<input id="value_2" type="text" name="data[value_2]" class="form-control value_2" value="{{ $data->value_2 }}">
								<span class="error-block">	@if($errors->has('value_2'))
									@foreach($errors->get('value_2') as $e)
										<p>{{ $e }}</p>
									@endforeach
								@endif
								</span>
								</div>

							</div>
						</div>

						<div class="row">
							<div class="col-md-6 col-sm-12">
								<div class="form-group">
								<label for="text_3">Text 3</label>
								<input id="text_3" type="text" name="data[text_3]" class="form-control text_3" value="{{ $data->text_3 }}">
								<span class="error-block">	@if($errors->has('text_3'))
									@foreach($errors->get('text_3') as $e)
										<p>{{ $e }}</p>
									@endforeach
								@endif
								</span>
								</div>

							</div>
							<div class="col-md-6 col-sm-32">
								<div class="form-group">
								<label for="value_3">Value 3</label>
								<input id="value_3" type="text" name="data[value_3]" class="form-control value_3" value="{{ $data->value_3 }}">
								<span class="error-block">	@if($errors->has('value_3'))
									@foreach($errors->get('value_3') as $e)
										<p>{{ $e }}</p>
									@endforeach
								@endif
								</span>
								</div>

							</div>
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