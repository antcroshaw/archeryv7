@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



<div class="card">

   <div class="card-header text-center" >
     {{ $score->archer->name }}
   </div>
   <div class="card-body">
    <div class="list-group">
      <p class="strong text-center">Score: {{ $score->score }}</p> 
      <p class="strong text-center">Location: {{ $score->location }}</p>
      <p class="strong text-center">Round type: {{ $score->round->name }}</p>
      </div>
      
</div>

   
   <div class="d-grid gap-2 col-2 mx-auto ">
   <a href="{{ route('Scores.index') }}" type="button" class="btn btn-secondary btn-sm">Back to Home</a>
   <br>
   </div>
</div>
        </div>
    </div>
</div>
@endsection
