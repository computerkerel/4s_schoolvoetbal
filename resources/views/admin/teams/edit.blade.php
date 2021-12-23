@extends('pages.base')

@section('content')
	<div class="container">
		<h1>Team aanpassen</h1>

		@include('fragments.flash-message')

		<div class="container d-flex">
			<div class="container w-50">
				<h2>Details</h2>
				<form action="{{route('teams.update', $team->id)}}" method="POST" class="w-75">
					@csrf
					@method('PUT')
					<div class="mb-3">
						<label for="teamnaam" class="form-label">Titel</label>
						<input type="text" class="form-control" id="teamnaam" name="teamnaam"
						       value="{{$team->teamnaam}}">
					</div>

					<div class="mb-3">
						<label for="ingeschreven_door" class="form-label">Ingeschreven door</label>
						<input type="text" class="form-control" name="ingeschreven_door" id="ingeschreven_door"
						       value="{{$team->ingeschreven_door}}" readonly>
					</div>

					<div class="mb-3">
						<input type="submit" class="btn btn-primary" value="Opslaan">
					</div>

				</form>
			</div>

			<div class="w-50">
				<table class="table w-75">
					<thead>
						<tr>
							<th>
								<div class="d-flex">
									<h2>Spelers</h2>
									<span class="text-black-50 fs-4 my-0 ms-3">({{count($team->players)}}/11)</span>
								</div>
							</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
						@foreach($team->players as $player)
							<tr>
								<td>{{$player->naam}}</td>
								<td>
									<form action="{{route('players.destroy', $player->id)}}">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-outline-danger">
											<i class="bi bi-trash"></i>
										</button>
									</form>
								</td>
							</tr>
						@endforeach
					</tbody>
					<tfoot>
						<tr>
							<td>
								<form action="{{route('players.store', $team->id)}}" method="POST">
									@csrf
									<div class="row d-flex justify-content-evenly">
										<input type="text" class="form-control w-75" name="naam" id="naam"
										       placeholder="Naam">
										<input type="submit" class="btn btn-primary w-auto" value="+">
									</div>
								</form>
							</td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
	</div>
@endsection
