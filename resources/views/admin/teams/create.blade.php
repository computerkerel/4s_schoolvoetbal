@extends('pages.base')

@section('content')
	<div class="container">
		<h1>Nieuw team</h1>

		@include('fragments.flash-message')

		<form action="{{route('teams.store')}}" method="POST" class="w-50 mx-auto">
			@csrf
			<div class="mb-3">
				<label for="teamnaam" class="form-label">Teamnaam</label>
				<input type="text" class="form-control" id="teamnaam" name="teamnaam" value="{{old('teamnaam')}}">
			</div>

			<div class="mb-3">
				<label for="ingeschreven_door" class="form-label">Ingeschreven door</label>
				<input type="text" class="form-control" name="ingeschreven_door" id="disabledTextInput" value="{{Auth::user()->name}}" readonly>
			</div>

			<div class="mb-3">
				<input type="submit" class="btn btn-primary" value="Opslaan">
			</div>

		</form>
	</div>
@endsection
