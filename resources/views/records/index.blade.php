{{-- Home page --}}
@extends('layout')


@section('content')


	<a class="btn btn-primary" href="/create">Add Record</a>
	<ul class="list-group">
		@foreach ($records as $record)
			<li class="list-group-item">
				<a href="/{{$record->id}}">{{ $record->first_name }} {{ $record->last_name }} </a>
				<a href="/{{ $record->id }}/delete" class="card-link text-danger pull-right">Delete</a>
				<a href="/{{ $record->id }}/edit" class="card-link pull-right">Edit</a>
			</li>
		@endforeach
	</ul>


@endsection
