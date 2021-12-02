
wedstrijden

@foreach($wedstrijden as $wedstrijd)

    <table>
        <thead>
        <tr>
            <th>{{$wedstrijd->title}}</th>
            <th>{{$wedstrijd->score}}</th>
            <th>{{$wedstrijd->status}}</th>
        </tr>
        </thead>
        <tbody>
        <tr>
           <td> {{$wedstrijd->title}}</td>
            <td> {{$wedstrijd->score}}</td>
            <td> {{$wedstrijd->status}}</td>
        </tr>
        </tbody>
    </table>


@endforeach
