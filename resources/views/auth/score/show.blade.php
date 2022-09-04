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
      <p>Archer Id: {{ $score->archer_id }}</p> // replace this with archer name 
      <p>Location: {{ $score->location }}</p>
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
