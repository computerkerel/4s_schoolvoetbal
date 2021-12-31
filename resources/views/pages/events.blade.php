@extends('pages.base')

@section('content')
	<div class="container">

		<h1>Wedstrijden</h1>

		@include('fragments.flash-message')

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
						<td>
							<a href="{{route('wedstrijden.show', $wedstrijd->id)}}">
								{{$wedstrijd->team1->teamnaam}}
							</a>
						</td>
						<td>{{$wedstrijd->team2->teamnaam}}</td>
						<td>{{$wedstrijd->score_team1}}-{{$wedstrijd->score_team2}}</td>
						<td>{{$wedstrijd->field->naam}}</td>
						<td>{{date('d-m-Y', strtotime($wedstrijd->datum))}}</td>
						<td>{{$wedstrijd->scheidsrechter->name}}</td>
						<td>{{$wedstrijd->status}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
        @auth()
		<a href="{{route('wedstrijden.create')}}" class="btn btn-primary"><i class="bi bi-plus-square"></i> Nieuwe wedstrijd</a>
        @endauth
	</div>
@endsection

