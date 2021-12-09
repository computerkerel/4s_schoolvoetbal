@extends('pages.base')

@section('content')
	<div class="container-lg mg-auto">
		<div class="row g-5 py-5 justify-content-around h-50">
			<div class="col-md-6 h-100">
				<div class="border px-3 bg-light">
					<h1  style="text-align: center">Volgende wedstrijden</h1>
                        @foreach($wedstrijden as $wedstrijd)
                        <h2 style="text-align: center">{{$wedstrijd->team1->teamnaam}} Vs {{$wedstrijd->team2->teamnaam}} </h2>
                    <p  style="text-align: center">Op  {{$wedstrijd->locatie}} om {{$wedstrijd->datum}} </p>






                        @endforeach

				</div>
			</div>

			<div class="col-md-6 h-100">
				<div class="border px-3 bg-light">
					<h2>Welkom</h2>
				</div>
			</div>
		</div>
	</div>
@endsection
