@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">



<div class="card">
    <div class="card-body">
        <div class="pb-8">
            @if ($errors->any())
              
                <ul class="list-group list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li class="list-group-item-danger">
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </div>



        <form action="{{ route('Handicaps.update', $handicap->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PATCH')
    <div class="mb-3">
      <label for="name" class="form-label">Handicap Name</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" value="{{ $handicap->name }}">
     
      <div id="nameHelp" class="form-text">Make sure the handicap name is unique, no duplicates allowed</div>
      <label for="category" class="form-label">Category</label>
      <select class="form-select" aria-label="category select" name="category_id">
       
        @foreach ($categories as $category )
        <option value="{{ $category->id }}" {{ $handicap->category_id == $category->id ? 'selected' : '' }}>
          {{ $category->name }}</option>
        @endforeach
      </select>
      <label for="location" class="form-label">Location</label>
      <select class="form-select" aria-label="location select" name="location">
       
        <option value="Outdoor" {{ $handicap->location == "Outdoor" ? 'selected' : '' }}>Outdoor</option>
        <option value="Indoor" {{ $handicap->location == "Indoor" ? 'selected' : '' }}>Indoor</option>
      </select>
    </div>
    <button type="submit" class="btn btn-outline-secondary btn-sm">Update Handicap</button>
  </form>
  <br>
  <a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a>
    </div>
</div>
        </div></div></div>
        @endsection
