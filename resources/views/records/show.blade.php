{{-- Record page --}}

@extends('layout')

@section('content')
	<div class="card record">
		<div class="card-block">
			<h4 class="card-title">
				{{ $record->first_name }} {{ $record->last_name }}
			</h4>
			<p class="card-text"><strong>Address:</strong> {{ $record->address }}</p>
			<p class="card-text"><strong>Phone:</strong> {{ $record->phone }}</p>
			<p class="card-text"><strong>Email:</strong>
				<a href="mailto:{{ $record->email }}">
					{{ $record->email }}
				</a>
			</p>
			<a href="/{{ $record->id }}/edit" class="card-link">Edit</a>
			<a href="/{{ $record->id }}/delete" class="card-link text-danger">Delete</a>
		</div>
	</div>

	<a href="/" class="btn btn-primary">Back</a>
@endsection
