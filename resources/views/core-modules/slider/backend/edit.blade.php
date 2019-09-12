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
						<a href="{{ route('admin-slider-list') }}" class="btn btn-primary btn-round ml-auto">
							<i class="fa fa-list"></i>&nbsp;
							 List Slider Texts
						</a>
					</div>	
			</div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="subscriptionrequest">
							<h3>Edit Slider Text</h3>
						</div>	
					</div>		
				</div>
			</div>
			<form method="post" enctype="multipart/form-data" class="submit-once">
				<div class="card-body">
					<div class="col-sm-10">
						<div class="form-group">
							<label for="link">Main Text</label>
							<input id="main_text" type="text" name="data[main_text]" class="form-control main_text" value="{{ $data->main_text }}">
							@if($errors->has('main_text'))
								@foreach($errors->get('main_text') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
						</div>

						<div class="form-group">
							<label for="sub_text">Sub Text</label>
							<input id="sub_text" type="text" name="data[sub_text]" class="form-control sub_text" value="{{ $data->sub_text }}">
							@if($errors->has('sub_text'))
								@foreach($errors->get('sub_text') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
						</div>

						<div class="form-group">
							<label for="ordering">Ordering</label>
							<input id="ordering" type="number" name="data[ordering]" class="form-control ordering" value="{{ $data->ordering }}">
							@if($errors->has('ordering'))
								@foreach($errors->get('ordering') as $e)
									<p>{{ $e }}</p>
								@endforeach
							@endif
						</div>

						<div class="form-group">
							<label for="is_active">Is Active</label>
							<select class="form-control" name="data[is_active]" required="">
								<option value="">-- Select --</option>
								<option value="yes" @if($data->is_active == 'yes') selected @endif>Yes</option>
								<option value="no" @if($data->is_active == 'no') selected @endif>No</option>
							</select>
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