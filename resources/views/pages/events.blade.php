@extends('pages.base')

@section('content')
	<div class="container">

		<div class="d-flex justify-content-between">
			<h1>Wedstrijden</h1>

			@if(Auth::user()->role == 3)
				<form action="{{route('events.clear')}}" method="POST" class="my-auto">
					@csrf
					<input type="button" class="btn btn-danger" id="clear-events" value="Alles verwijderen"
					       data-bs-toggle="modal"
					       data-bs-target="#clearEventsModal">

					<!-- Modal -->
					<div class="modal fade" id="clearEventsModal" tabindex="-1" aria-labelledby="clearEventsModal"
					     aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="clearEventsModalLabel">Alle wedstrijden
										verwijderen?</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
									        aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<p>Dit kan niet ongedaan gemaakt worden.</p>
									<p><strong>Weet je het zeker?</strong></p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuleren
									</button>
									<button type="submit" class="btn btn-danger">Verwijderen</button>
								</div>
							</div>
						</div>
					</div>
					<!-- Einde van Modal -->

				</form>
			@endif
		</div>

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
			<a href="{{route('wedstrijden.create')}}" class="btn btn-primary"><i class="bi bi-plus-square"></i> Nieuwe
				wedstrijd
			</a>
		@endauth
	</div>

	<script>
        var modal = document.getElementById('clearEventsModal');
        var trigger = document.getElementById('clear-events');

        modal.addEventListener('shown.bs.modal', function () {
            trigger.focus()
            event.preventDefault();
        });
	</script>
@endsection

