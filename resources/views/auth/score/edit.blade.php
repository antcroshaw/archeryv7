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


        <form action="{{ route('Scores.update', $score->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
              <div class="mb-3">
                <label for="round" class="form-label">Round Name</label>
                <select class="form-control" id="round" name="round_id">
                  <option value="1"  {{ $score->round_id === 1 ? 'selected' : '' }} >Bristol</option>
                  <option value="2" {{ $score->round_id === 2 ? 'selected' : '' }}>York</option>
                </select>
              </div>
              <div class="mb-3">
                  <label for="archer" class="form-label">Archer Name</label>
                  <select class="form-control" id="archer" name="archer_id">
                    <option value="1" {{ $score->archer_id === 1 ? 'selected' : '' }}>Anthony Croshaw</option>
                    <option value="2" {{ $score->archer_id === 2 ? 'selected' : '' }}>Mike Croshaw</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="location" class="form-label">location</label>
                  <select class="form-control" id="archer" name="location">
                    <option value="Outdoor" {{ $score->location === 'Outdoor' ? 'selected' : '' }}>Outdoor</option>
                    <option value="Indoor" {{ $score->location === 'Indoor' ? 'selected' : '' }}>Indoor</option>
                  </select>
                </div>
                <div class="mb-3">
                  <label for="score" class="form-label">Score</label>
                  <input type="text" class="form-control" id="score" name="score" value="{{ $score->score }}">
                </div>
              <button type="submit" class="btn btn-outline-secondary btn-sm">Update</button>
            </form>
  <br>
  <a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a>
    </div>
</div>
        </div></div></div>
        @endsection
