@extends('pages.base')

@section('content')
	<div class="container">
		<h1>Team Detailpagina</h1>
		<hr>
		<h2>{{$team->teamnaam}}</h2>
		<p><strong>Teamnaam:</strong> {{$team->teamnaam}}</p>
		<p><strong>Ingeschreven door:</strong> {{$team->ingeschreven_door}}</p>

		<a href="{{route('teams.edit', $team->id)}}" class="btn btn-info">Aanpassen</a>

		<form action="{{route('teams.destroy', $team->id)}}" method="POST">
			@csrf
			@method('DELETE')
			<input type="submit" class="btn btn-danger" value="Verwijderen">
		</form>
	</div>
@endsection
