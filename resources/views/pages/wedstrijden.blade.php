
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

                        @if($wedstrijd->score_team1 > $wedstrijd->score_team2)
                           <td> <p>{{$wedstrijd->team1}} heeft gewonnen</p></td>
                        @else
                          <td>  <p>Team2 heeft gewonnen</p></td>

                            @elseif()
                                <td>  <p>Gelijkspel</p></td>
                            @endif

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

@endsection

