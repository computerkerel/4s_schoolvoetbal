@extends('pages.base')

@section('content')
	<div class="container">
		<h1>Velden aanpassen</h1>
		<hr>

		@include('fragments.flash-message')

		<form action="{{route('fields.update', $field->id)}}" method="POST"
		      class="w-50 mx-auto">
			@csrf
			@method('PUT')

			<div class="mb-3">
				<label for="naam" class="form-label">Naam</label>
				<input type="text" class="form-control" name="naam" id="naam" value="{{$field->naam}}">
			</div>

			<div class="mb-3">
				<input type="submit" class="btn btn-primary" value="Opslaan">
			</div>

		</form>
	</div>

@endsection
