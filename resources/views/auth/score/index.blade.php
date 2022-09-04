@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           


<div class="card">
               
   <div class="card-header">
       Scores
   </div>
   <div class="card-body">
    <br>
         
       <div class="list-group">
        <a href="/Scores/create" class="list-group-item list-group-item-action"> create new score +</a>
    <br>
          @foreach ($scores as $score )
           <p><a href="{{ route('Scores.show', $score->id) }}" class="list-group-item list-group-item-action">
             {{ $score->score }} </a> 
             <div class="d-grid gap-2 col-2 ">
             <form method="POST" action="{{ route('Scores.destroy', $score->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a type="button" class="btn btn-warning " href="{{ route('Scores.edit',$score) }}">Edit</a>
             </div></p>
        @endforeach
       
         </div>
         <br>
         <a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a>
</div>
</div>
</div>
</div>

@endsection