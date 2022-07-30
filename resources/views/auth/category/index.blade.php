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
           <a href="#" class="list-group-item list-group-item-action"> {{ $category->name }} </a>
        @endforeach
        <a href="#" class="list-group-item list-group-item-action"> create new category +</a>
         </div>
         <br>
         <a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a>
</div>
</div>
</div>
</div>

@endsection