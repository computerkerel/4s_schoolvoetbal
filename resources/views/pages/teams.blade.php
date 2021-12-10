@extends('pages.base')

@section('content')




   <div class="container">
       <table class="table table">
           <thead>
           <tr>
               <th scope="col">Name</th>
               <th scope="col">Team</th>
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

   </div>

@endsection

