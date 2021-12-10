@extends('pages.base')

@section('content')
	<div class="container">
		<h1>Team aanpassen</h1>

		@include('fragments.flash-message')

		<form action="{{route('teams.update', $team->id)}}" method="POST" class="w-50 mx-auto">
			@csrf
			@method('PUT')
			<div class="mb-3">
				<label for="teamnaam" class="form-label">Titel</label>
				<input type="text" class="form-control" id="teamnaam" name="teamnaam" value="{{$team->teamnaam}}">
			</div>

			<div class="mb-3">
				<label for="ingeschreven_door" class="form-label">Ingeschreven door</label>
				<input type="text" class="form-control" name="ingeschreven_door" id="ingeschreven_door" value="{{$team->ingeschreven_door}}" readonly>
			</div>

			<div class="mb-3">
				<input type="submit" class="btn btn-primary" value="Opslaan">
			</div>

		</form>
	</div>
@endsection
