@extends('pages.base')

@section('content')
	<div class="container">

		<h1>Teams</h1>

		@include('fragments.flash-message')

		<table class="table">
			<thead>
				<tr>
					<th>Team</th>
					<th>Ingeschreven door</th>
				</tr>
			</thead>
			<tbody>
				@foreach($teams as $team)
					<tr>
						<td>
							<a href="{{route('teams.show', $team->id)}}">{{$team->teamnaam}}</a>
						</td>
						<td>{{$team->inschrijver->name}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		@auth()
			@if(count($matches) > 0)
				<span class="d-inline-block" id="create-team" data-bs-toggle="tooltip" data-bs-placement="top"
				      title="Kan alleen als er geen wedstrijden gepland zijn">

						<a href="{{route('teams.create')}}" class="btn btn-primary disabled" tabindex="-1" role="button">
							<i class="bi bi-plus-square"></i> Nieuw team</a>
				</span>
			@else
				<a href="{{route('teams.create')}}" class="btn btn-primary"><i class="bi bi-plus-square"></i> Nieuw team
				</a>
			@endif
		@endauth
	</div>

	<script>
        var buttonWithTooltip = document.getElementById('create-team')
        var tooltip = new bootstrap.Tooltip(buttonWithTooltip)
	</script>


@endsection

