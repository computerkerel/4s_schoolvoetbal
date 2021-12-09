@extends('pages.base')

@section('content')
	<div class="container">
		<table class="table">
			<thead>
				<tr>
					<th>Team 1</th>
					<th>Team 2</th>
					<th>Uitslag</th>
					<th>Locatie</th>
					<th>Datum</th>
					<th>Scheidsrechter</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				@foreach($wedstrijden as $wedstrijd)
					<tr>
						<td>{{$wedstrijd->team1->teamnaam}}</td>
						<td>{{$wedstrijd->team2->teamnaam}}</td>
						<td>{{$wedstrijd->score_team1}}-{{$wedstrijd->score_team2}}</td>
						<td>{{$wedstrijd->locatie}}</td>
						<td>{{$wedstrijd->datum}}</td>
						<td>{{$wedstrijd->scheidsrechter}}</td>
						<td>{{$wedstrijd->status}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		<a href="{{route('wedstrijden.create')}}" class="btn btn-primary"><i class="bi bi-plus-square"></i> Nieuwe wedstrijd</a>
	</div>
@endsection

