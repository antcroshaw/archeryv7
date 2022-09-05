@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



<div class="card">

   <div class="card-header">
       Rounds
   </div>
   <div class="card-body">
       <div class="list-group">
          @foreach ($rounds as $round )
           <p><a href="{{ route('Rounds.show', $round->id) }}" class="list-group-item list-group-item-action">
             {{ $round->name }} </a>
             <div class="d-grid gap-2 col-2 ">
             <form method="POST" action="{{ route('Rounds.destroy', $round->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a type="button" class="btn btn-warning " href="{{ route('Rounds.edit',$round->id) }}">Edit</a>
             </div></p>
        @endforeach
        <a href="/Roundss/create" class="list-group-item list-group-item-action"> create new round +</a>
         </div>
         <br>
         <a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a>
</div>
</div>
</div>
</div>

@endsection
