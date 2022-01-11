@extends('pages.base')

@section('content')
	<div class="container">
		<div class="row g-5 py-5 justify-content-around h-50">
			<div class="col-md-6 h-100">
				<div class="border px-3 bg-light p-3 text-center">
					<h2 class="mb-3">Scheidsrechter</h2>
					<hr>
					<p>
						Ik wil me registreren als scheidsrechter om wedstrijden te fluiten.
					</p>
					<a href="{{route('register', ['role' => 2])}}" class="btn btn-success">Registreren</a>
				</div>

			</div>

			<div class="col-md-6 h-100">
				<div class="border px-3 bg-light p-3 text-center">
					<h2 class="mb-3">Speler</h2>
					<hr>
					<p>
						Ik wil me aanmelden als speler om mee te doen aan wedstrijden.
					</p>
					<a href="{{route('register', ['role' => 1])}}" class="btn btn-success">Registreren</a>
				</div>
			</div>
		</div>
	</div>
@endsection
