@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           


<div class="card">
               
   <div class="card-header">
       Handicaps
   </div>
   <div class="card-body">
    <br>
         
       <div class="list-group">
        <a href="/Handicaps/create" class="list-group-item list-group-item-action"> create new handicap +</a>
    <br>
          @foreach ($handicaps as $handicap )
           <p><a href="{{ route('Handicaps.show', $handicap->id) }}" class="list-group-item list-group-item-action">
             {{ $handicap->handicap }} </a> 
             <div class="d-grid gap-2 col-2 ">
             <form method="POST" action="{{ route('Handicaps.destroy', $handicap->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a type="button" class="btn btn-warning " href="{{ route('Handicaps.edit',$handicap) }}">Edit</a>
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