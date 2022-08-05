@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           


<div class="card">
               
   <div class="card-header">
     {{ $category->name }}
   </div>
   <div class="card-body">
    <div class="list-group">
       @forelse ($handicaps as $handicap )
        <p><a href="{{ route('Handicaps.show', $handicap->id) }}" class="list-group-item list-group-item-action">
          {{ $handicap->name }} </a> 
          <div class="d-grid gap-2 col-2 ">
          <form method="POST" action="{{ route('Handicaps.destroy', $handicap->id) }}">
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-danger">Delete</button>
         </form>
         <a type="button" class="btn btn-warning " href="{{ route('Handicaps.edit',$handicap->id) }}">Edit</a>
          </div></p>
     @endforeach
     <a href="/Handicaps/create" class="list-group-item list-group-item-action"> create new handicap +</a>
      </div>
      <br>
      <a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a>
</div>
   {{-- <div class="card-body">
    @forelse ($handicaps as $handicap)
	<p>{{ $handicap->name }}</p>
	@empty
	<p>no handicaps have been added</p>
@endforelse --}}
   </div>
   <div class="d-grid gap-2 col-2 mx-auto ">
   <a href="{{ route('Categories.index') }}" type="button" class="btn btn-secondary btn-sm">Back to Home</a>
   <br>
   </div>
</div>
        </div>
    </div>
</div>
@endsection