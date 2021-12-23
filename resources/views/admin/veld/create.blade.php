@extends('pages.base')

@section('content')
    <div class="container">
        <h1>Nieuwe wedstrijd</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{route('fields.store')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" name="naam">


            </div>
            <div class="mb-3">
                <label for="aangemaakt_door" class="form-label">Ingeschreven door</label>
                <input type="text" class="form-control" name="aangemaakt_door" id="disabledTextInput" value="{{Auth::user()->name}}" readonly>
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" value="Opslaan">
            </div>
        </form>
    </div>
@endsection
