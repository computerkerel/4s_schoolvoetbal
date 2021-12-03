

@foreach($teams as $team)

    <table>
        <thead>
        <tr>
            <th>{{$team->name}}</th>
            <th>{{$team->team}}</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{$team->name}}</td>
            <td>{{$team->team}}</td>
        </tr>
        </tbody>
    </table>


@endforeach
