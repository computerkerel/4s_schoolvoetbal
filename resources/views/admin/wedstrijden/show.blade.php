@extends('pages.base')

@section('content')
	<div class="container">
		<h1>Wedstrijd Detailpagina</h1>
		<hr>
		<h2>{{$wedstrijd->title}}</h2>
		<p><strong>Team 1:</strong> {{$wedstrijd->team1->teamnaam}}</p>
		<p><strong>Team 2:</strong> {{$wedstrijd->team2->teamnaam}}</p>
		<p><strong>Datum:</strong> {{$wedstrijd->datum}}</p>
		<p><strong>Locatie:</strong> {{$wedstrijd->locatie}}</p>
		<p><strong>Scheidsrechter:</strong> {{$wedstrijd->scheidsrechter->name}}</p>
		<p><strong>Status:</strong> {{$wedstrijd->status}}</p>

		<a href="{{route('wedstrijden.edit', $wedstrijd->id)}}" class="btn btn-info">Aanpassen</a>

		<form action="{{route('wedstrijden.destroy', $wedstrijd->id)}}" method="POST">
			@csrf
			@method('DELETE')
			<input type="submit" class="btn btn-danger" value="Verwijderen">
		</form>
	</div>
@endsection
