@extends('pages.base')

@section('content')
	<div class="container-lg mg-auto">
		<div class="row g-5 py-5 justify-content-around h-50">
			<div class="col-md-6 h-100">
				<div class="border px-3 bg-light p-2">
					<h1 class="text-center">Volgende wedstrijden</h1>
					<hr>
					@foreach($wedstrijden as $wedstrijd)
						<h2 class="text-center">
							{{$wedstrijd->team1->teamnaam}} vs {{$wedstrijd->team2->teamnaam}}
						</h2>
						<p class="text-center">
							Op {{$wedstrijd->field->naam}} op {{date('d-m-Y', strtotime($wedstrijd->datum))}}
							om {{date('H:i', strtotime($wedstrijd->datum))}}
						</p>
					@endforeach
				</div>
			</div>

			<div class="col-md-6 h-100">
				<div class="border px-3 bg-light">
					<h2>Welkom</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus adipisci aliquam aut dicta
						distinctio ducimus, eius enim eos error ex explicabo facere facilis id, illo labore libero
						maiores nesciunt nisi non nulla numquam quo repellat, sequi similique voluptatem. Consequatur
						illum ipsum minima non quidem recusandae tenetur. Aliquid consequatur cum, esse est excepturi
						incidunt ipsam, libero minus numquam officiis rem vel vero? Consequatur dolore dolorum id omnis
						quaerat sint sunt tenetur. A amet animi asperiores assumenda atque delectus dicta dolor, dolores
						doloribus error et impedit ipsam, itaque laborum mollitia nemo neque officia pariatur placeat
						porro quos sit sunt ut? Beatae, non?</p>
				</div>
			</div>
		</div>
	</div>
@endsection
