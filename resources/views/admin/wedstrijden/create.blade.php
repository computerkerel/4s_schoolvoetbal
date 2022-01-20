@extends('pages.base')

@section('content')
	<div class="container">
		<h1>Nieuwe wedstrijd</h1>

		@include('fragments.flash-message')

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
					<input type="datetime-local" class="form-control" name="datum" id="datum" value="{{old('datum')}}">
				</div>

			</div>

			<div class="mb-3">
				<label for="scheidsrechter" class="form-label">Scheidsrechter</label>
				<select name="scheidsrechter" id="scheidsrechter" class="form-select">
					<option value="" selected disabled>-- Scheidsrechter --</option>
					@foreach($users as $user)
						@if(old('scheidsrechter') == $user->id)
							<option value="{{$user->id}}" selected>{{$user->name}}</option>
						@else
							<option value="{{$user->id}}">{{$user->name}}</option>
						@endif
					@endforeach
				</select>
			</div>

			<div class="mb-3">
				<label for="veld" class="form-label">Veld</label>
				<select name="veld" id="veld" class="form-select">
					<option value="" selected disabled>-- Veld --</option>
					@foreach($fields as $field)
						@if(old('veld') == $field->id)
							<option value="{{$field->id}}" selected>{{$field->naam}}</option>
						@else
							<option value="{{$field->id}}">{{$field->naam}}</option>
						@endif
					@endforeach
				</select>
			</div>

			<div class="mb-3">
				<input type="submit" class="btn btn-primary" value="Opslaan">
			</div>

		</form>
	</div>
@endsection
