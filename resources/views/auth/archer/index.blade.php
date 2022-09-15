@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           


<div class="card">
               
   <div class="card-header">
       Archers
   </div>
   <div class="card-body">
    <br>
         
       <div class="list-group">
        <a href="/Archers/create" class="list-group-item list-group-item-action"> create new archer +</a>
    <br>
          @foreach ($archers as $archer )
           <p><a href="{{ route('Archers.show', $archer->id) }}" class="list-group-item list-group-item-action">
             {{ $archer->name }} </a> 
             <div class="d-grid gap-2 col-2 ">
             <form method="POST" action="{{ route('Archers.destroy', $archer->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a type="button" class="btn btn-warning " href="{{ route('Archers.edit', $archer->id) }}">Edit</a>
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