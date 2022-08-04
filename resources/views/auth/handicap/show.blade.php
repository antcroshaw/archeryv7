@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
           


<div class="card">     
   <div class="card-header">
    {{ $handicap->name }}
   </div>
   {{-- <div class="card-body">
    @forelse ($handicaps as $handicap)
	<p>{{ $handicap->name }}</p>
	@empty
	<p>no handicaps have been added</p>
@endforelse --}}
<p>scores will go here
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