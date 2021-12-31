@extends('pages.base')

@section('content')
	<div class="container">
		<h1>Velden Detailpagina</h1>
		<hr>

		<p>{{$fields->naam}}</p>
		<a href="{{route('fields.edit', $fields->id)}}" class="btn btn-info">Aanpassen</a>

		<form action="{{route('fields.destroy', $fields->id)}}" method="POST">
			@csrf
			@method('DELETE')
			<input type="submit" class="btn btn-danger" value="Verwijderen">
		</form>
	</div>
@endsection
