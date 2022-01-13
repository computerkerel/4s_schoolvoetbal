@extends('pages.base')

@section('content')
	<div class="container">
		<h1>Spelers</h1>

		@include('fragments.flash-message')

		<div class="w-100 row mx-auto gx-5">
			@foreach($teams as $team)
				<div class="col-4">

					<table class="table w-100">
						<thead>
							<tr>
								<th>
									<div class="d-flex justify-between">
										<h3 class="w-auto">{{$team->teamnaam}}</h3>
										<span class="text-black-50 fs-4 my-0 ms-3 w-auto">({{count($team->players)}}/11)</span>
									</div>
								</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
							@foreach($team->players as $player)
								<tr class="player-row p-0">
									<td class="align-middle player-name">{{$player->naam}}</td>
									<td class="delete-player">
										<form action="{{route('players.destroy', $player->id)}}" method="POST">
											@csrf
											@method('DELETE')
											<button type="submit" class="btn btn-outline-danger py-0">
												<i class="bi bi-trash"></i>
											</button>
										</form>
									</td>
								</tr>
							@endforeach
						</tbody>
						@auth()
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
						@endauth
					</table>
				</div>
			@endforeach

		</div>

		@auth()
			<a href="{{route('teams.create')}}" class="btn btn-primary"><i class="bi bi-plus-square"></i>
				Nieuw team
			</a>
		@endauth
	</div>
@endsection
