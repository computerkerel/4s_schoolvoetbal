@extends('pages.base')

@section('content')




   <div class="container">
       <table class="table">
           <thead>
           <tr>
               <th scope="col">Name</th>
               <th scope="col">Team</th>
           </tr>
           </thead>
           <tbody>
           @foreach($teams as $team)
           <tr>
               <td>{{$team->name}}</td>
               <td>{{$team->team}}</td>
           </tr>
           @endforeach
           </tbody>
       </table>
   </div>

@endsection

