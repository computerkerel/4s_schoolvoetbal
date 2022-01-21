@extends('pages.base')
@section('content')
    <div class="container">

        <h1>Scheidsrechter</h1>

        @include('fragments.flash-message')

        <table class="table">
            <thead>
            <tr>
                <th>naam</th>
            </tr>
            </thead>
            <tbody>
            @foreach($scheidsrechters as $scheidsrechter)
                <tr>
                    <td>
                        <a href="{{route('scheidsrechters.show', $scheidsrechter->id )}}">{{$scheidsrechter->name}}</a>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

    </div>

@endsection

