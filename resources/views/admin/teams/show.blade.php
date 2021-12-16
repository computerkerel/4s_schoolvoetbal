@extends('pages.base')

@section('content')
	<div class="container">
		<h1>Team Detailpagina</h1>
		<hr>

		<div class="container d-flex">
			<div class="w-50">
				<h2>{{$team->teamnaam}}</h2>
				<p><strong>Teamnaam:</strong> {{$team->teamnaam}}</p>
				<p><strong>Ingeschreven door:</strong> {{$team->ingeschreven_door}}</p>

				<a href="{{route('teams.edit', $team->id)}}" class="btn btn-info">Aanpassen</a>

				<form action="{{route('teams.destroy', $team->id)}}" method="POST">
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
									<p>Als je dit team verwijderd worden ook alle wedstrijden van dit team
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
				</form>
			</div>

			<div class="w-50">
				<div class="container-lg mg-auto overflow-hidden">
					<h2>Spelers</h2>
					<div class="row g-2">
						@foreach($team->players as $player)
							<div class="col-5">
								<div class="p-2 border bg-light">
									{{$player->naam}}
								</div>
							</div>
						@endforeach
					</div>
				</div>
			</div>
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
