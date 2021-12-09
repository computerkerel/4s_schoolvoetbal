@extends('pages.base')

@section('content')
	<div class="container">
		<h1>Nieuwe wedstrijd</h1>

		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form action="{{route('wedstrijden.store')}}" method="POST" class="w-50 mx-auto">
			@csrf
			<div class="mb-3">
				<label for="title" class="form-label">Titel</label>
				<input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
			</div>

			<div class="row">
				<div class="mb-3 col-5">
					<label for="team1" class="form-label">Team 1</label>
					<select name="team1" id="team1" class="form-select">
						<option value="" selected disabled>-- Team --</option>
						@foreach($teams as $team)
							@if(old('team1') == $team->id)
								<option value="{{$team->id}}" selected>{{$team->teamnaam}}</option>
							@else
								<option value="{{$team->id}}">{{$team->teamnaam}}</option>
							@endif
						@endforeach
					</select>
				</div>

				<div class="d-flex justify-content-center align-items-center mb-3 col-2 pt-4 px-auto">
					<span class="text-center">vs.</span>
				</div>

				<div class="mb-3 col-5">
					<label for="team2" class="form-label">Team 2</label>
					<select name="team2" id="team2" class="form-select">
						<option value="" selected disabled>-- Team --</option>
						@foreach($teams as $team)
							@if(old('team2') == $team->id)
								<option value="{{$team->id}}" selected>{{$team->teamnaam}}</option>
							@else
								<option value="{{$team->id}}">{{$team->teamnaam}}</option>
							@endif
						@endforeach
					</select>
				</div>

				<div class="mb-3">
					<label for="datum" class="form-label">Datum</label>
					<input type="date" class="form-control" name="datum" id="datum" value="{{old('datum')}}">
				</div>

			</div>

			<div class="mb-3">
				<label for="scheidsrechter" class="form-label">Scheidsrechter</label>
				<input type="text" class="form-control" name="scheidsrechter" id="scheidsrechter" value="{{old('scheidsrechter')}}">
			</div>

			<div class="mb-3">
				<label for="locatie" class="form-label">Locatie</label>
				<input type="text" class="form-control" name="locatie" id="locatie" value="{{old('locatie')}}">
			</div>

			<div class="mb-3">
				<input type="submit" class="btn btn-primary" value="Opslaan">
			</div>

		</form>
	</div>
@endsection
