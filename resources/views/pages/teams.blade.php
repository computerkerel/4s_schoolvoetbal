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
							<a href="{{route('teams.show', $team->id)}}">{{$team->teamnaam}}</a></td>
						<td>{{$team->ingeschreven_door}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		@auth()
			<a href="{{route('teams.create')}}" class="btn btn-primary"><i class="bi bi-plus-square"></i> Nieuw team</a>
		@endauth
		<img src="https://source.unsplash.com/user/erondu/1300x400">
	</div>

@endsection

