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


        <form action="{{ route('Categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
  @csrf
  @method('PATCH')
    <div class="mb-3">
      <label for="name" class="form-label">Category Name - Edit</label>
      <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" value="{{ $category->name }}">
      <div id="nameHelp" class="form-text">Make sure the category name is unique, no duplicates allowed</div>
    </div>
    <button type="submit" class="btn btn-outline-secondary btn-sm">Update</button>
  </form>
  <br>
  <a href="/home" type="button" class="btn btn-secondary btn-sm">admin menu</a>
    </div>
</div>
        </div></div></div>
        @endsection
