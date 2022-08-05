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



        <form action="{{ route('Handicaps.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Handicap Name</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp">
     
      <div id="nameHelp" class="form-text">Make sure the handicap name is unique, no duplicates allowed</div>
      <label for="category" class="form-label">Category</label>
      <select class="form-select" aria-label="category select" name="category_id">
        <option selected>Choose the category from the list below...</option>
        @foreach ($categories as $category )
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
      <label for="location" class="form-label">Location</label>
      <select class="form-select" aria-label="location select" name="location">
        <option selected>Choose the location from the list below...</option>
        <option value="Outdoor">Outdoor</option>
        <option value="Indoor">Indoor</option>
      </select>
    </div>
    <button type="submit" class="btn btn-outline-secondary btn-sm">Create</button>
  </form>
  <br>
  <a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a>
    </div>
</div>
        </div></div></div>
        @endsection
