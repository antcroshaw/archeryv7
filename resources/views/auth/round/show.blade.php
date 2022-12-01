@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



<div class="card">
    <div class="card-header">
        {{ $round->name }}
    </div>
    <div class="card-body">
          <table class="table table-striped table-hover table-bordered table-responsive">
             <thead class="thead-dark">
               <tr>
                 <th scope="col">
                 Handicap
                 </th>
                 <th>Score</th>
                 <th scope="col">Add 1</th>
                 <th scope="col">Minus 1</th>
                 <th scope="col">Delete</th>
               </tr>
             </thead>
             <tbody>
                 @foreach ($handicaps as $handicap )
                 <tr>
                     
                     <td>{{ $handicap->handicap }}</td>
                     <td>{{ $handicap->score }}</td>
                     <td> <a href="{{ route('handicapInc', ['id' => $handicap->id]) }}"><button class="btn-secondary btn-sm">+</button></a></td>
                     <td> <a href="{{ route('handicapDec', ['id' => $handicap->id]) }}"><button class="btn-secondary btn-sm">-</button></a></td>
                     <td> <form method="POST" action="{{ route('Handicaps.destroy', $handicap->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form></td>
                 </tr>
                 @endforeach
                 
             </tbody>
            
         </table> 
         <div class="pagination justify-content-center">
            {{ $handicaps->links() }}
            </div>
        <br>
        <p><a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a> | <a href="{{ route('Handicaps.create', [
            'name' => $round->name
           ]) }}" type="button" class="btn btn-light btn-sm">add handicap + </a></p>

 </div>
 </div>
 </div>
 </div>
 
 @endsection
 