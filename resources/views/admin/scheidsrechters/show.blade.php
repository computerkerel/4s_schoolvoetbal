@extends('pages.base')

@section('content')
	<div class="container">
		<h1>Scheidsrechter Detailpagina</h1>
		<hr>

		<div class="container d-flex">
			<div class="w-100">
				<h2>{{$scheidsrechters->name}}</h2>
				<div>
					@if($scheidsrechters->wedstrijden->count() > 0)

						<table class="table">
							<thead>
								<tr>
									<th>Team 1</th>
									<th>Team 2</th>
									<th>Datum</th>
									<th>Veld</th>
								</tr>
							</thead>
							<tbody>

								@foreach($scheidsrechters->wedstrijden as $wedstrijd)
									<tr>
										<td>{{$wedstrijd->team1->teamnaam}}</td>
										<td>{{$wedstrijd->team2->teamnaam}}</td>
										<td>{{date('d-m-Y', strtotime($wedstrijd->datum))}} {{date('H:i', strtotime($wedstrijd->datum))}}</td>
										<td>{{$wedstrijd->field->naam}}</td>
									</tr>
								@endforeach

							</tbody>
						</table>

					@else
						<hr>
						<p>Geen geplande wedstrijden</p>
					@endif
				</div>


				<a href="{{route('scheidsrechters.edit', $scheidsrechters->id)}}" class="btn btn-info">Aanpassen</a>

				<form action="{{route('scheidsrechters.destroy', $scheidsrechters->id)}}" method="POST">
					@csrf
					@method('DELETE')
					<input type="button" class="btn btn-danger" id="delete-team" value="Verwijderen"
					       data-bs-toggle="modal"
					       data-bs-target="#deleteTeamModal">

					<!-- Modal -->
					<div class="modal fade" id="deleteTeamModal" tabindex="-1" aria-labelledby="deleteTeamModal"
					     aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="deleteTeamModalLabel">Team verwijderen?</h5>
									<button type="button" class="btn-close" data-bs-dismiss="modal"
									        aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<p>Als je dit scheidsrechter verwijderd worden ook alle wedstrijden van dit
										scheidsrechter
										verwijderd.</p>
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
			</div>


		</div>

		<script>
            var modal = document.getElementById('deleteTeamModal');
            var trigger = document.getElementById('delete-team');

            modal.addEventListener('shown.bs.modal', function () {
                trigger.focus()
                event.preventDefault();
            });
		</script>

@endsection
