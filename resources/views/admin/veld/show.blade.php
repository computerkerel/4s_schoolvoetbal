@extends('pages.base')

@section('content')
	<div class="container">
		<h1>Velden Detailpagina</h1>
		<hr>

		<p><strong>Naam:</strong> {{$field->naam}}</p>

		<a href="{{route('fields.edit', $field->id)}}" class="btn btn-info">Aanpassen</a>

		<form action="{{route('fields.destroy', $field->id)}}" method="POST">
			@csrf
			@method('DELETE')
			<input type="submit" class="btn btn-danger" value="Verwijderen">
		</form>
	</div>
@endsection
