@extends('frontend.main')

@section('content')
<section class="page-title-section overlay" >
	</section>
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-12">
		<form method="post">
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" required="">
			</div>

			<div class="form-group">
				<label>Password</label>
				<input type="password" name="password" required="">
			</div>

			<input type="submit" class="btn btn-flat btn-success" value="Login">
			{{ csrf_field() }}
		</form>
	</div>
</div>
</div>
</section>

@stop