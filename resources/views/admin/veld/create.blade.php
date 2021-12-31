@extends('pages.base')

@section('content')
	<div class="container">
		<h1>Nieuw veld</h1>

		@include('fragments.flash-message')

		<form action="{{route('fields.store')}}" method="POST" class="w-50 mx-auto">
			@csrf
			<div class="mb-3">
				<label for="naam" class="form-label">Veldnaam</label>
				<input type="text" class="form-control" name="naam" value="{{old('naam')}}">
			</div>

			<div class="mb-3">
				<label for="aangemaakt_door" class="form-label">Ingeschreven door</label>
				<input type="text" class="form-control" name="aangemaakt_door" id="disabledTextInput"
				       value="{{Auth::user()->name}}" readonly>
			</div>

			<div class="mb-3">
				<input type="submit" class="btn btn-primary" value="Opslaan">
			</div>
		</form>
	</div>
@endsection
