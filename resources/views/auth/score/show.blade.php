@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



<div class="card">

   <div class="card-header">
     {{ $score->score }}
   </div>
   <div class="card-body">
    <div class="list-group">
      <p>Archer Name: {{ $score->archer->name }}</p>
      <p>Location: {{ $score->location }}</p>
      <p>Round type: {{ $score->round->name }}</p>
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
