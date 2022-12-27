@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



<div class="card">
  <div class="card-body px-2 ">
    @if ($message = session('message'))
    <div class="alert alert-success">
      {{ $message }}
    </div>
    @endif
</div>
   <div class="card-header">
     {{ $archer->name }}
   </div>
   <div class="card-body">
    <div class="list-group">
      <p>Sex: {{ $archer->sex }}</p> 
      <p>DOB: {{ $archer->DOB }}</p>
      <h3>Scores</h3>
      <ul class="list-group list-group-flush">
      @foreach ($scores as $score )
      <li class="list-group-item ">{{ $score->score }} | {{ $score->location }}</li>
  @endforeach
      </ul>     
</div>
<br>

{{  $scores->links() }}
   
   <div class="d-grid gap-2 col-2 mx-auto ">
   <a href="{{ route('Archers.index') }}" type="button" class="btn btn-secondary btn-sm">Back to Home</a>
   <br>
   </div>
</div>
        </div>
    </div>
</div>
@endsection
