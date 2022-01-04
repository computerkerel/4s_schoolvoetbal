@extends('pages.base')

@section('content')
	<div class="container">
		<h1>Velden</h1>
		<table class="table">
			<thead>
				<tr>
					<th>Naam</th>
					<th>Aangemaakt door</th>
				</tr>
			</thead>
			<tbody>
				@foreach($fields as $field)
					<tr>
						<td>
							<a href="{{route('fields.show', $field->id)}}">{{$field->naam}}</a>
						</td>
						<td>{{$field->aangemaakt_door->name}}</td>
					</tr>
				@endforeach
			</tbody>
		</table>
		@auth()
			<a href="{{route('fields.create')}}" class="btn btn-primary"><i class="bi bi-plus-square"></i> Nieuwe Veld
			</a>
		@endauth
	</div>
@endsection
