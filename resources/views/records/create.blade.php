{{-- Store a new Record --}}
@extends('layout')

@section('content')

	<a href="/" class="btn btn-primary">Back</a>
	<h2 class="text-center">Create new record</h2>
	<form method="POST" action="/store" data-toggle="validator" role="form">
		{{ csrf_field() }}
		<label class="control-label">Name</label>

		<div class="form-group row">
			<div class="col-sm-6">
				<input type="text" name="first_name" class="form-control col-sm-6" placeholder="Enter first name" required>
			</div>
			<div class="col-sm-6">
				<input type="text" name="last_name" class="form-control col-sm-6" placeholder="Enter last name" required>
			</div>
		</div>

		<div class="form-group">
			<label class="control-label" for="txtPhone">Phone <small>&nbsp;555-555-5555</small></label>
			<input type="tel" name="phone" class="form-control" pattern="^\d{3}-\d{3}-\d{4}$" placeholder="Enter phone number" required>
		</div>

		<div class="form-group">
			<label class="control-label" for="txtEmail">Email</label>
			<input type="email" id="txtEmail" name="email" class="form-control" data-error="Enter a valid email address. A@B.C" placeholder="Enter email address" required>
		</div>

		<div class="form-group">
			<label class="control-label" for="txtAddress">House Address</label>
			<textarea type="text" id="txtAddress" name="address" class="form-control" placeholder="Enter home address" required></textarea>
		</div>

		<button type="submit" class="btn btn-primary">Save Record</button>
	</form>

	@if (count($errors))
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif


@endsection
