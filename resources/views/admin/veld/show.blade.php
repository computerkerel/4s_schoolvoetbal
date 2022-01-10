@extends('pages.base')

@section('content')
	<div class="container">
		<h1>Velden Detailpagina</h1>
		<hr>

		<p><strong>Naam:</strong> {{$field->naam}}</p>

		<table class="table">
			<thead>
				<tr>
					<th>Team 1</th>
					<th>Team 2</th>
					<th>Datum</th>
				</tr>
			</thead>
			<tbody>
				@foreach($field->geplande_wedstrijden as $wedstrijd)
		<h2>Geplande wedstrijden</h2>
					<tr>
						<td>{{$wedstrijd->team1->teamnaam}}</td>
						<td>{{$wedstrijd->team2->teamnaam}}</td>
						<td>{{date('d-m-Y H:i', strtotime($wedstrijd->datum))}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>

		<a href="{{route('fields.edit', $field->id)}}" class="btn btn-info">Aanpassen</a>

		<form action="{{route('fields.destroy', $field->id)}}" method="POST">
			@csrf
			@method('DELETE')
			<input type="submit" class="btn btn-danger" value="Verwijderen">
		</form>
	</div>
@endsection
