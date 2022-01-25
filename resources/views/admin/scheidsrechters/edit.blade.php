@extends('pages.base')

@section('content')
    <div class="container">
        <h1>scheidsrechter aanpassen</h1>
        <hr>

        @include('fragments.flash-message')

        <div class="container d-flex">
            <div class="container w-50">
                <h2>Details</h2>
                <form action="{{route('scheidsrechters.update', $scheidsrechters->id)}}" method="POST" class="w-75">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="scheidsrechtersnaam" class="form-label">Naam</label>
                        <input type="text" class="form-control" id="name" name="name"
                               value="{{$scheidsrechters->name}}">
                    </div>



                    <div class="mb-3">
                        <input type="submit" class="btn btn-primary" value="Opslaan">
                    </div>

                </form>
            </div>
    </div>
@endsection
