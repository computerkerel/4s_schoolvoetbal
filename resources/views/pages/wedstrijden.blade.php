
@extends('pages.base')

@section('content')




        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">score</th>
                    <th scope="col">locatie</th>
                    <th scope="col">scheidsrechter</th>
                    <th scope="col">status</th>
                </tr>
                </thead>
                <tbody>
                @foreach($wedstrijden as $wedstrijd)
                    <tr>
                        <td>{{$wedstrijd->title}}</td>
                        <td>{{$wedstrijd->score_team1}}-{{$wedstrijd->score_team2}}</td>
                        <td>{{$wedstrijd->locatie}}</td>
                        <td>{{$wedstrijd->scheidsrechter}}</td>
                        <td>{{$wedstrijd->status}}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

@endsection

