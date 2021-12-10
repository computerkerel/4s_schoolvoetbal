@extends('pages.base')

@section('content')
	<div class="container">

		<h1>Teams</h1>

		@include('fragments.flash-message')

		<table class="table">
			<thead>
				<tr>
					<th>Name</th>
					<th>Team</th>
				</tr>
			</thead>
			<tbody>
				@foreach($teams as $team)
					<tr>
						<td>{{$team->ingeschreven_door}}</td>
						<td>{{$team->teamnaam}}</td>
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

