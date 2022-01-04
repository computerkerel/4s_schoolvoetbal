@extends('pages.base')

@section('content')
    <div class="container">
        <h1>Velden aanpassen</h1>
        <hr>

        @include('fragments.flash-message')

        <form action="{{route('fields.update', $fields->id)}}" method="POST"
              class="w-50 mx-auto">
            @csrf
            @method('PUT')
        <div class="form-group">
            <input type="text" name="naam">
        </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Opslaan">
            </div>

        </form>
    </div>




@endsection
