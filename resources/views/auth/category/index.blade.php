@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           


<div class="card">
               
   <div class="card-header">
       Categories
   </div>
   <div class="card-body">
       <div class="list-group">
          @foreach ($categories as $category )
           <p><a href="{{ route('Categories.show', $category->id) }}" class="list-group-item list-group-item-action">
             {{ $category->name }} </a> 
             <div class="d-grid gap-2 col-2 ">
             <form method="POST" action="{{ route('Categories.destroy', $category->id) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            <a type="button" class="btn btn-warning " href="#">Edit</a>
             </div></p>
        @endforeach
        <a href="/Categories/create" class="list-group-item list-group-item-action"> create new category +</a>
         </div>
         <br>
         <a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a>
</div>
</div>
</div>
</div>

@endsection