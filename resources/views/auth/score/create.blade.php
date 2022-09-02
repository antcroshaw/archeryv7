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


        <form action="{{ route('Scores.store') }}" method="POST" enctype="multipart/form-data">
  @csrf
    <div class="mb-3">
      <label for="round" class="form-label">Round Name</label>
      <select class="form-control" id="round" name="round">
        <option value="1">Bristol</option>
        <option value="2">York</option>
      </select>
    </div>
    <div class="mb-3">
        <label for="archer" class="form-label">Archer Name</label>
        <select class="form-control" id="archer" name="archer">
          <option value="1">Anthony Croshaw</option>
          <option value="2">Mike Croshaw</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="location" class="form-label">location</label>
        <select class="form-control" id="archer" name="archer">
          <option value="Outdoor">Outdoor</option>
          <option value="Indoor">Indoor</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="score" class="form-label">Score</label>
        <input type="text" class="form-control" id="score" name="score">
      </div>
    <button type="submit" class="btn btn-outline-secondary btn-sm">Create</button>
  </form>
  <br>
  <a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a>
    </div>
</div>
        </div></div></div>
        @endsection
